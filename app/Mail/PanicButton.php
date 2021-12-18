<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class PanicButton extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    public $o;
    public function __construct($o)
    {
        $this->o = $o;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return 
        $this->from('smirrow.services@gmail.com')
        ->view('emails.panic_button')
        // ->text('mails.demo_plain')
        ;
    }
}
