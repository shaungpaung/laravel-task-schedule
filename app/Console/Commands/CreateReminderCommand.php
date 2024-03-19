<?php
namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Remainder;
use Illuminate\Support\Facades\Artisan;

class CreateReminderCommand extends Command
{
    protected $signature = 'message-daily';
    protected $description = 'Create reminders';

    public function handle()
    {
        // create reminders
        $reminder = new Remainder();
        $reminder->remainder_message = 'This is a reminder message';
        $reminder->save();
        $this->info('Reminder created successfully.');
    }

    // public function handle()
    // {

    //     echo ' Successfully created ';
    // }
}