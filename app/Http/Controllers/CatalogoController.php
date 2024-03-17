<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Vehicle;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\ProfileUpdateRequest;


class CatalogoController extends Controller
{
    public function index()
    {

        $vehicles = Vehicle::all();

    
        return view('catalogo', ['vehicles' => $vehicles]);


    }

}
