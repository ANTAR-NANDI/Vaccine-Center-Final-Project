<?php

namespace App\Http\Controllers\Appointment;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function AddPatient()
    {
        return view('Admin.pages.Appointments.AddPatient');
    }

    public function PatientList()
    {
        return view('Admin.pages.Appointments.PatientList');
    }

    public function TotalSales()
    {
        return view('Admin.pages.Reports.TotalSale');
    }

    public function invoice()
    {
        return view('Admin.pages.Reports.Invoice');
    }


    public function invoice_details()
    {
        return view('Admin.pages.Reports.Invoice-Details');
    }

    public function setting()
    {
        return view('Admin.pages.Setting');
    }
}
