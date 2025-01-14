<?php

namespace App\Livewire\Admin\CashReceived;

use App\Livewire\BaseIndex;
use App\Models\CashReceived;
use App\Models\Category;
use App\Models\Currency;
use App\Models\ExchangeRate;
use App\Models\User;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\DB;
use Livewire\Attributes\Title;

#[Title('Cash Receiveds')]
class CashReceivedIndex extends BaseIndex
{
    public ?string $currency = null;
    public ?string $categorySearch = null;

    public function updatingCurrency()
    {
        $this->resetPage();
    }

    public function getItem()
    {
        $cash_receiveds = CashReceived::query();

        if (!empty($this->term)) {
            $cash_receiveds = $cash_receiveds->search(trim($this->term));
        }

        $cash_receiveds = $cash_receiveds->with(['currency:id,name,shortcut']);

        if (!empty($this->currency)) {
            $cash_receiveds = $cash_receiveds->where('currency_id', $this->currency);
        }

        if ($this->categorySearch) {
            $cash_receiveds = $cash_receiveds->whereHas('category', function (Builder $query) {
                $query->where('id', $this->categorySearch);
            });
        }

        return $cash_receiveds->orderBy($this->orderBy, $this->sortBy)->paginate($this->perPage);
    }

    public function render()
    {
        return view('livewire.admin.cash-received.cash-received-index',[
            'cash_receiveds' => $this->readyToLoad ? $this->getItem() : [],
            'users' => User::all()->pluck('name', 'id'),
            'categories' => Category::with('currency:id,name')->select('id', 'name', 'value', 'currency_id')->get(),
            'exchange_rates' => ExchangeRate::select('exchange_rates.*')
            ->join(DB::raw('(SELECT currency_id, MAX(created_at) as max_date FROM exchange_rates GROUP BY currency_id) as latest'), function ($join) {
                $join->on('exchange_rates.currency_id', '=', 'latest.currency_id')
                    ->on('exchange_rates.created_at', '=', 'latest.max_date');
            })
            ->with('currency:id,name,shortcut')
            ->get(),
            'currencies' => Currency::all()->pluck('name', 'id'),
        ]);
    }
}
