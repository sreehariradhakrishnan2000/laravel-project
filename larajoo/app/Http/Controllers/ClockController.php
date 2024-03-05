<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ClockRecord;
use Illuminate\Support\Facades\Auth;


class ClockController extends Controller
{
    
    public function showClockPage()
    {
        $lastClockRecord = ClockRecord::latest('clock_out')->first();
    
        // Check if a clock record was found
        if ($lastClockRecord) {
            return view('clock_page', ['lastClockRecord' => $lastClockRecord]);
        } else {
            // If no clock record found, you can handle this accordingly, for example:
            return view('clock_page', ['lastClockRecord' => null]);
        }
    }
    
    
        public function clockIn(Request $request)
        {
            // Save the clock-in data to the database
            ClockRecord::create(['clock_in' => now()]);
    
            return response()->json(['message' => 'Clock In successful']);
        }
    
        public function clockOut(Request $request)
        {
            // Find the latest clock-in record
            $lastClockRecord = ClockRecord::latest('clock_out')->first();
        
            // Check if a clock record was found
            if ($lastClockRecord) {
                // Update the clock_out field with the current time
                $lastClockRecord->update(['clock_out' => now()]);
                return response()->json(['message' => 'Clock Out successful']);
            } else {
                // Handle the case when no clock record was found
                return response()->json(['message' => 'No Clock Record Found'], 404);
            }
        }
        
}
