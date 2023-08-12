<?php

namespace App\Http\Controllers;

use App\Models\UserDomicilio;
use Carbon\Carbon;
use Illuminate\Http\Request;

class UserDomicilioController extends Controller
{
    public function index() {
        $users = UserDomicilio::all();
        foreach ($users as $user) {
            $fechaNacimiento = Carbon::parse($user->fecha_nacimiento);
            $edad = $fechaNacimiento->diffInYears(Carbon::now());
    
            $user->edad = $edad;
        }

        return response()->json($users);
    }
}
