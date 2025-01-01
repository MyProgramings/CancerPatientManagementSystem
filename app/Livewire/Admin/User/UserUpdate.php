<?php

namespace App\Livewire\Admin\User;

use App\Models\User;
use App\Traits\ToastAlert;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Livewire\WithFileUploads;

class UserUpdate extends Component
{
    use WithFileUploads, ToastAlert;
    
    public $roles;

    public $itemId;

    public $name, $username, $email, $roleId, $password, $password_confirmation, $profilePhotoPath ,$profile_photo_path;
    
    protected $listeners = ['showUpdateModel'];

    public bool $showUpdateModel = false;

    protected function rules()
    {
        return [
            'name' => ['required', 'string', 'max:50', 'min:5'],
            'username' => ['required', 'string', 'min:5', 'max:20', 'regex:/^([a-z])+?(_)?([a-z0-9])+$/i', 'unique:users,username,'.$this->itemId],
            'email' => ['required', 'string', 'email', 'max:255','unique:users,email,'.$this->itemId],
            'password' => ['nullable', 'string', 'min:8', 'confirmed'],
            'roleId' => 'required|integer|exists:App\Models\Role,id',
            'profilePhotoPath' => 'nullable|image|mimes:jpeg,png,jpg|max:1024',
        ];
    }

    public function mount($roles){
        $this->roles = $roles;
    }

    public function showUpdateModel($itemId){
        $this->itemId = $itemId;
        $this->showUpdateModel = true;

        if (!empty($this->itemId)){
            $item = User::find($this->itemId);
            $this->name = $item->name;
            $this->username = $item->username;
            $this->email = $item->email;
            $this->roleId = $item->role_id;
            $this->profile_photo_path = $item->profile_photo_url;
        }
    }

    public function closeUpdateModel(){
        $this->showUpdateModel = false;
        $this->resetExcept('roles');
        $this->resetValidation();
        $this->resetErrorBag();
    }

    public function edit()
    {
        $this->validate();

        $data = [
            'name' => $this->name,
            'username' => $this->username,
            'email' => $this->email,
            'password' => Hash::make($this->password),
            'role_id' => $this->roleId,
            'profile_photo_path' => $this->profilePhotoPath,
        ];

        if (!empty($this->profilePhotoPath)) {
            $url = $this->profilePhotoPath->store('profile-photos', 'public');
            $data['profile_photo_path'] = $url;
        }
        
        if (!empty($this->password)){
            $data['password'] = Hash::make($this->password);
        }

        User::where('id',$this->itemId)->update($data);
        $this->closeUpdateModel();
        $this->toast(__('user.update user'));
        $this->dispatch('refreshParent');
    }

    public function updatedProfilePhotoPath()
    {
        $this->validate([
            'profilePhotoPath' => 'image|mimes:jpeg,png,jpg|max:1024',
        ]);
    }
    
    public function render()
    {
        return view('livewire.admin.user.user-update');
    }
}
