<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Vehicle;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\ProfileUpdateRequest;

class TerminalController extends Controller
{
    function index(Request $request){

        $id_vehicle = $request->route('id');

        Session::put('id', $id_vehicle);



       /*
       $vehicle = Vehicle::find($id_vehicle);
       return view('terminal',['vehicle' => $vehicle]); */

       return view('terminal');
    }


}
