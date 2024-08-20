<?php 
class Emailer{
    public $sender;
    public $recipient;
    public $subject;
    public $body;

    function __construct($sender, $recipient, $subject, $body){
        $this->sender = $sender;
        $this->recipient = $recipient;
        $this->subject = $subject;
        $this->body = $body;
    }

    function sendEmail(){
        echo "Email sent to $this->recipient from $this->sender \n";
    }
}

$email1 = new Emailer('john@doe.com','admin@example.com',"Test Email","hello how are you");
$email1->sendEmail();