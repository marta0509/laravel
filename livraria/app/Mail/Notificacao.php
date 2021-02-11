<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Notificacao extends Mailable
{
    use Queueable, SerializesModels;

    public $livros;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($books)
    {
        $this->livros=$books;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('a14177@aedah.pt')->subject('Novo registo')->view('emails.notificacao');
    }
}
