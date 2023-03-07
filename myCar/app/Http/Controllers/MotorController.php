<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kendaraan;
use App\Models\Motor;
use Session;

class MotorController extends Controller
{
    public function index()
    {
        $motor = Motor::all();
        $singleMotor = Motor::with('kendaraan')->get();
        if ($singleMotor!=null)
        {
            // var_dump($singleMotor);
            // $motorbike = $singleMotor->kendaraan;
            // var_dump($motorbike);
            // echo($motorbike->warna);            
        }

        // $motorbike = $motor->kendaraan;
        // $motor = Motor::with('kendaraan')->get();
        return view('Motor.Motor')->with('motorbikes', $motor);
    }
}
