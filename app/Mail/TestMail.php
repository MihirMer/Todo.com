<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class TestMail extends Mailable
{
    use Queueable, SerializesModels;

    public $details;
    public $deadlineAlerts;
    public $user;

    /**
     * TestMail constructor.
     * @param $details
     * @param $deadlineAlerts
     * @param $user
     */
    public function __construct($details, $deadlineAlerts, $user)
    {
        $this->details = $details;
        $this->deadlineAlerts = $deadlineAlerts;
        $this->user = $user;
    }


    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

        return $this->subject($this->details['title'])->view('testMail', ['details' => $this->details, 'deadlineAlerts', $this->deadlineAlerts, 'user', $this->user]);
    }
}
