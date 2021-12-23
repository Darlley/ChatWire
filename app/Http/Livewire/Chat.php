<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;

class Chat extends Component
{
    public $receivedMessages;
    public User $chatUser;
    public string $message;


    public function render()
    {
        return view('livewire.chat');
    }

    public function mount(){

    }
}
