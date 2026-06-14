<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class QuoteMail extends Mailable
{
    use Queueable, SerializesModels;

    public array $data;

    public function __construct(array $data)
    {
        $this->data = $data;
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'New Quote Request - ' . ($this->data['name'] ?? 'Unknown'),
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.quote',
        );
    }

    public function attachments(): array
    {
        return [];
    }
}
