<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class roomReservationMail extends Mailable
{
    use Queueable, SerializesModels;

    public $reservationData;
    public $edit;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($reservation, $edit)
    {
        $this->reservationData = $reservation;
        $this->edit = $edit;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('.emails.roomReservationForm');
    }
}
