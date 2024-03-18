<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use App\Models\Remainder;
use App\Console\Commands\CreateReminderCommand;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     */
    protected function schedule(Schedule $schedule): void
    {
        // $schedule->command('inspire')->hourly();
        $schedule->call(function () {
            $reminder = new Remainder();
            $reminder->remainder_message = 'This is From API'; // Customize the message
            $reminder->save();
        })->everyTwoSeconds();
        //$schedule->command(CreateReminderCommand::class)->everyTenSeconds();
    }

    protected $commands = [
        \App\Console\Commands\CreateReminderCommand::class,
        // other commands...
    ];
    /**
     * Register the commands for the application.
     */
    protected function commands(): void
    {
        $this->load(__DIR__ . '/Commands');

        require base_path('routes/console.php');
    }
}