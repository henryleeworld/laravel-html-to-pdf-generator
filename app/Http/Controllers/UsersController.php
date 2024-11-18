<?php

namespace App\Http\Controllers;

use App\Models\User;
use Barryvdh\Snappy\Facades\SnappyPdf as PDF;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function show() {
        $users = User::all();
        return view('users', compact('users'));
    }

    // Generate PDF
    public function createPDF() {
        // retreive all records from db
        $data = User::all();

        // share data to view
        view()->share('users', $data);
        $pdf = PDF::loadView('users-pdf', $data);

        // download PDF file with download method
        return $pdf->download('users_data.pdf');
    }
}
