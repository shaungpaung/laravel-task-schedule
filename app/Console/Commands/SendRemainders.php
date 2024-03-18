<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Remainder;
use Carbon\Carbon;

class SendRemainders extends Command
{
    protected $signature = 'reminders:send';
    protected $description = 'Send reminders to users';

    public function handle()
    {
        // Get reminders where the created time is within the last minute
        $reminders = Remainder::where('created_time', '>=', Carbon::now()->subMinute())
            ->get();

        // Send reminders to users
        foreach ($reminders as $reminder) {
            $user = $reminder->user;
            // Send reminder message to user (you can implement your logic here)
            $this->info("Sending reminder '{$reminder->remainder_message}' to user {$user->name} (ID: {$user->id})");
        }
    }
}