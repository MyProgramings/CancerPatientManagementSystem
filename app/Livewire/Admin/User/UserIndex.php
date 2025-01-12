<?php

namespace App\Livewire\Admin\User;

use App\Livewire\BaseIndex;
use App\Models\Role;
use App\Models\User;
use Livewire\Attributes\Title;

#[Title('Users')]
class UserIndex extends BaseIndex
{
    public ?string $role = null;

    public function updatingRole()
    {
        $this->resetPage();
    }

    public function getItem()
    {
        $users = User::query();

        if (!empty($this->term)) {
            $users = $users->search(trim($this->term));
        }

        if ($this->trashed) {
            $users = $users->onlyTrashed();
        }

        $users = $users->with(['role:id,name,color']);

        if (!empty($this->role)) {
            $users = $users->where('role_id', $this->role);
        }

        return $users->orderBy($this->orderBy, $this->sortBy)->paginate($this->perPage);
    }

    public function render()
    {
        return view('livewire.admin.user.user-index', [
            'users' => $this->readyToLoad ? $this->getItem() : [],
            'roles' => Role::all()->pluck('name', 'id'),
        ]);
    }
}
