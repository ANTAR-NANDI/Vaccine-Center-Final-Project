@extends('Admin.layouts.defaults')
@section('abc')
<div class="page-wrapper">
    <div class="breadcrumb-bar">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-6 col-6">
                    <nav aria-label="breadcrumb" class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ URL::to('/admin/home')}}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Patient View</li>
                        </ol>
                    </nav>
                    <h2 class="breadcrumb-title">Patient View</h2>
                </div>
                <div class="col-md-4 col-4">

                </div>
                <div class="col-md-2 col-2">
                    <a style="margin-top: 5px;" href=" #" class="add-new-btn" data-toggle="modal" data-target="#ModalPat2">Add Patient</a>
                </div>
            </div>
        </div>
    </div>
    <!-- /Breadcrumb -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 col-lg-12 col-xl-12 dct-appoinment">
                    <div class="card">
                        <div class="card-body pt-0">
                            <div class="user-tabs">
                                <ul class="nav nav-tabs nav-tabs-bottom nav-justified flex-wrap">
                                    <li class="nav-item">
                                        <a class="nav-link active" href="#pat_appointments" data-toggle="tab">All Patients</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#pres" data-toggle="tab"><span>Vaccinated Patients</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#medical" data-toggle="tab"><span class="med-records">Will be Vaccinated within 1 month</span></a>
                                    </li>

                                </ul>
                            </div>
                            <div class="tab-content">

                                <!-- Appointment Tab -->
                                <div id="pat_appointments" class="tab-pane fade show active">
                                    <div class="card card-table mb-0">
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table class="table table-hover table-center mb-0">
                                                    <thead>
                                                        <tr>
                                                            <th>Serial No.</th>
                                                            <th>Patient Name</th>
                                                            <th>Vaccine Name</th>
                                                            <th>Amount</th>
                                                            <th>Status</th>

                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>Antar Nandi</td>
                                                            <td> Prevener 13</td>
                                                            <td>$160</td>
                                                            <td><span class="badge badge-pill bg-success-light">Confirm</span></td>

                                                        </tr>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>Antar Nandi</td>
                                                            <td> Prevener 13</td>
                                                            <td>$160</td>
                                                            <td><span class="badge badge-pill bg-danger-light">Cancelled</span></td>

                                                        </tr>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>Antar Nandi</td>
                                                            <td> Prevener 13</td>
                                                            <td>$160</td>
                                                            <td><span class="badge badge-pill bg-success-light">Confirm</span></td>

                                                        </tr>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>Antar Nandi</td>
                                                            <td> Prevener 13</td>
                                                            <td>$160</td>
                                                            <td><span class="badge badge-pill bg-success-light">Confirm</span></td>

                                                        </tr>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>Antar Nandi</td>
                                                            <td> Prevener 13</td>
                                                            <td>$160</td>
                                                            <td><span class="badge badge-pill bg-info-light">Completed</span></td>
                                                        </tr>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>Antar Nandi</td>
                                                            <td> Prevener 13</td>
                                                            <td>$160</td>
                                                            <td><span class="badge badge-pill bg-success-light">Confirm</span></td>

                                                        </tr>


                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Appointment Tab -->

                                <!-- Prescription Tab -->
                                <div class="tab-pane fade" id="pres">

                                    <div class="card card-table mb-0">
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table class="table table-hover table-center mb-0">
                                                    <thead>
                                                        <tr>
                                                            <th>Sl No. </th>
                                                            <th>Patient Name</th>
                                                            <th>Created by </th>
                                                            <th>Date </th>
                                                            <th>Vaccine Name</th>
                                                            <th colspan="2" style="text-align:center">Action </th>

                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>Antar Nandi</td>
                                                            <td>Arafat Ali</td>
                                                            <td>2022-01-28</td>
                                                            <td>Covax</td>
                                                            <td class="text-right">
                                                                <div class="table-action">
                                                                    <a href="javascript:void(0);" class="btn btn-sm bg-primary-light">
                                                                        <i class="fas fa-print"></i> Print
                                                                    </a>
                                                                    <a href="javascript:void(0);" class="btn btn-sm bg-info-light">
                                                                        <i class="far fa-eye"></i> View
                                                                    </a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>2</td>
                                                            <td>Antar Nandi</td>
                                                            <td>Arafat Ali</td>
                                                            <td>2022-01-28</td>
                                                            <td>Covax</td>
                                                            <td class="text-right">
                                                                <div class="table-action">
                                                                    <a href="javascript:void(0);" class="btn btn-sm bg-primary-light">
                                                                        <i class="fas fa-print"></i> Print
                                                                    </a>
                                                                    <a href="javascript:void(0);" class="btn btn-sm bg-info-light">
                                                                        <i class="far fa-eye"></i> View
                                                                    </a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>3</td>
                                                            <td>Antar Nandi</td>
                                                            <td>Arafat Ali</td>
                                                            <td>2022-01-28</td>
                                                            <td>Covax</td>
                                                            <td class="text-right">
                                                                <div class="table-action">
                                                                    <a href="javascript:void(0);" class="btn btn-sm bg-primary-light">
                                                                        <i class="fas fa-print"></i> Print
                                                                    </a>
                                                                    <a href="javascript:void(0);" class="btn btn-sm bg-info-light">
                                                                        <i class="far fa-eye"></i> View
                                                                    </a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>4</td>
                                                            <td>Antar Nandi</td>
                                                            <td>Arafat Ali</td>
                                                            <td>2022-01-28</td>
                                                            <td>Covax</td>
                                                            <td class="text-right">
                                                                <div class="table-action">
                                                                    <a href="javascript:void(0);" class="btn btn-sm bg-primary-light">
                                                                        <i class="fas fa-print"></i> Print
                                                                    </a>
                                                                    <a href="javascript:void(0);" class="btn btn-sm bg-info-light">
                                                                        <i class="far fa-eye"></i> View
                                                                    </a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>5</td>
                                                            <td>Antar Nandi</td>
                                                            <td>Arafat Ali</td>
                                                            <td>2022-01-28</td>
                                                            <td>Covax</td>
                                                            <td class="text-right">
                                                                <div class="table-action">
                                                                    <a href="javascript:void(0);" class="btn btn-sm bg-primary-light">
                                                                        <i class="fas fa-print"></i> Print
                                                                    </a>
                                                                    <a href="javascript:void(0);" class="btn btn-sm bg-info-light">
                                                                        <i class="far fa-eye"></i> View
                                                                    </a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Prescription Tab -->

                                <!-- Medical Records Tab -->
                                <div class="tab-pane fade" id="medical">

                                    <div class="card card-table mb-0">
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table class="table table-hover table-center mb-0">
                                                    <thead>
                                                        <tr>
                                                            <th>ID</th>
                                                            <th>Date </th>
                                                            <th>Description</th>
                                                            <th>Attachment</th>
                                                            <th>Created</th>
                                                            <th></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td><a href="javascript:void(0);">#MR-0010</a></td>
                                                            <td>14 Nov 2019</td>
                                                            <td>Dental Filling</td>
                                                            <td><a href="#">dental-test.pdf</a></td>
                                                            <td>
                                                                <h2 class="table-avatar">
                                                                    <a href="doctor-profile.html" class="avatar avatar-sm mr-2">
                                                                        <img class="avatar-img rounded-circle" src="assets/img/doctors/doctor-thumb-01.jpg" alt="User Image">
                                                                    </a>
                                                                    <a href="doctor-profile.html">Dr. Ruby Perrin <span>Dental</span></a>
                                                                </h2>
                                                            </td>
                                                            <td class="text-right">
                                                                <div class="table-action">
                                                                    <a href="javascript:void(0);" class="btn btn-sm bg-primary-light">
                                                                        <i class="fas fa-print"></i> Print
                                                                    </a>
                                                                    <a href="javascript:void(0);" class="btn btn-sm bg-info-light">
                                                                        <i class="far fa-eye"></i> View
                                                                    </a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="javascript:void(0);">#MR-0009</a></td>
                                                            <td>13 Nov 2019</td>
                                                            <td>Teeth Cleaning</td>
                                                            <td><a href="#">dental-test.pdf</a></td>
                                                            <td>
                                                                <h2 class="table-avatar">
                                                                    <a href="doctor-profile.html" class="avatar avatar-sm mr-2">
                                                                        <img class="avatar-img rounded-circle" src="assets/img/doctors/doctor-thumb-02.jpg" alt="User Image">
                                                                    </a>
                                                                    <a href="doctor-profile.html">Dr. Darren Elder <span>Dental</span></a>
                                                                </h2>
                                                            </td>
                                                            <td class="text-right">
                                                                <div class="table-action">
                                                                    <a href="javascript:void(0);" class="btn btn-sm bg-primary-light">
                                                                        <i class="fas fa-print"></i> Print
                                                                    </a>
                                                                    <a href="javascript:void(0);" class="btn btn-sm bg-info-light">
                                                                        <i class="far fa-eye"></i> View
                                                                    </a>
                                                                    <a href="edit-prescription.html" class="btn btn-sm bg-success-light" data-toggle="modal" data-target="#add_medical_records">
                                                                        <i class="fas fa-edit"></i> Edit
                                                                    </a>
                                                                    <a href="javascript:void(0);" class="btn btn-sm bg-danger-light">
                                                                        <i class="far fa-trash-alt"></i> Delete
                                                                    </a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="javascript:void(0);">#MR-0008</a></td>
                                                            <td>12 Nov 2019</td>
                                                            <td>General Checkup</td>
                                                            <td><a href="#">cardio-test.pdf</a></td>
                                                            <td>
                                                                <h2 class="table-avatar">
                                                                    <a href="doctor-profile.html" class="avatar avatar-sm mr-2">
                                                                        <img class="avatar-img rounded-circle" src="assets/img/doctors/doctor-thumb-03.jpg" alt="User Image">
                                                                    </a>
                                                                    <a href="doctor-profile.html">Dr. Deborah Angel <span>Cardiology</span></a>
                                                                </h2>
                                                            </td>
                                                            <td class="text-right">
                                                                <div class="table-action">
                                                                    <a href="javascript:void(0);" class="btn btn-sm bg-primary-light">
                                                                        <i class="fas fa-print"></i> Print
                                                                    </a>
                                                                    <a href="javascript:void(0);" class="btn btn-sm bg-info-light">
                                                                        <i class="far fa-eye"></i> View
                                                                    </a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="javascript:void(0);">#MR-0007</a></td>
                                                            <td>11 Nov 2019</td>
                                                            <td>General Test</td>
                                                            <td><a href="#">general-test.pdf</a></td>
                                                            <td>
                                                                <h2 class="table-avatar">
                                                                    <a href="doctor-profile.html" class="avatar avatar-sm mr-2">
                                                                        <img class="avatar-img rounded-circle" src="assets/img/doctors/doctor-thumb-04.jpg" alt="User Image">
                                                                    </a>
                                                                    <a href="doctor-profile.html">Dr. Sofia Brient <span>Urology</span></a>
                                                                </h2>
                                                            </td>
                                                            <td class="text-right">
                                                                <div class="table-action">
                                                                    <a href="javascript:void(0);" class="btn btn-sm bg-primary-light">
                                                                        <i class="fas fa-print"></i> Print
                                                                    </a>
                                                                    <a href="javascript:void(0);" class="btn btn-sm bg-info-light">
                                                                        <i class="far fa-eye"></i> View
                                                                    </a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="javascript:void(0);">#MR-0006</a></td>
                                                            <td>10 Nov 2019</td>
                                                            <td>Eye Test</td>
                                                            <td><a href="#">eye-test.pdf</a></td>
                                                            <td>
                                                                <h2 class="table-avatar">
                                                                    <a href="doctor-profile.html" class="avatar avatar-sm mr-2">
                                                                        <img class="avatar-img rounded-circle" src="assets/img/doctors/doctor-thumb-05.jpg" alt="User Image">
                                                                    </a>
                                                                    <a href="doctor-profile.html">Dr. Marvin Campbell <span>Ophthalmology</span></a>
                                                                </h2>
                                                            </td>
                                                            <td class="text-right">
                                                                <div class="table-action">
                                                                    <a href="javascript:void(0);" class="btn btn-sm bg-primary-light">
                                                                        <i class="fas fa-print"></i> Print
                                                                    </a>
                                                                    <a href="javascript:void(0);" class="btn btn-sm bg-info-light">
                                                                        <i class="far fa-eye"></i> View
                                                                    </a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="javascript:void(0);">#MR-0005</a></td>
                                                            <td>9 Nov 2019</td>
                                                            <td>Leg Pain</td>
                                                            <td><a href="#">ortho-test.pdf</a></td>
                                                            <td>
                                                                <h2 class="table-avatar">
                                                                    <a href="doctor-profile.html" class="avatar avatar-sm mr-2">
                                                                        <img class="avatar-img rounded-circle" src="assets/img/doctors/doctor-thumb-06.jpg" alt="User Image">
                                                                    </a>
                                                                    <a href="doctor-profile.html">Dr. Katharine Berthold <span>Orthopaedics</span></a>
                                                                </h2>
                                                            </td>
                                                            <td class="text-right">
                                                                <div class="table-action">
                                                                    <a href="javascript:void(0);" class="btn btn-sm bg-primary-light">
                                                                        <i class="fas fa-print"></i> Print
                                                                    </a>
                                                                    <a href="javascript:void(0);" class="btn btn-sm bg-info-light">
                                                                        <i class="far fa-eye"></i> View
                                                                    </a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="javascript:void(0);">#MR-0004</a></td>
                                                            <td>8 Nov 2019</td>
                                                            <td>Head pain</td>
                                                            <td><a href="#">neuro-test.pdf</a></td>
                                                            <td>
                                                                <h2 class="table-avatar">
                                                                    <a href="doctor-profile.html" class="avatar avatar-sm mr-2">
                                                                        <img class="avatar-img rounded-circle" src="assets/img/doctors/doctor-thumb-07.jpg" alt="User Image">
                                                                    </a>
                                                                    <a href="doctor-profile.html">Dr. Linda Tobin <span>Neurology</span></a>
                                                                </h2>
                                                            </td>
                                                            <td class="text-right">
                                                                <div class="table-action">
                                                                    <a href="javascript:void(0);" class="btn btn-sm bg-primary-light">
                                                                        <i class="fas fa-print"></i> Print
                                                                    </a>
                                                                    <a href="javascript:void(0);" class="btn btn-sm bg-info-light">
                                                                        <i class="far fa-eye"></i> View
                                                                    </a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="javascript:void(0);">#MR-0003</a></td>
                                                            <td>7 Nov 2019</td>
                                                            <td>Skin Alergy</td>
                                                            <td><a href="#">alergy-test.pdf</a></td>
                                                            <td>
                                                                <h2 class="table-avatar">
                                                                    <a href="doctor-profile.html" class="avatar avatar-sm mr-2">
                                                                        <img class="avatar-img rounded-circle" src="assets/img/doctors/doctor-thumb-08.jpg" alt="User Image">
                                                                    </a>
                                                                    <a href="doctor-profile.html">Dr. Paul Richard <span>Dermatology</span></a>
                                                                </h2>
                                                            </td>
                                                            <td class="text-right">
                                                                <div class="table-action">
                                                                    <a href="javascript:void(0);" class="btn btn-sm bg-primary-light">
                                                                        <i class="fas fa-print"></i> Print
                                                                    </a>
                                                                    <a href="javascript:void(0);" class="btn btn-sm bg-info-light">
                                                                        <i class="far fa-eye"></i> View
                                                                    </a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="javascript:void(0);">#MR-0002</a></td>
                                                            <td>6 Nov 2019</td>
                                                            <td>Dental Removing</td>
                                                            <td><a href="#">dental-test.pdf</a></td>
                                                            <td>
                                                                <h2 class="table-avatar">
                                                                    <a href="doctor-profile.html" class="avatar avatar-sm mr-2">
                                                                        <img class="avatar-img rounded-circle" src="assets/img/doctors/doctor-thumb-09.jpg" alt="User Image">
                                                                    </a>
                                                                    <a href="doctor-profile.html">Dr. John Gibbs <span>Dental</span></a>
                                                                </h2>
                                                            </td>
                                                            <td class="text-right">
                                                                <div class="table-action">
                                                                    <a href="javascript:void(0);" class="btn btn-sm bg-primary-light">
                                                                        <i class="fas fa-print"></i> Print
                                                                    </a>
                                                                    <a href="javascript:void(0);" class="btn btn-sm bg-info-light">
                                                                        <i class="far fa-eye"></i> View
                                                                    </a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="javascript:void(0);">#MR-0001</a></td>
                                                            <td>5 Nov 2019</td>
                                                            <td>Dental Filling</td>
                                                            <td><a href="#">dental-test.pdf</a></td>
                                                            <td>
                                                                <h2 class="table-avatar">
                                                                    <a href="doctor-profile.html" class="avatar avatar-sm mr-2">
                                                                        <img class="avatar-img rounded-circle" src="assets/img/doctors/doctor-thumb-10.jpg" alt="User Image">
                                                                    </a>
                                                                    <a href="doctor-profile.html">Dr. Olga Barlow <span>Dental</span></a>
                                                                </h2>
                                                            </td>
                                                            <td class="text-right">
                                                                <div class="table-action">
                                                                    <a href="javascript:void(0);" class="btn btn-sm bg-primary-light">
                                                                        <i class="fas fa-print"></i> Print
                                                                    </a>
                                                                    <a href="javascript:void(0);" class="btn btn-sm bg-info-light">
                                                                        <i class="far fa-eye"></i> View
                                                                    </a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Medical Records Tab -->



                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@stop