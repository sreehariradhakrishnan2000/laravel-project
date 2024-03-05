<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BillingController extends Controller
{
    public function showBillingPage()
    {
        return view('billing_page');
    }
}
