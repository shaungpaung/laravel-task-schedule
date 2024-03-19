<?php

namespace App\Http\Controllers;

use App\Jobs\ReminderJob;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;


class RemainderController extends Controller
{
    public function runScheduler()
    {

        //Artisan::call('message-daily');
        //ReminderJob::dispatch();

        //Artisan::call('schedule:run');
        //dispatch(new ReminderJob());

        //$schedule->command(CreateReminderCommand::class)->everyTenSeconds();
        //return response()->json(['message' => 'Scheduler executed successfully']);

        Artisan::call('schedule:run');
        $output = Artisan::output();
        return response()->json(['message' => 'Scheduler executed successfully', 'output' => $output]);
    }

}