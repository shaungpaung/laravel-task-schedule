<?php
namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Remainder;
use Illuminate\Support\Facades\Artisan;

class CreateReminderCommand extends Command
{
    protected $signature = 'reminder:run';
    protected $description = 'Create reminders';

    public function handle()
    {
        // create reminders
        $reminder = new Remainder();
        $reminder->remainder_message = 'This is a reminder message'; // Customize the message
        $reminder->save();
        $this->info('Reminder created successfully.');
    }
}
