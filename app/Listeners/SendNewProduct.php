<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Events\MailNewproduct;
use Illuminate\Support\Facades\Mail;

use App\Models\User;
use App\Mail\NotifyMail;

class SendNewProduct implements ShouldQueue
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle(MailNewproduct $event)
    {
        $users = User::all();
        foreach($users as $i => $user) {
            if($user->permission == true){
                $multiply = $i + 1;
                $email = new NotifyEmail
                ($event->nome,
                $event->sabor,
                $event->preco,
                $event->descricao);
                $when = now()->addseconds($multiply*10);
                $email->subject='Novo produto criado';
                Mail::to($user->later($when,$email));
            }
        }    
    }
}
