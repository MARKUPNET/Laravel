<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class BookingSendmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($inputs)
    {
        $this->guest     = $inputs['guest'];
        $this->date      = $inputs['date'];
        $this->time_id   = $inputs['time_id'];
        $this->plan_id   = $inputs['plan_id'];
        $this->person    = $inputs['person'];
        $this->note      = $inputs['note'];
        $this->phone     = $inputs['phone'];
        $this->email     = $inputs['email'];

        $this->time_name      = $inputs['time_name'];
        $this->plan_name      = $inputs['plan_name'];
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->to($this->email)
            ->from('webmaster@markupnet.jp')
            ->with([
                'guest'     => $this->guest,
                'date'      => $this->date,
                'time_name' => $this->time_name,
                'plan_name' => $this->plan_name,
                'person'    => $this->person,
                'note'      => $this->note,
                'phone'     => $this->phone,
                'email'     => $this->email,
            ]);
    }

    /**
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    public function envelope()
    {
        return new Envelope(
            subject: '自動送信メール',
        );
    }

    /**
     * Get the message content definition.
     *
     * @return \Illuminate\Mail\Mailables\Content
     */
    public function content()
    {
        return new Content(
            view: 'mail',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array
     */
    public function attachments()
    {
        return [];
    }
}
