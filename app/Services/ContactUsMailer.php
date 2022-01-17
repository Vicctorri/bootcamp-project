<?php

namespace App\Services;

use Illuminate\Mail\Mailer;
use Illuminate\Mail\Message;
use Psr\Log\LoggerInterface;
class ContactUsMailer
{
    private Mailer $infrastructurerMailer;
    private LoggerInterface $logger;

    public function __construct(Mailer $infrastructurerMailer, LoggerInterface $logger)
    {
        $this -> infrastructurerMailer = $infrastructurerMailer;
        $this -> logger =$logger;
    }

    public function send(array $data): void
    {
        $this->infrastructurerMailer->send(
            'emails.contact',
            [
                'firstname' => $data['firstname'],
                'lastname' => $data['lastname'],
                'email' => $data['email'],
                'phonenumber' => $data['phonenumber'],
                'subject' => $data['subject'],
                'messageText' => $data['message'],
            ],

        function(Message $message) use ($data){ 
            $message->subject('mesage from ' . $data['email']);
            $message->to('library@gmail.com');
            $message->from('no-reply@library.app', 'ViLibrary');


        }

    );
    $this->logger->info('conttt info ');
    }


}