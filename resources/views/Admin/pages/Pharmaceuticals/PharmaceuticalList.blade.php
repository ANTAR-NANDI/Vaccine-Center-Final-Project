@extends('Admin.layouts.defaults')
@section('abc')
<div class="click-closed"></div>
<!--/ Form Search Star /-->
<div class="box-collapse">
    <div class="title-box-d">
        <h3 class="title-d">Search Property</h3>
    </div>
    <span class="close-box-collapse right-boxed ion-ios-close"></span>
    <div class="box-collapse-wrap form">
        <form class="form-a">
            <div class="row">
                <div class="col-md-12 mb-2">
                    <div class="form-group">
                        <label for="Type">Keyword</label>
                        <input type="text" class="form-control form-control-lg form-control-a" placeholder="Keyword">
                    </div>
                </div>
                <div class="col-md-6 mb-2">
                    <div class="form-group">
                        <label for="Type">Type</label>
                        <select class="form-control form-control-lg form-control-a" id="Type">
                            <option>All Type</option>
                            <option>For Rent</option>
                            <option>For Sale</option>
                            <option>Open House</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6 mb-2">
                    <div class="form-group">
                        <label for="city">City</label>
                        <select class="form-control form-control-lg form-control-a" id="city">
                            <option>All City</option>
                            <option>Alabama</option>
                            <option>Arizona</option>
                            <option>California</option>
                            <option>Colorado</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6 mb-2">
                    <div class="form-group">
                        <label for="bedrooms">Bedrooms</label>
                        <select class="form-control form-control-lg form-control-a" id="bedrooms">
                            <option>Any</option>
                            <option>01</option>
                            <option>02</option>
                            <option>03</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6 mb-2">
                    <div class="form-group">
                        <label for="garages">Garages</label>
                        <select class="form-control form-control-lg form-control-a" id="garages">
                            <option>Any</option>
                            <option>01</option>
                            <option>02</option>
                            <option>03</option>
                            <option>04</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6 mb-2">
                    <div class="form-group">
                        <label for="bathrooms">Bathrooms</label>
                        <select class="form-control form-control-lg form-control-a" id="bathrooms">
                            <option>Any</option>
                            <option>01</option>
                            <option>02</option>
                            <option>03</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6 mb-2">
                    <div class="form-group">
                        <label for="price">Min Price</label>
                        <select class="form-control form-control-lg form-control-a" id="price">
                            <option>Unlimite</option>
                            <option>$50,000</option>
                            <option>$100,000</option>
                            <option>$150,000</option>
                            <option>$200,000</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-12">
                    <button type="submit" class="btn btn-b">Search Property</button>
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
                                <h2 class="card-title" style="margin:0px">Pharmaceutical List</h2>
                                <div class="text-right">
                                    <!-- <button type="button" class="btn btn-link nav-search navbar-toggle-box-collapse d-md-none" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-expanded="false">
                                        ADd Patient
                                    </button> -->

                                    <button type="button" class="btn btn-b-n navbar-toggle-box-collapse d-none d-md-block" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-expanded="false">
                                        <!-- <span class="fa fa-search" aria-hidden="true"></span> -->
                                        <a href="#" class="add-new-btn">Add Pharmaceutical</a>
                                    </button>
                                </div>
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
</div>
@stop
<!--/ Nav End /-->
<!-- JavaScript Libraries -->
<script src="{{ asset('lib/jquery/jquery.min.js')}}"></script>
<script src="{{ asset('lib/jquery/jquery-migrate.min.js')}}"></script>
<script src="{{ asset('lib/popper/popper.min.js')}}"></script>
<script src="{{ asset('lib/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{ asset('lib/easing/easing.min.js')}}"></script>
<script src="{{ asset('lib/owlcarousel/owl.carousel.min.js')}}"></script>
<script src="{{ asset('lib/scrollreveal/scrollreveal.min.js')}}"></script>
<!-- Contact Form JavaScript File -->
<script src="{{ asset('contactform/contactform.js')}}"></script>

<!-- Template Main Javascript File -->
<script src="{{ asset('js/main.js')}}"></script>')}}