<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use App\Models\{
    User,
    Message
};
use Livewire\Component;
use App\Events\ChatStatusUpdated;

class Chat extends Component
{
    public $receivedMessages;
    public string $message = '';
    public User $usuario;
    
    public function render()
    {
        return view('livewire.chat');
    }

    public function mount(User $user){
        $this->usuario = User::find(Auth::id());
    }

    public function sendMessage(){
        $sent_message = Message::create([
            'from_user_id' => $this->usuario->id,
            'to_user_id' => 2,
            'content' => $this->message
        ]);
        // ChatStatusUpdated::dispatch($sent_message);
        $this->reset('message');

        
    }
}
