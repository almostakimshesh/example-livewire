<?php

namespace App\Http\Livewire;

use Livewire\Component;

class HelloWorld extends Component
{
    public $name = '';
    public $loud = false;
    public $greetings = '';

    public function render()
    {

        return view('livewire.hello-world');
    }
}
