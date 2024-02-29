<?php

namespace App\Mail;

use App\Models\Contact;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Address;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;
    // public array $content;

    /**
     * Create a new message instance.
     */
    public function __construct(public Contact $content)
    {
        // $this->content = $content;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
                // $this ->content['full_name'],
                // $this ->content['email'],
                // $this ->content['content'],
            // from: new Address($this->content['email'],
            //                   $this->content['full_name']),
            subject: $this->content->full_Name,
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'email.contactUs2',
            with:[
                [$this->content->content,]
            ]
        );
    }

    public function submit()
    {
        return $this->view('layouts.home')
                    ->with([
                        'full_Name' => $this->content->full_Name,
                        'email' => $this->content->email,
                        'content' => $this->content->content,
                    ]);
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
