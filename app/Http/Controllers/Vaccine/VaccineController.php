<?php

namespace App\Http\Controllers\Vaccine;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VaccineController extends Controller
{
    public function AddVaccine()
    {
        return view('Admin.pages.Vaccine.AddVaccine');
    }
    public function VaccineList()
    {
        return view('Admin.pages.Vaccine.VaccineList');
    }
}
