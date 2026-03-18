<?php

namespace App\Http\Controllers;

use App\Models\User;
use Barryvdh\Snappy\Facades\SnappyPdf as PDF;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    /**
     * Display the specified resource.
     */
    public function show()
    {
        $users = User::all();
        return view('users', compact('users'));
    }

    /**
     * Generate the PDF.
     */
    public function createPDF()
    {
        $data = User::all();

        view()->share('users', $data);
        $pdf = PDF::loadView('users-pdf', $data);

        return $pdf->download('users_data.pdf');
    }
}
