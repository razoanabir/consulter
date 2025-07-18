<?php

namespace App\Notifications;

use App\Models\PotentialClient;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Notification;
use Carbon\Carbon;


class FollowUpReminder extends Notification implements ShouldQueue
{
    use Queueable;

    /**
     * Create a new notification instance.
     */

    protected $potentialClient;

    public function __construct(PotentialClient $potentialClient)
    {
        $this->potentialClient = $potentialClient;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['database'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toDatabase(object $notifiable)
    {
        return [
            'message' => 'Follow up with ' . $this->potentialClient->client_name ,
            'follow_up_date' => $this->potentialClient->follow_up_date,
            'client_slug' => $this->potentialClient->slug,        ];
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

    public function withDelay(object $notifiable)
    {
        return Carbon::parse($this->potentialClient->follow_up_date);
    }
}
