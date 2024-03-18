<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Artisan;


class RemainderController extends Controller
{
    public function runScheduler()
    {
        Artisan::call('schedule:run');
        //$schedule->command(CreateReminderCommand::class)->everyTenSeconds();
        return response()->json(['message' => 'Scheduler executed successfully']);

    }
}