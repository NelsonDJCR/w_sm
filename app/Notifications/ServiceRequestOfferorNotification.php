<?php

namespace App\Notifications;

use App\ServiceRequestOfferor;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class ServiceRequestOfferorNotification extends Notification implements ShouldQueue
{
    protected $serviceRequestOfferor;

    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(ServiceRequestOfferor $serviceRequestOfferor)
    {
        $this->serviceRequestOfferor = $serviceRequestOfferor;
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
        if($this->serviceRequestOfferor->state==1) {
            return (new MailMessage)
                ->greeting(__('generics.hello').' '.$this->serviceRequestOfferor->offeror->user->name)
                ->line(__('generics.new_request').' #'.$this->serviceRequestOfferor->consecutive)
                ->action( __('messages.see_details'), route('service_request_offeror.show', $this->serviceRequestOfferor->id))
                ->line('Gracias por usar nuestra aplicación!')
                ->from(env('MAIL_FROM_ADDRESS', 'notifications@speeho.com'), env('MAIL_FROM_NAME', 'Administrador Speeho'));
        }
        else if($this->serviceRequestOfferor->state==4) {
            return (new MailMessage)
                ->greeting(__('generics.hello').' '.$this->serviceRequestOfferor->offeror->user->name)
                ->line(__('messages.confirm_payment_service_request'). ' - '. __('generics.request').' #'.$this->serviceRequestOfferor->consecutive)
                ->line(__('generics.date'). ': '.$this->serviceRequestOfferor->initial_date)
                ->line(__('generics.city'). ': '.$this->serviceRequestOfferor->ServiceRequest->City->name)
                ->line(__('generics.address'). ': '.$this->serviceRequestOfferor->ServiceRequest->address)
                ->line(__('generics.contact_name'). ': '.$this->serviceRequestOfferor->ServiceRequest->contact)
                ->line(__('generics.contact_phone'). ': '.$this->serviceRequestOfferor->ServiceRequest->phone_contact)
                ->action( __('messages.see_details'), route('service_request_offeror.show', $this->serviceRequestOfferor->id))
                ->line('Gracias por usar nuestra aplicación!')
                ->from(env('MAIL_FROM_ADDRESS', 'notifications@speeho.com'), env('MAIL_FROM_NAME', 'Administrador Speeho'));
        }
        else if($this->serviceRequestOfferor->state==5) {
            return (new MailMessage)
                ->greeting(__('generics.hello').' '.$this->serviceRequestOfferor->offeror->user->name)
                ->line(__('generics.service') . ' ' . __('generics.complete').' #'.$this->serviceRequestOfferor->serviceRequest->consecutive)
                ->action( __('messages.see_details'), route('service_request_offeror.show', $this->serviceRequestOfferor->id))
                ->line('Gracias por usar nuestra aplicación!')
                ->from(env('MAIL_FROM_ADDRESS', 'notifications@speeho.com'), env('MAIL_FROM_NAME', 'Administrador Speeho'));
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
        if($this->serviceRequestOfferor->state==1) {
            return [
                'body' => __('generics.new_request').' #'.$this->serviceRequestOfferor->consecutive,
                'link' => route('service_request_offeror.show', $this->serviceRequestOfferor->id),
                'icon' => 'fa fa-fw fa-certificate text-warning',
                'sender' => __('messages.see_details'),
                'model_id' => $this->serviceRequestOfferor->id

            ];
        }
        elseif($this->serviceRequestOfferor->state==4) {
            return [
                'body' => __('messages.confirm_payment_service_request'). ' - '. __('generics.request').' #'.$this->serviceRequestOfferor->consecutive,
                'link' => route('service_request_offeror.show', $this->serviceRequestOfferor->id),
                'icon' => 'fa fa-fw fa-credit-card text-success',
                'sender' => __('messages.see_details'),
                'model_id' => $this->serviceRequestOfferor->id
            ];
        }
        elseif($this->serviceRequestOfferor->state==5) {
            return [
                'body' => __('generics.service') . ' ' . __('generics.complete').' #'.$this->serviceRequestOfferor->serviceRequest->consecutive,
                'link' => route('service_request_offeror.show', $this->serviceRequestOfferor->id),
                'icon' => 'fa fa-fw fa-check-square text-success',
                'sender' => __('messages.see_details'),
                'model_id' => $this->serviceRequestOfferor->id
            ];
        }
    }
}
