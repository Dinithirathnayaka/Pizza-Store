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

    public $order;
    public $subject;

    public function __construct($order, $subject)
    {
        $this->order = $order;
        $this->subject = $subject;
    }






    public function envelope(): Envelope
    {
        return new Envelope(
            subject: $this->subject,
        );
    }





    public function content(): Content
    {
        return new Content(
            view: 'emails.orderemail',
            with : [
                'discount' => round($this->order->discount,2),
                'subtotal' => round(($this->order->total-$this->order->discount),2),
                'total' =>round( $this->order->total,2),
                'id' => $this->order->id,

            ],
        );
    }

    /**
     * Get the attachments for the subject.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
