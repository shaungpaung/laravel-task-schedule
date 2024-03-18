<?php

namespace App\Http\Controllers;

use App\Models\Remainder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class RemainderController extends Controller
{
    protected $queryWith = ['user'];
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validate = $request->validate([
            'user_id' => 'required|exists:users,id',
            'remainder_message' => 'required',
        ]);
        $remainder = Remainder::create($validate);
        Artisan::call('reminders:send');
        return response()->json(Remainder::with($this->queryWith)->with($remainder));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}