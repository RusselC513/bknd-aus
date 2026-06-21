<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class QuoteConfirmationMail extends Mailable
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
            subject: 'Thank you for contacting Glow & Harmony Cleaning',
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.quote-confirmation',
        );
    }

    public function attachments(): array
    {
        return [];
    }
}
