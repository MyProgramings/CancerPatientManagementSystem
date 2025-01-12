<?php

namespace App\Livewire\Admin\CashReceived;

use App\Livewire\BaseIndex;
use App\Models\CashReceived;
use App\Models\Category;
use App\Models\Currency;
use App\Models\User;
use Livewire\Attributes\Title;

#[Title('Cash Receiveds')]
class CashReceivedIndex extends BaseIndex
{
    public function getItem()
    {
        return CashReceived::paginate($this->perPage);
    }

    public function render()
    {
        return view('livewire.admin.cash-received.cash-received-index',[
            'cash_receiveds' => $this->readyToLoad ? $this->getItem() : [],
            'users' => User::all()->pluck('name', 'id'),
            'categories' => Category::select('id', 'name', 'value')->get()->toArray(),
            'currencies' => Currency::all()->pluck('name', 'id'),
        ]);
    }
}
