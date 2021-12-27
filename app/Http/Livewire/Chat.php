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

    public User $logged_user;
    public $to_user = ['id'=>'', 'name'=>''];
    public $chat_user = [];
    public $list_users = [];

    public function render()
    {
        return view('livewire.chat');
    }

    public function mount(User $user){

        
        // To User
        $this->logged_user = User::with('senders.receipt')->find(Auth::id());
        // $this->list_messages_bd = $this->logged_user->senders;
        
        // From User
        // $this->chat_user = $user->load('profile')->toArray();
        
        // All Users
        $this->list_users = User::where('id','!=',Auth::id())->get();
    }

    public function mountUser($id,$chave){
        $this->reset('chat_user');
        $this->reset('data_messages');
        
        $this->to_user = [
            'id' => $id,
            'name' => User::find($id)['name']
        ];
        foreach($this->logged_user->senders as $userChat){
            if( $userChat['to_user_id'] == $this->list_users[$chave]['id'] ){
                array_push($this->chat_user, $userChat);
            }
        }
        $this->list_messages_bd = $this->chat_user;
    }
    public function disassembly(){
        $this->reset('to_user');
        $this->reset('chat_user');
        $this->reset('data_messages');
    }

    public function sendMessage(){

        $data = [
            'from_user_id' => $this->logged_user->id,
            'to_user_id' => $this->to_user['id'],
            'content' => $this->message
        ];
        if($data['content']){

            array_push($this->data_messages, $data); // array ()
            Message::create($data); // database
            $this->reset('message');

        }

    }
}
