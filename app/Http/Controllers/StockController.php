<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class StockController extends Controller
{
    public function index(Request $request){

        $request->validate([
            'car_img' => 'required|string',
            'enrolement' => 'required|string|max:255',
            'brand' => 'required|string|max:255',
            'model' => 'required|string|max:255',
            'year' => 'required|integer',
            'body_type' => 'required|string|max:255',
            'price' => 'required|integer'

        ]);


        $vehicle = new Vehicle();
        $vehicle->fill($request->all());


        if ($vehicle->save()) {

            session()->flash('success', '¡Datos del vehículo almacenados correctamente!');
        } else {

            session()->flash('error', '¡Ha ocurrido un error al guardar los datos del vehículo!');
        }

        return redirect()->back();
    }
}
