<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendNewMail extends Mailable
{
    use Queueable, SerializesModels;

    public $message;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($_message)
    {
        // dd($_message);
        $this->message = $_message;
        // dd($this->message);
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $new_message = $this->message;
        return $this
        ->replyTo($this->message['email_doctor'])
        ->view('emails.emailsent', compact('new_message'));
    }
}
