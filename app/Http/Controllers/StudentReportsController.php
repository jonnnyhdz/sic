<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Support\Facades\App;

class StudentReportsController extends Controller
{
    //metodo para mostrar
    public function show_cardex($id){
        //Obtener los datos del modelo
        $student=Student::find($id);
        $data=[
            'title'=>'Reporte de Estudiante',
            'details'=>$student
        ];
        //dd($student);
        $pdf = App::make('dompdf.wrapper');
        $pdf->loadView('reports.cardex',$data);
        return $pdf->stream();
    }
}
