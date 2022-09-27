<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CustomMail extends Mailable
{
    use Queueable, SerializesModels;
    public $message;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($message)
    {
        $this->message = $message;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        // return $this->subject('Happy Birthday '. $this->message->title)
        //             ->view('emailtemplate.email-view');

        return $this->from('samraatjahangir@gmail.com', 'Test Message Campaign')
                    ->subject($this->message->title)
                    ->view('emailtemplate.email-view');
    }
}
