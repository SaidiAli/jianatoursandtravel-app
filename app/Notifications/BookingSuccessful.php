<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use App\Room;
class BookingSuccessful extends Notification
{
    use Queueable;

    public $booking;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($booking)
    {
        $this->booking = $booking;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        $rms = json_decode($this->booking->rooms, true);
        $rooms = Room::find(array_keys($rms))->toArray();

        return (new MailMessage)
        ->subject('You have made a booking at '. $this->booking->hotel->name)
        ->view(
            'mail.booking_successful', [
                'booking' => $this->booking,
                'rooms' => $rooms,
                'number_of_rooms' => $rms
                ]
        );
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
            //
        ];
    }
}
