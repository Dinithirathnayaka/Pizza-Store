<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class OrderEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $greeting;
    public $message;

    public function __construct($greeting, $message)
    {
        $this->greeting = $greeting;
        $this->message = $message;
    }






    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Order Email',
        );
    }





    public function content(): Content
    {
        return new Content(
            view: 'emails.orderemail',
            with : ['customData' => 'This is custom data for the view',],
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
