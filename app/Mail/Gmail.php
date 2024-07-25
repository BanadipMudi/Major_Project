<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Gmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $mail = ""; 
    public $mail2 = "";
    public $reason = "";
    public $answ = "";
    public $username = "";
    public function __construct($mail,$mail2,$answ, $reason, $username)
    {
        //
        $this->mail = $mail;
        $this->mail2 = $mail2;
        $this->answ = $answ;
        $this->reason = $reason;
        $this->username = $username;

       
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Report')
        ->view('admin.mail');
    }
}
