<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DoctorController extends Controller
{
    protected $request1;
    public function __construct(Request $request1)
    {
        $this->request1 = $request1;
    }
    public function powitanie()
    {
        var_dump($this->request1->all());
    }
}
