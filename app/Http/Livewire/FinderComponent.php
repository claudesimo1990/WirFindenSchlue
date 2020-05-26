<?php

namespace App\Http\Livewire;

use App\Mail\pateEmail;
use App\Mail\SendMailFinder;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class FinderComponent extends Component
{
    public $perPolizei = false;
    public $addPolice = '';
    public $name = '';
    public $nummer = '';


    public function sendMessage(){
        Mail::to('claudesimo1990@gmail.com')->send(new SendMailFinder($this->nummer,$this->name,$this->addPolice));
    }


    public function render()
    {
        return view('livewire.finder-component');
    }
}
