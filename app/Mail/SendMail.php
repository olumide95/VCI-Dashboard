<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;
    public $messaged;
    
    public function __construct($messaged)
    {
       $this->messaged = $messaged;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this

        ->to(config('mail.from.address'))
        ->subject('Test Message')
        ->from('hr@ariosh.com')
        ->view('emails.emailmessage');
        
    }
    
}
