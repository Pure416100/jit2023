<?php

namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\rounds_completed;

class PDFController extends Controller
{
    public function pdf(Request $request,$id)
    {
        $data = rounds_completed::find($id);
        view()->share ('data', $data);
        
       
        $pdf = PDF::loadView('myPDF', compact('data'));
        return $pdf->stream('รายงานการทำแบบบันทึก-jitdee.pdf');
      
    }      
   
}
