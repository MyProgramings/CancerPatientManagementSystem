<?php

namespace App\Livewire\Admin\Admin;

use App\Traits\ToastAlert;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Admin')]
class AdminIndex extends Component
{
    use ToastAlert;

    public function addToast(){
        $this->toast('success message');
    }

    public function addToastInfo(){
        $this->toastInfo('info message','center');
    }

    public function addToastWarning(){
        $this->toastWarning('Warning message ','bottom-left', 300);
    }

    public function addToastError(){
        $this->toastError('Error message ','top-right', 2000);
    }
    
    public function render()
    {
        return view('livewire.admin.admin.admin-index');
    }
}
