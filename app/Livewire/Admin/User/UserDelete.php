<?php

namespace App\Livewire\Admin\User;

use App\Models\User;
use Laravel\Jetstream\InteractsWithBanner;
use Livewire\Component;

class UserDelete extends Component
{
    use InteractsWithBanner;

    public $showDeleteModel = false;
    public $showRestoreModel = false;
    public $showForceDeleteModel = false;
    public $itemId;

    protected $listeners = ['showDeleteModel','showRestoreModel','showForceDeleteModel'];

    public function showDeleteModel($itemId){
        $this->itemId = $itemId;
        $this->showDeleteModel = true;
    }

    public function closeDeleteModel(){
        $this->showDeleteModel = false;
        $this->reset();
    }

    public function delete(){
        $user = User::findOrFail($this->itemId);
        $this->authorize('delete', $user);
        $user->delete();
        $this->reset();
        $this->closeDeleteModel();
        $this->dispatch('refreshParent');
        $this->banner(__('user.delete user'));

    }
    public function render()
    {
        return view('livewire.admin.user.user-delete');
    }
}
