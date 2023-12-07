<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function show()
    {
        $totalPayables = 1000;
        $totalPaid = 800; 
        $totalSuppliers = 50; 
        $totalPending = 200;

        return view('dashboard', compact('totalPayables', 'totalPaid', 'totalSuppliers', 'totalPending'));
    }
}
