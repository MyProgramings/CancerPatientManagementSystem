<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;

abstract class BaseIndex extends Component
{
    use WithPagination;

    public ?string $term = null;
    public string $orderBy = 'id';
    public string $sortBy = 'desc';
    public int $perPage = 10;
    public bool $trashed = false;
    public $readyToLoad = false;

    protected $listeners = ['refreshParent' => '$refresh'];

    public function loadItems()
    {
        $this->readyToLoad = true;
    }

    public function updatingTerm()
    {
        $this->resetPage();
    }

    public function updatingOrderBy()
    {
        $this->resetPage();
    }

    public function updatingSortBy()
    {
        $this->resetPage();
    }

    public function updatingPerPage()
    {
        $this->resetPage();
    }

    public function updatingTrashed()
    {
        $this->resetPage();
    }

    public function selectedItem($action, $itemId = null)
    {
        $eventMap = [
            'create' => 'showCreateModel',
            'update' => 'showUpdateModel',
            'show' => 'showItemModel',
            'delete' => 'showDeleteModel',
            'restore' => 'showRestoreModel',
            'forceDelete' => 'showForceDeleteModel',
        ];

        if (isset($eventMap[$action])) {
            $this->dispatch($eventMap[$action], $itemId);
        }
    }

    abstract public function getItem();
}