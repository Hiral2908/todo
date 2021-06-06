<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class sendSignUpEmail extends Mailable
{
    use Queueable, SerializesModels;
    protected $first_name;
    protected $last_name;
    
    public function __construct($first_name,$last_name)
    {
      $this->first_name=$first_name;
      $this->last_name=$last_name;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.signUpEmail')
        ->subject('Your registration details are below')
        ->from('mailexample@gmail.com')->with('first_name',$this->first_name)->with('last_name',$this->last_name);
                             
    }
}
