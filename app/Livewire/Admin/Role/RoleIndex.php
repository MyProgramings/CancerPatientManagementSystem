<?php

namespace App\Livewire\Admin\Role;

use App\Livewire\BaseIndex;
use App\Models\Permission;
use App\Models\Role;
use Illuminate\Database\Eloquent\Builder;
use Livewire\Attributes\Title;

#[Title('Roles')]
class RoleIndex extends BaseIndex
{
    public $permissionSearch;

    public function getItem()
    {
        $roles = Role::query();

        if (!empty($this->term)) {
            $roles = $roles->search(trim($this->term));
        }

        if ($this->trashed) {
            $roles = $roles->onlyTrashed()->withCount('userTrashed');
        } else {
            $roles = $roles->withCount('user');
        }

        if ($this->permissionSearch) {
            $roles = $roles->whereHas('permission', function (Builder $query) {
                $query->where('id', $this->permissionSearch);
            });
        }

        return $roles->orderBy($this->orderBy, $this->sortBy)->paginate($this->perPage);
    }
    
    public function render()
    {
        return view('livewire.admin.role.role-index',[
            'roles' => $this->readyToLoad ? $this->getItem() : [],
            'permissions' => Permission::select('id','name','table_name')->get()
        ]);
    }
}
