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
    public string $message = ''; // input
    public $list_messages_bd = []; // database
    public $data_messages = []; // array
    public User $usuario;

    public function render()
    {
        return view('livewire.chat');
    }

    public function mount(User $user){
        $this->usuario = User::with('senders.receipt')->find(Auth::id());

        $this->list_messages_bd = $this->usuario->senders;
    }

    public function sendMessage(){
        $data = [
            'from_user_id' => $this->usuario->id,
            'to_user_id' => 2,
            'content' => $this->message
        ];

        array_push($this->data_messages, $data);

        Message::create($data)->refresh();
        // array_push($this->list_messages_array, $data_message);
        $this->reset('message');
    }
}
