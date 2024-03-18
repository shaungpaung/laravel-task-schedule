<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class ScheduleController extends Controller
{
    //
    public function runSchedule()
    {
        Artisan::call('schedule:run');
        return response()->json(['message' => 'Scheduled successfully created.']);
    }
}