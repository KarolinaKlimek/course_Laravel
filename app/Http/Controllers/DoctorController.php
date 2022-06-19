<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function powitanie(Request $request)
    {
        return view('doctors.list');
    }
}
