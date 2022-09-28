<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CampaignMail extends Mailable
{
    use Queueable, SerializesModels;

    public $campaign;
    /**
     * Create a new campaign instance.
     *
     * @return void
     */
    public function __construct($campaign)
    {
        $this->campaign = $campaign;
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

        return $this->from('samraatjahangir@gmail.com', 'Test campaign Campaign')
                    ->subject($this->campaign->title)
                    ->view('emailtemplate.email-view');
    }
}
