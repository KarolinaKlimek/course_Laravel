<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function powitanie(Request $request)
    {
        $doctorList = [
            ["id"=>1, "lastname"=>"Neumann", "firstname"=>"Aria", "email"=>"arian@n.com","phone"=>"734998726","address"=>"Adres 1", "status" => "Dostepny"],
            ["id"=>2, "lastname"=>"Dolittle", "firstname"=>"Maria", "email"=>"mm@n.com","phone"=>"876339220","address"=>"Adres 2", "status" => "Dostepny"],
            ["id"=>3, "lastname"=>"House", "firstname"=>"Gregory", "email"=>"gre@n.com","phone"=>"990887654","address"=>"Adres 3", "status" => "Niedostepny"],
        ];

        return view('doctors.list',['doctorList'=>$doctorList]);
    }
}
