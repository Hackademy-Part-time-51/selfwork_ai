<?php

namespace App\Livewire;

use Livewire\Component;
use OpenAI\Laravel\Facades\OpenAI;

class Chat extends Component

{
    public $prompt = '';
    public $messages = [];
    public function ask(){
        $this->messages[] = [
            'role' => 'user',
            'content' =>$this->prompt
        ];
        $result = OpenAI::chat()->create([
            'model' => 'gpt-4o-mini',
            'messages' => $this->messages
        ]);
        $this->messages[] = [
            'role' => 'assistant',
            'content' =>$result->choices[0]->message->content
        ];

        $this->prompt ='';
    }
    public function render()
    {
        return view('livewire.chat');
    }
}
