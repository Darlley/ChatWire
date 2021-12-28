<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use App\Models\{
    User,
    Message
};
use Livewire\Component;
use App\Events\ChatStatusUpdated;

class Chatalpine extends Component
{
    public $loggedUser;
    public $receivedMessages;
    public User $chatUser;
    public string $message = '';

    public function sendMessage(){
        $sentMessage = Message::create([
            'from_user_id' => $this->loggedUser->id,
            'to_user_id' => $this->chatUser->id,
            'content' => $this->message
        ]);

        $this->reset('message');
        
        ChatStatusUpdated::dispatch($sentMessage);
    }

    public function mount(User $user){
        $this->loggedUser = User::find(Auth::id());
        
        $this->chatUser = User::find(2);
        
        $this->receivedMessages = Message::where('from_user_id', $this->chatUser->id)
            ->where('to_user_id', $this->loggedUser->id)
            ->orwhere('from_user_id', $this->loggedUser->id)
            ->where('to_user_id', $this->chatUser->id)
            ->orderBy('id', 'asc')
            ->get();

    }

    // Aula 22
    public function receivedActions(){
    }

    public function render()
    {
        // ChatStatusUpdated::dispatch('Hello World');
        // event(new \App\Events\ChatStatusUpdated('hello world'));

        return view('livewire.chatalpine');
    }


}
