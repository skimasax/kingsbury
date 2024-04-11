<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class KingsburyAgentRegistrationNotification extends Notification
{
    use Queueable;

    public $name;
    public $email;
    public $address;
    public $phone;
    public $sex;
    public $state;


    /**
     * Create a new notification instance.
     */
    public function __construct($name,$email, $address,$phone, $sex,$state)
    {
        $this->name = $name;
        $this->email =$email;
        $this->address =$address;
        $this->phone = $phone;
        $this->sex = $sex;
        $this->state = $state;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)->view('email.agent', ['name' => $this->name,'email' => $this->email, 'address' => $this->address, 'phone' => $this->phone, 'sex' => $this->sex, 'state' => $this->state]);

    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }
}
