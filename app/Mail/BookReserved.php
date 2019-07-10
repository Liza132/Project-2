<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class BookReserved extends Mailable
{
    use Queueable, SerializesModels;

    protected $message;
    protected $book;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($message, $book)
    {
        $this->message = $message;
        $this->book = $book;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail.book-reserved')->with([
            'email' => $this->message['email'],
            'name' => $this->message['name'],
            'book' => $this->book
        ]);
    }
}
