<?php

namespace App\Livewire\Admin\CashReceived;

use App\Models\CashReceived;
use App\Models\Category;
use Illuminate\Validation\Rule;
use App\Traits\ToastAlert;
use Livewire\Component;

class CashReceivedCreate extends Component
{
    use ToastAlert;

    public $users;
    public $categories;
    public $currencies;

    public $category_id;
    public $currency_id;
    public $amount;
    public $total;
    public $description;

    protected $listeners = ['showCreateModel'];

    public bool $showCreateModel = false;

    protected function rules()
    {
        return [
            'category_id' => 'required',
            'currency_id' => 'required',
            'amount' => 'required',
            'total' => 'required',
            'description' => 'nullable',
        ];
    }

    public function mount($users, $currencies){
        $this->users = $users;
        $this->currencies = $currencies;
    }

    public function updatedCurrencyId($currencies)
    {
        $this->categories = Category::where('currency_id', $currencies)->get();
        $this->category_id = null;
        $this->amount = null;
        $this->total = null;
    }

    public function updatedAmount()
    {
        $this->calculateTotal();
    }

    public function updatedCategoryId()
    {
        $this->calculateTotal();
    }

    public function calculateTotal()
    {
        if ($this->category_id && $this->amount) {
            $category = collect($this->categories)->firstWhere('id', $this->category_id);
            $this->total = $category ? $category['value'] * $this->amount : 0;
        } else {
            $this->total = null;
        }
    }

    public function showCreateModel(){
        $this->showCreateModel = true;
    }

    public function closeCreateModel(){
        $this->showCreateModel = false;
        $this->resetExcept('categories', 'currencies');
        $this->resetValidation();
        $this->resetErrorBag();
    }

    public function create()
    {
        $data = $this->validate();

        $data['user_id'] = 1;

        CashReceived::create($data);
        $this->closeCreateModel();
        $this->toast(__('cashReceived.create cash Received'));
        $this->dispatch('refreshParent');
    }

    public function render()
    {
        return view('livewire.admin.cash-received.cash-received-create');
    }
}
