<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Sales;
use App\Models\Vehicle;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\ProfileUpdateRequest;

class SalesController extends Controller
{
    public function index(Request $request){


        $sessionId =  Session::get('id');

        $vehicle = Vehicle::find($sessionId);
/*         dd($request->input('fecha'));
 */
        $sales = ['id_vehicle' => $vehicle->id_vehicle,
                  'sale_date' => $request->input('fecha'),
                  'payment_method' => $request->input('method')];

        /* Sales::create($sales); */

        if(Sales::create($sales)){
            DB::statement('SET FOREIGN_KEY_CHECKS=0');
            $vehicle = Vehicle::find($sessionId);
            $vehicle->delete();
            DB::statement('SET FOREIGN_KEY_CHECKS=1');
            return redirect()->route('catalogo.index');

        }












    }
}
