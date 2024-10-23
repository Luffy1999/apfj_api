<?php

namespace App\Http\Controllers;

use App\Models\Departamento;
use Illuminate\Http\Request;

class DepartamentoController extends Controller
{
    //
    public function obtenerDepartamentos(){
        $Depto = new Departamento();
        $valores = $Depto::all();
        $repuesta = [
            "success" => true,
            "msg"=>"Valores devueltos por el Endpoint obtenerDepastamentos",
            "data"=>$valores,
            "error"=>"",
            "total"=>sizeof($valores)
        ];
        return response()->json($repuesta,200);
    }



    public function obtenerDepartamento($iddepto){
        $Depto = new Departamento();
        $valores = $Depto->where("id_departamento",$iddepto)->get();
        $repuesta = [
            "success" => true,
            "msg"=>"Valores devueltos por el Endpoint obtenerDepastamento",
            "data"=>$valores,
            "error"=>"",
            "total"=>sizeof($valores)
        ];
        return response()->json($repuesta,200);
    }


    public function obtenerDepartamentosPorZona($idzona){
        $Depto = new Departamento();
        $valores = $Depto->where("id_zona",$idzona)->get();
        $repuesta = [
            "success" => true,
            "msg"=>"Valores devueltos por el Endpoint obtenerDepastamentosPorZona",
            "data"=>$valores,
            "error"=>"",
            "total"=>sizeof($valores)
        ];
        return response()->json($repuesta,200);
    }


    public function nuevoDepto(Request $req){
        $Depto = new Departamento();
        $Depto->id_zona = $req->idzona;
        $Depto->nombre_departamento = $req->nombredepto;
        $Depto->save();
        $valores = $Depto->where("id_departamento",$Depto->id_departamento)->get();
        $repuesta = [
            "success" => true,
            "msg"=>"Valores devueltos por el Endpoint nuevoDepto",
            "data"=>$valores,
            "error"=>"",
            "total"=>sizeof($valores)
        ];
        return response()->json($repuesta,200);
    }

}
