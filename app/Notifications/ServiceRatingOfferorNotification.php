<?php

namespace App\Notifications;

use App\serviceRequestOfferor;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class ServiceRatingOfferorNotification extends Notification implements ShouldQueue
{
    protected $serviceRequestOfferor;

    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(serviceRequestOfferor $serviceRequestOfferor)
    {
        $this->serviceRequestOfferor = $serviceRequestOfferor;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['database'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->line('The introduction to the notification.')
                    ->action('Notification Action', url('/'))
                    ->line('Thank you for using our application!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            'body' => __('generics.offeror_rating'),
            'link' => route('service_request_offeror.show', $this->serviceRequestOfferor->serviceRequest->id),
            'icon' => 'fa fa-fw fa-star text-warning',
            'sender' => $this->serviceRequestOfferor->serviceRequest->customer->user->name
        ];
    }
}
