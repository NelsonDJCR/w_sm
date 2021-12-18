<?php

namespace App\Notifications;
use App\ServiceRequest;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class ServiceRequestNotification extends Notification implements ShouldQueue
{
    protected $serviceRequest;

    use Queueable;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(ServiceRequest $serviceRequest)
    {
        $this->serviceRequest = $serviceRequest;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param mixed $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail', 'database'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param mixed $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        if($this->serviceRequest->state==3) {
            return (new MailMessage)
                ->greeting(__('generics.hello').' '.$this->serviceRequest->customer->user->name)
                ->line(__('generics.accept_request'). ' #'.$this->serviceRequest->consecutive)
                ->action(__('messages.see_payment_details'), route('service_request.show', $this->serviceRequest->id))
                ->line('Gracias por usar nuestra aplicación!')
                ->from(env('MAIL_USERNAME', 'notifications@speeho.com'), env('MAIL_FROM_NAME', 'Administrador Speeho'));
        }
        else if($this->serviceRequest->state==5) {
            return (new MailMessage)
                ->greeting(__('generics.hello').' '.$this->serviceRequest->customer->user->name)
                ->line(__('messages.confirm_payment_service_request'). ' #'.$this->serviceRequest->consecutive)
                ->action(__('messages.see_details'), route('service_request.show', $this->serviceRequest->id))
                ->line('Gracias por usar nuestra aplicación!')
                ->from(env('MAIL_USERNAME', 'notifications@speeho.com'), env('MAIL_FROM_NAME', 'Administrador Speeho'));
        }

    }

    /**
     * Get the array representation of the notification.
     *
     * @param mixed $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        if($this->serviceRequest->state==3) {
            return [
                'body' => __('generics.accept_request'). ' #'.$this->serviceRequest->consecutive,
                'link' => route('service_request.show', $this->serviceRequest->id),
                'icon' => 'fa fa-fw fa-check-circle text-success',
                'sender' => __('messages.see_payment_details'),
                'model_id' => $this->serviceRequest->id
            ];
        }
        else if($this->serviceRequest->state==5) {
            return [
                'body' => __('messages.confirm_payment_service_request'). ' #'.$this->serviceRequest->consecutive,
                'link' => route('service_request.show', $this->serviceRequest->id),
                'icon' => 'fa fa-fw fa-credit-card text-success',
                'sender' => __('messages.see_details'),
                'model_id' => $this->serviceRequest->id
            ];
        }
    }
}
