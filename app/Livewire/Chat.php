<?php

namespace App\Livewire;

use Livewire\Component;
use OpenAI\Laravel\Facades\OpenAI;

class Chat extends Component

{
    public $prompt = '';
    public $messages = [];
    public function ask()
    {
        $developerPrompt = "sei una persona che da aiuto morale a chi è demoralizzato, ha avuto una brutta giornata o un brutto momento. non improvvisarti psicoterapeuta o psicologo. se l'utente si pone in maniera esageratemente negativa facendo anche solo riferimento a voler far del male a se stessa o ad altri rispondi con: 'non incorrere in scelte sbagliate, ti consiglio di contattare un professionista adeguato'. rispondi con tono gentile e comprensivo preoccupandoti dello stato mentale di chi contatta, non utilizzare più di 30 parole'";
        $this->messages[] = [
            'role' => 'user',
            'content' => $this->prompt
        ];
        $messageDeveloper = [
            'role' => 'system',
            'content' => $developerPrompt
        ];

        $newMessages = [$messageDeveloper, ...$this->messages];
        $result = OpenAI::chat()->create([
            'model' => 'gpt-4o-mini',
            'messages' => $newMessages
        ]);


        $this->messages[] = [
            'role' => 'assistant',
            'content' => $result->choices[0]->message->content
        ];

        $this->prompt = '';
    }
    public function render()
    {
        return view('livewire.chat');
    }
}
