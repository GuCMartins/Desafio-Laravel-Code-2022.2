<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NotifyMail extends Mailable
{
    use Queueable, SerializesModels;

    public $nome,$sabor,$preco,$descricao;

    public function __construct($name,$flavor,$price,$description)
    {
        $this->nome = $name;
        $this->sabor = $flavor;
        $this->preco = $price;
        $this->desctricao = $description;

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('email.newprod');
    }
}
