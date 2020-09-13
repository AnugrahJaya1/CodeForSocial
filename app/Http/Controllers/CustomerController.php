<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use PDF;

class CustomerController extends Controller
{
    public function printPDF()
    {
       // This  $data array will be passed to our PDF blade
       $data = [
          'title' => 'First PDF for Medium',
          'heading' => 'Hello from 99Points.info',
          'content' => 'Conten'
        ];
        
        $pdf = PDF::loadView('index', $data);  
        return $pdf->download('medium.pdf');
    }
}