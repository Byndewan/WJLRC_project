<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;


class Websitemail extends Mailable
{
    use Queueable, SerializesModels;
    public $subject;
    public $body;


    /**
     * Create a new body instance.
     */
    public function __construct($subject, $body)
    {
        $this->subject = $subject;
        $this->body = $body;
    }

    public function build()
    {
        return $this->view('email')->with([
            'subject' => $this->subject
        ]);
    }

    /**
     * Get the body envelope.
     */
    // public function envelope(): Envelope
    // {
    //     return new Envelope(
    //         subject: 'Websitemail',
    //     );
    // }

    /**
     * Get the body content definition.
     */
    // public function content(): Content
    // {
    //     return new Content(
    //         view: 'email.email',
    //     );
    // }

    //  /**
    //   * Get the attachments for the body.
    //   *
    //   * @return array<int, \Illuminate\Mail\Mailables\Attachment>
    //   */
    // public function attachments(): array
    // {
    //     return [];
    // }
}
