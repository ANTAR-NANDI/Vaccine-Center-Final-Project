<?php

namespace App\Http\Controllers\Pharmaceutical;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PharmaceuticalController extends Controller
{
    public function AddPharma()
    {
        return view('Admin.pages.Pharmaceuticals.AddPharma');
    }

    public function PharmaList()
    {
       // $id = Auth::id();
        //dd($id);
        return view('Admin.pages.Pharmaceuticals.PharmaceuticalList');
    }
}
