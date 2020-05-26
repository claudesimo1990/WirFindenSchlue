<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendMailFinder extends Mailable
{
    public $nummer;
    public $name;
    public $addPolice;

    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($nummer,$name,$addPolice)
    {
        $this->nummer = $nummer;
        $this->name = $name;
        $this->addPolice = $addPolice;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.finder');
    }
}
