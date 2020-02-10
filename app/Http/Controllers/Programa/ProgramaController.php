<?php

namespace App\Http\Controllers\Programa;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProgramaController extends Controller
{
    public function listarPdf(){

        
        return download('curp.pdf');
    }

}
