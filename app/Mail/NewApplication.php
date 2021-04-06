<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NewApplication extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    private $prospect;

    public function __construct($prospect)
    {
        $this->prospect = $prospect;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('admissions@havilla.edu')
            ->markdown('emails.new_application', [
                'prospect' => $this->prospect,
            ]);
    }
}
