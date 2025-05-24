<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\PotentialClient;
use App\Notifications\FollowUpReminder;
use Carbon\Carbon;
use Illuminate\Support\Facades\Notification;

class SendFollowUpNotifications extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'send:follow-up-notifications';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send follow-up notifications to users for potential clients whose follow-up date has arrived';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        // Fetch all clients with a non-null follow_up_date
        $clients = PotentialClient::whereNotNull('follow_up_date')->get();

        foreach ($clients as $client) {
            // Parse the follow_up_date as a Carbon instance
            $followUpDate = Carbon::parse($client->follow_up_date);

            // Check if the follow_up_date matches the current time (up to the minute)
            if ($followUpDate->isCurrentMinute()) {
                // Send the notification to the associated user
                // Assuming you have a user associated with the client
                if ($client->user) {
                    $client->user->notify(new FollowUpReminder($client));
                }

                // Optional: Clear the follow_up_date to prevent duplicate notifications
                $client->update(['follow_up_date' => null]);
            }
        }

        $this->info('Follow-up notifications checked and sent if scheduled.');
    }
    
}
