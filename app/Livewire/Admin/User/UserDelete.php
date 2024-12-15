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

    public function showRestoreModel($itemId){
        $this->itemId = $itemId;
        $this->showRestoreModel = true;
    }

    public function closeRestoreModel(){
        $this->showRestoreModel = false;
        $this->reset();
    }
    public function restore(){
        $user = User::onlyTrashed()->findOrFail($this->itemId);
        $this->authorize('restore', $user);
        $user->restore();
        $this->reset();
        $this->closeRestoreModel();
        $this->dispatch('refreshParent');
        $this->banner(__('user.restore user'));
    }

    public function showForceDeleteModel($itemid){
        $this->itemId = $itemid;
        $this->showForceDeleteModel = true;
    }
    public function closeForceDeleteModel(){
        $this->showForceDeleteModel = false;
        $this->reset();
    }

    public function forceDelete(){
        $user = User::onlyTrashed()->findOrFail($this->itemId);
        $this->authorize('forceDelete', $user);
        $user->forceDelete();
        $this->reset();
        $this->closeForceDeleteModel();
        $this->dispatch('refreshParent');
        $this->banner(__('user.force delete user'));
    }

    public function render()
    {
        return view('livewire.admin.user.user-delete');
    }
}
