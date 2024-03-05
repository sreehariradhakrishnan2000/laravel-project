<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TablesController extends Controller
{
    public function projects()
    {
        return view('dashboard.tables.projects');
    }

    public function orders()
    {
        return view('dashboard.tables.orders');
    }
}
