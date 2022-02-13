    @extends('Admin.layouts.defaults')
    @section('abc')
    <div class="click-closed"></div>
    <!--/ Form Search Star /-->
    <div class="box-collapse">
        <div class="title-box-d">
            <h3 class="title-d">Add Pharmaceutical</h3>
        </div>
        <span class="close-box-collapse right-boxed ion-ios-close"></span>
        <div class="box-collapse-wrap form">
            <form class="form-a">
                <div class="row">
                    <div class="col-md-12 mb-2">
                        <div class="form-group">
                            <label for="Type">Pharmaceutical Name</label>
                            <input type="text" class="form-control form-control-lg form-control-a" placeholder="Pharmaceutical Name">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-b">Add Pharmaceutical</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
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
                                <li class="breadcrumb-item active" aria-current="page">Pharmaceuticals List</li>
                            </ol>
                        </nav>
                        <h2 class="breadcrumb-title">Pharmaceuticals List</h2>
                    </div>
                    <div class="col-md-3 col-3">

                    </div>
                    <!-- <div class="col-md-2 col-2">
                        <a style="margin-top: 5px;" href=" #" class="add-new-btn" data-toggle="modal" data-target="#ModalPat1">Add Vaccine</a>
                    </div> -->
                    <div class="col-md-3 col-3">
                        <a style="margin-top: 5px;padding-right:10px" href=" #" class="add-new-btn  text-center navbar-toggle-box-collapse d-none d-md-block" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-expanded="false">Add Pharmaceuticals</a>
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
                                                        <th>Pharmaceutical Name</th>
                                                        <th>Address</th>
                                                        <th>Status</th>
                                                        <th colspan="2" style="text-align:center">Action</th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            1
                                                        </td>
                                                        <td>Beacon Pharmaceuticals </td>

                                                        <td>Dhanmondi, Dhaka, Bangladesh</td>

                                                        <td><span class="badge badge-pill bg-danger-light">Not Active</span></td>
                                                        <td class="text-right">
                                                            <div class="table-action">
                                                                <a href="edit-prescription.html" class="btn btn-sm bg-success-light">
                                                                    <i class="fa fa-edit"></i> Edit
                                                                </a>
                                                                <a href="javascript:void(0);" class="btn btn-sm bg-danger-light">
                                                                    <i class="fa fa-trash"></i> Delete
                                                                </a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            1
                                                        </td>
                                                        <td>Beacon Pharmaceuticals </td>

                                                        <td>Dhanmondi, Dhaka, Bangladesh</td>

                                                        <td><span class="badge badge-pill bg-danger-light">Not Active</span></td>
                                                        <td class="text-right">
                                                            <div class="table-action">
                                                                <a href="edit-prescription.html" class="btn btn-sm bg-success-light">
                                                                    <i class="fa fa-edit"></i> Edit
                                                                </a>
                                                                <a href="javascript:void(0);" class="btn btn-sm bg-danger-light">
                                                                    <i class="fa fa-trash"></i> Delete
                                                                </a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            2
                                                        </td>
                                                        <td>Beacon Pharmaceuticals </td>

                                                        <td>Dhanmondi, Dhaka, Bangladesh</td>

                                                        <td><span class="badge badge-pill bg-danger-light">Not Active</span></td>
                                                        <td class="text-right">
                                                            <div class="table-action">
                                                                <a href="edit-prescription.html" class="btn btn-sm bg-success-light">
                                                                    <i class="fa fa-edit"></i> Edit
                                                                </a>
                                                                <a href="javascript:void(0);" class="btn btn-sm bg-danger-light">
                                                                    <i class="fa fa-trash"></i> Delete
                                                                </a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            3
                                                        </td>
                                                        <td>Beacon Pharmaceuticals </td>

                                                        <td>Dhanmondi, Dhaka, Bangladesh</td>

                                                        <td><span class="badge badge-pill bg-success-light">Active</span></td>
                                                        <td class="text-right">
                                                            <div class="table-action">
                                                                <a href="edit-prescription.html" class="btn btn-sm bg-success-light">
                                                                    <i class="fa fa-edit"></i> Edit
                                                                </a>
                                                                <a href="javascript:void(0);" class="btn btn-sm bg-danger-light">
                                                                    <i class="fa fa-trash"></i> Delete
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