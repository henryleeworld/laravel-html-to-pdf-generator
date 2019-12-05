<?php

namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use PDF;
  
class PdfController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function generatePdf()
    {
        $data = ['title' => '棒協想爭主辦權，中職解密合作協議書反擊'];
        $pdf = PDF::loadView('pdf', $data);
        return $pdf->download('sample.pdf');
    }
}
