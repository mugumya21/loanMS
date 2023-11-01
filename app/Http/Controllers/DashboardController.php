<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // Your logic goes here, fetch data if needed
        $data = []; // Example data

        return view('dashboard', compact('data'));
    }
}

?>





