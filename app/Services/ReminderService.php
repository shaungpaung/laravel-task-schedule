<?php

namespace App\Services;

use App\Models\Remainder;

class ReminderService
{
    public function createReminder(string $message)
    {
        Remainder::create(['remainder_message' => $message]);
    }
}