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
                        <label for="Type" style="font-size: 20px;">Pharmaceutical Name</label>
                        <input type="text" class="form-control form-control-lg form-control-a" placeholder="Keyword">
                    </div>
                </div>

                <div class="col-md-12">
                    <button type="submit" class="btn btn-b">Add Pharmaceutical</button>
                </div>
            </div>
        </form>
    </div>
</div>
<div class="page-wrapper">
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12 col-xl-12 dct-appoinment">
                    <div class="card">
                        <div class="card-table">
                            <div class="card-header">
                                <h2 class="card-title" style="margin-top:10px">Pharmaceutical List</h2>
                                <div class="text-right" style="margin-bottom:40px">

                                    <button style="margin:0px" class="add-new-btn navbar-toggle-box-collapse" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-expanded="false">
                                        <!-- <span class="fa fa-search" aria-hidden="true"></span> -->
                                        <a href="#">Add Pharmaceutical</a>
                                    </button>
                                </div>

                                <!-- <div class="text-right" style="margin:0px">
                                    <button class="add-new-btn navbar-toggle-box-collapse" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-expanded="false">
                                        
                                        <a href="#">Add Pharmaceutical</a>
                                    </button>
                                </div> -->
                            </div>
                        </div>




                        <div class="tab-content">
                            <!-- Appointment Tab -->
                            <div id="pat_appointments" class="tab-pane fade show active">
                                <div class="card card-table mb-0">
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
                                                        <td>ESKAYEF PHARMACEUTICALS LTD.</td>
                                                        <td>Welwyn Garden City, United Kingdom</td>
                                                        <td><span class="badge badge-pill bg-success-light">Active</span></td>
                                                        <td class="text-right">
                                                            <div class="table-action">
                                                                <a href="edit-prescription.html" class="btn btn-sm bg-success-light">
                                                                    <i class="fa fa-edit"></i> Edit
                                                                </a>
                                                                <a href="javascript:void(0);" class="btn btn-sm bg-danger-light">
                                                                    <i class="fa fa-delete"></i> Delete
                                                                </a>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            2
                                                        </td>
                                                        <td>ESKAYEF PHARMACEUTICALS LTD.</td>

                                                        <td>Welwyn Garden City, United Kingdom</td>
                                                        <td><span class="badge badge-pill bg-danger-light">Deactive</span></td>
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
                                                            2
                                                        </td>
                                                        <td>ESKAYEF PHARMACEUTICALS LTD.</td>

                                                        <td>Welwyn Garden City, United Kingdom</td>
                                                        <td><span class="badge badge-pill bg-danger-light">Deactive</span></td>
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
<!-- </div> -->
@stop