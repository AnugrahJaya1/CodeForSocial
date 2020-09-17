<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/pdf', function(){
    return view('pdf');
});

require ("pdfcrowd.php");

// the recommended method is POST
Route::post('/', function () {
    try {
        // create the API client instance
        $client = new \Pdfcrowd\HtmlToPdfClient("demo", "ce544b6ea52a5621fb9d55f8b542d14d");

        // run the conversion and store the result into the "pdf" variable
        $pdf = $client->convertUrl("http://codeforsocial.000webhostapp.com/pdf");

        // send the result and set HTTP response headers
        return response($pdf)
            ->header('Content-Type', 'application/pdf')
            ->header('Cache-Control', 'no-cache')
            ->header('Accept-Ranges', 'none')
            ->header('Content-Disposition', 'attachment; filename="result.pdf"');
    } catch (\Pdfcrowd\Error $why) {
        // send the error in the HTTP response
        return response($why->getMessage(), $why->getCode())
            ->header('Content-Type', 'text/plain');
    }
});