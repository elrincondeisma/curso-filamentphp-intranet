<?php

use App\Http\Controllers\PdfController;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return redirect('/personal');
});

Route::get('/pdf/generate/timesheet/{user}', [PdfController::class,'TimesheetRecords'])->name('pdf.example');

