<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use App\Models\{
    User,
    Message
};
use Livewire\Component;
use App\Events\ChatStatusUpdated;

use Livewire\WithFileUploads;

class Chat extends Component
{
    use WithFileUploads;
    // public $list_messages_bd = [];

    public $receivedMessages;
    public string $message = ''; // input
    public $message_file;
    public $loggedUser; // Usuário logado
    public $to_user = []; // Usuário selecionado
    public $list_users = []; // Todos os usuários

    public function render()
    {
        return view('livewire.chat');
    }

    public function mount(User $user){

        $this->loggedUser = User::with('senders.receipt')->find(Auth::id())->toArray();
        $this->list_users = User::where('id','!=', $this->loggedUser['id'])->get()->toArray();
        
    }
    
    public function mountUser($id,$chave){

        $this->reset('receivedMessages');
        $this->to_user = User::find($id)->toArray();
        
        /* Antigo
        $teste = Message::all();
        foreach($teste as $userChat){
            if( ($userChat['from_user_id'] == Auth::id() || $userChat['to_user_id'] == Auth::id()) && ($userChat['from_user_id'] == $this->to_user['id'] || $userChat['to_user_id'] == $this->to_user['id']) ){
                array_push($this->list_messages_bd, $userChat);
            }
        }
        */

        // Novo
        $this->receivedMessages = Message::where('from_user_id', $this->to_user['id'])
        ->where('to_user_id', $this->loggedUser['id'])
        ->orwhere('from_user_id', $this->loggedUser['id'])
        ->where('to_user_id', $this->to_user['id'])
        ->orderBy('id', 'asc')
        ->get()
        ->toArray();
    
    }
    
    public function disassembly(){

        $this->reset('to_user');
        $this->reset('receivedMessages');

    }

    public function sendMessage(){

        if($this->message != ''){
            $data = [
                'from_user_id' => $this->loggedUser['id'],
                'to_user_id' => $this->to_user['id'],
                'content' => $this->message,
                'created_at' => now()
            ];
            $create_message = Message::create($data); // database
            ChatStatusUpdated::dispatch($create_message);
            $this->reset('message');

        }elseif ($this->message_file) {
            $data = [
                'from_user_id' => $this->loggedUser['id'],
                'to_user_id' => $this->to_user['id'],
                'image' => md5($this->message_file),
                'created_at' => now()
            ];

            $create_message = Message::create($data); // database
            ChatStatusUpdated::dispatch($create_message);

            // $this->message_file->move(public_path('img/events', $this->message_file.path));
            $this->message_file->storeAs('photos', 'public');
            // $this->message_file->storeAs('photos','public');

            $this->reset('message_file');
        }

    }
}
