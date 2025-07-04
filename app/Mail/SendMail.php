<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;

    public $content, $subject, $com_logo;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($content, $subject, $com_logo)
    {
        $this->content = $content;
        $this->subject = $subject;
        $this->com_logo = $com_logo;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from(env('MAIL_FROM_ADDRESS'))
                    ->subject($this->subject)
                    ->view('send_mail')
                    ->with([
                        'content' => $this->content,
                        'com_logo' => $this->com_logo,
                    ]);
    }
}
