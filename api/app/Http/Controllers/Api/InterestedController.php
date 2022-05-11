<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Interested;

class InterestedController extends Controller
{

    public function index()
    {
        $interesteds=Interested::all();
        return $interesteds;
    
    }


    public function store(Request $request)
    {
        $interested = new Interested;
        $interested->identificacion = $request->identificacion;
        $interested->nombres_apellidos = $request->nombres_apellidos;
        $interested->fecha_nac = $request->fecha_nac;
        $interested->num_cel = $request->num_cel;
        $interested->num_conv = $request->num_conv;
        $interested->est_civil = $request->est_civil;
        $interested->correo_p = $request->correo_p;
        $interested->sexo = $request->sexo;
        $interested->ubicacion = $request->ubicacion;

        $interested->save();

    }


    public function show($id)
    {
       $interested = Interested::find($id);
       return $interested;
        
    }


    public function update(Request $request, $id)
    {
        $interested = Interested::find($id);
        $interested->identificacion = $request->identificacion;
        $interested->nombres_apellidos = $request->nombres_apellidos;
        $interested->fecha_nac = $request->fecha_nac;
        $interested->num_cel = $request->num_cel;
        $interested->num_conv = $request->num_conv;
        $interested->est_civil = $request->est_civil;
        $interested->correo_p = $request->correo_p;
        $interested->sexo = $request->sexo;
        $interested->ubicacion = $request->ubicacion;

        $interested->save();
        return $interested;
        
    }


    public function destroy($id)
    {
       $interested = Interested::destroy($id);
       return $interested;
    }
}
