<?php

namespace App\Http\Controllers\Pharmaceutical;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Pharma\StorePharmaRequest;
use App\Models\Pharmaceutical;
use Response;

class PharmaceuticalController extends Controller
{
    public function AddPharma()
    {
        return view('Admin.pages.Pharmaceuticals.AddPharma');
    }

    public function PharmaList()
    {
        $pharmalist = Pharmaceutical::all();
        return view('Admin.pages.Pharmaceuticals.PharmaceuticalList', ['pharmalist' => $pharmalist])->with('message', 'Successfullt Added Pharma!!');
    }
    public function EditPharmaList($id)
    {
        $employee = Pharmaceutical::find($id);
        return Response::json($employee);
    }
    public function UpdatePharmaList($cat_id,$qty)
    {
       dd($qty);
    }

    public function pharmastore(StorePharmaRequest $request)
    {
        $obj = new Pharmaceutical();
        $obj->name = $request->name;
        $obj->address = $request->address;
        if ($obj->save()) {
            return redirect('admin/pharma-list')->with('message', 'Successfullt Added Pharma!!');
            // return back()->with($notification);
        }
    }
}
