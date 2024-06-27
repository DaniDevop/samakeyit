<?php

namespace App\Mail;

use App\Models\Demandeur;
use App\Models\DocumentAdmin;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Attachment;

class UsersFileEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $document;
    public $demandeur;

    /**
     * Create a new message instance.
     */
    public function __construct(DocumentAdmin $document, Demandeur $demandeur)
    {
        $this->document = $document;
        $this->demandeur = $demandeur;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Users File Email',
            from: new Address('mapangounzigoudaniellevy@gmail.com', 'SamaKeyit'),
            to: [
                new Address($this->demandeur->email, $this->demandeur->name),
            ],
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'view.mail.mail',
            with: [
                'demandeur' => $this->demandeur,
                'document' => $this->document,
            ],
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [
            Attachment::fromStorage($this->document->document),
        ];
    }
}
