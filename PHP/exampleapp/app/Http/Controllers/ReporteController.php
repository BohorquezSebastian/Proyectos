<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\PDF;
use Illuminate\Http\Request;
use App\Models\Empleado;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\EmpleadosExport;
use Illuminate\Support\Facades\File;



class ReporteController extends Controller

{
    public function index()
    {
        $empleados = Empleado::all();
        return view('reporte', ['empleados' => $empleados]);
    }

  
        public function print(){
           $details =['title' => 'test'];
           $pdf = Pdf::loadView('pdf_view', $details);
           return $pdf->download('invoice.pdf');
        }
    

    public function exportExcel()
    {
        return Excel::download(new EmpleadosExport, 'reporte_empleados.xlsx');
    }
}