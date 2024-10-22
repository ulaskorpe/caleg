<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    public $MailData;
    /**
     * Create a new message instance.
     */
    public function __construct($MailData)
    {
        $this->MailData = $MailData;
    }

    /**
     * Get the message envelope.
     */
    public function build()
    {
        return $this->subject('Contact Email')
                    ->view('emails.ContactMail');
    }
}
