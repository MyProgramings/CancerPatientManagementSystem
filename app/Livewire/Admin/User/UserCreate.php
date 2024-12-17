<?php

namespace App\Livewire\Admin\User;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Livewire\Component;
use Laravel\Jetstream\InteractsWithBanner;
use Livewire\WithFileUploads;

class UserCreate extends Component
{
    use WithFileUploads;
    use InteractsWithBanner;
    
    public $roles;

    public $name, $username, $email, $roleId, $password, $password_confirmation, $profilePhotoPath;
    
    protected $listeners = ['showCreateModel'];

    public bool $showCreateModel = false;

    protected function rules()
    {
        return [
            'name' => ['required', 'string', 'max:50', 'min:5'],
            'username' => ['required', 'string', 'min:5', 'max:20', Rule::unique(User::class), 'regex:/^([a-z])+?(_)?([a-z0-9])+$/i'],
            'email' => ['required', 'string', 'email', 'max:255', Rule::unique(User::class)],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'roleId' => 'required|integer|exists:App\Models\Role,id',
            'profilePhotoPath' => 'nullable|image|mimes:jpeg,png,jpg|max:1024',
        ];
    }

    public function mount($roles){
        $this->roles = $roles;
    }

    public function showCreateModel(){
        $this->showCreateModel = true;
    }

    public function closeCreateModel(){
        $this->showCreateModel = false;
        $this->resetExcept('roles');
        $this->resetValidation();
        $this->resetErrorBag();
    }

    
    public function create()
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

        User::create($data);
        $this->closeCreateModel();
        $this->banner(__('user.create user'));
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
        return view('livewire.admin.user.user-create');
    }
}
