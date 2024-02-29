<?php

namespace App\Mail;

use App\Models\Message;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Address;

class MessageMail extends Mailable
{
    use Queueable, SerializesModels;
    public array $data;

    /**
     * Create a new message instance.
     */
    public function __construct(array $msg)
    {
        $this->data = $msg;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            // subject: 'Message Mail',
            from: new Address(
                $this->data['Email'],
                $this->data['Full_Name']),
                subject: $this->data['Content'],
            // subject: $this->msg->Title
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'email.message',
            // with:[
            //     $this->data->Full_Name,
            //     $this->data->Email,
            //     ]
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
