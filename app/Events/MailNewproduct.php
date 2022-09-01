<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class MailNewproduct
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $nome,$sabor,$preco,$descricao;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($name,$flavor,$price,$description)
    {
        $this->nome = $name;
        $this->sabor = $flavor;
        $this->preco = $price;
        $this->desctricao = $description;

    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('channel-name');
    }
}
