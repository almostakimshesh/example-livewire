<?php

namespace App\Http\Livewire;

use Livewire\Component;

class HelloWorld extends Component
{
    public $name = '';
    public $loud = false;
    public $greetings = [''];

    public function default()
    {
        $this->name = "mostakim";
    }
    // public function reset($name = "mostakim")
    // {
    //     $this->name = $name;
    // }

    public function render()
    {

        return view('livewire.hello-world');
    }
}
