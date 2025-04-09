<?php

namespace App\Livewire;

use Livewire\Component;

class Chat extends Component

{
    public $prompt = '';
    public function ask(){

    }
    public function render()
    {
        return view('livewire.chat');
    }
}
