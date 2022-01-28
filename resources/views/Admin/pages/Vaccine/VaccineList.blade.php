    @extends('Admin.layouts.defaults')
    @section('abc')
    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <!-- Breadcrumb -->
        <div class="breadcrumb-bar">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-md-6 col-6">
                        <nav aria-label="breadcrumb" class="page-breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ URL::to('/admin/home')}}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Vaccine List</li>
                            </ol>
                        </nav>
                        <h2 class="breadcrumb-title">Vaccine List</h2>
                    </div>
                    <div class="col-md-4 col-4">

                    </div>
                    <div class="col-md-2 col-2">
                        <a style="margin-top: 5px;" href=" #" class="add-new-btn" data-toggle="modal" data-target="#ModalPat1">Add Vaccine</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Breadcrumb -->
        <div class="content">
            <div class="container">

                <div class="row">

                    <div class="col-md-12 col-lg-12 col-xl-12 dct-appoinment">
                        <!-- <div class="card">
                            <div class="card-table">
                                <div class="card-header">
                                    <h2 class="card-title" style="margin:0px">Vaccine List</h2>
                                    <div class="text-right">
                                        <a href="#" class="add-new-btn" data-toggle="modal" data-target="#ModalPat2">Add Vaccine</a>
                                    </div>
                                </div>
                            </div> -->
                        <div class="tab-content">
                            <!-- Appointment Tab -->
                            <div id="pat_appointments" class="tab-pane fade show active">
                                <div class="card card-table mb-0 mt-0">
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-striped table-bordered table-hover table-center mb-0">
                                                <thead>
                                                    <tr>
                                                        <th>SL. No.</th>
                                                        <th>Vaccine Name</th>
                                                        <th>Provider Company</th>
                                                        <th>Manufactured Date</th>
                                                        <th>Expiry Date</th>
                                                        <th>Price</th>

                                                        <th>Status</th>
                                                        <th colspan="2" style="text-align:center">Action</th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            1
                                                        </td>
                                                        <td>Prevener 13</td>

                                                        <td>Sk+F</td>
                                                        <td>12 Nov 2019</td>
                                                        <td>12 Nov 2021</td>
                                                        <td>1200</td>
                                                        <td><span class="badge badge-pill bg-danger-light">Stock Out</span></td>
                                                        <td class="text-right">
                                                            <div class="table-action">
                                                                <a href="edit-prescription.html" class="btn btn-sm bg-success-light">
                                                                    <i class="far fa-edit"></i> Edit
                                                                </a>
                                                                <a href="javascript:void(0);" class="btn btn-sm bg-danger-light">
                                                                    <i class="far fa-trash-alt"></i> Delete
                                                                </a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            1
                                                        </td>
                                                        <td>Pneumovax 23</td>

                                                        <td>Sk+F</td>
                                                        <td>12 Nov 2019</td>
                                                        <td>12 Nov 2021</td>
                                                        <td>1200</td>
                                                        <td><span class="badge badge-pill bg-danger-light">Stock Out</span></td>
                                                        <td class="text-right">
                                                            <div class="table-action">
                                                                <a href="edit-prescription.html" class="btn btn-sm bg-success-light">
                                                                    <i class="far fa-edit"></i> Edit
                                                                </a>
                                                                <a href="javascript:void(0);" class="btn btn-sm bg-danger-light">
                                                                    <i class="far fa-trash-alt"></i> Delete
                                                                </a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            1
                                                        </td>
                                                        <td>Vaxigrip</td>

                                                        <td>Sk+F</td>
                                                        <td>12 Nov 2019</td>
                                                        <td>12 Nov 2021</td>
                                                        <td>1200</td>
                                                        <td><span class="badge badge-pill bg-success-light">In Stock</span></td>
                                                        <td class="text-right">
                                                            <div class="table-action">
                                                                <a href="edit-prescription.html" class="btn btn-sm bg-success-light">
                                                                    <i class="far fa-edit"></i> Edit
                                                                </a>
                                                                <a href="javascript:void(0);" class="btn btn-sm bg-danger-light">
                                                                    <i class="far fa-trash-alt"></i> Delete
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
                            <!-- /Appointment Tab -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    @stop