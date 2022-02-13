    @extends('Admin.layouts.defaults')
    @section('abc')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
    <div class="click-closed"></div>
    <!--/ Form Search Star /-->
    <div class="box-collapse">
        <div class="title-box-d">
            <h3 class="title-d">Add Vaccine</h3>
        </div>
        <span class="close-box-collapse right-boxed ion-ios-close"></span>
        <div class="box-collapse-wrap form">
            <form class="form-a">
                <div class="row">
                    <div class="col-md-6 mb-2">
                        <div class="form-group">
                            <label for="Type">
                                Generic Name</label>
                            <input type="text" class="form-control form-control-lg form-control-a" placeholder="Vaccine Name">
                        </div>
                    </div>
                    <div class="col-md-6 mb-2">
                        <div class="form-group">
                            <label for="Type">Brand Name</label>
                            <input type="text" class="form-control form-control-lg form-control-a" placeholder="Vaccine Name">
                        </div>
                    </div>
                    <div class="col-md-6 mb-2">
                        <div class="form-group">
                            <label for="Type">Provider Name</label>
                            <select class="form-control form-control-lg form-control-a" id="Type">
                                <option>Sk+F</option>
                                <option>Incepta</option>
                                <option>Beximco</option>
                                <option>Square</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 mb-2">
                        <div class="form-group">
                            <label for="Type">Quantity</label>
                            <input type="number" class="form-control form-control-lg form-control-a" placeholder="Enter Quantity">
                        </div>
                    </div>
                    <div class="col-md-6 mb-2">
                        <div class="form-group">
                            <label for="Type">Price</label>
                            <input type="number" class="form-control form-control-lg form-control-a" placeholder="Enter Price">
                        </div>
                    </div>
                    <div class="col-md-6 mb-2">
                        <div class="form-group">
                            <label for="Type">Discount</label>
                            <input type="number" class="form-control form-control-lg form-control-a" placeholder="Enter Price">
                        </div>
                    </div>
                    <div class="col-md-6 mb-2">
                        <div class="form-group">
                            <label for="Type">Purchased Date</label>
                            <input type="date" class="form-control form-control-lg form-control-a" placeholder="Enter Price">
                        </div>
                    </div>
                    <div class="col-md-6 mb-2">
                        <div class="form-group">
                            <label for="Type">Manufactured Date</label>
                            <input type="date" class="form-control form-control-lg form-control-a" placeholder="Enter Price">
                        </div>
                    </div>
                    <div class="col-md-6 mb-2">
                        <div class="form-group">
                            <label for="Type">Purchase Date</label>
                            <input type="date" class="form-control form-control-lg form-control-a" placeholder="Enter Price">
                        </div>
                    </div>
                    <div class="col-md-6 mb-2">
                        <div class="form-group">
                            <label for="Type">Description</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-b">Add Vaccine</button>
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
                                <li class="breadcrumb-item active" aria-current="page">Vaccine List</li>
                            </ol>
                        </nav>
                        <h2 class="breadcrumb-title">Vaccine List</h2>
                    </div>
                    <div class="col-md-4 col-4">

                    </div>

                    <div class="col-md-2 col-2">
                        <a style="margin-top: 5px;" href=" #" class="add-new-btn navbar-toggle-box-collapse d-none d-md-block" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-expanded="false">Add Vaccine</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Breadcrumb -->
        <div class="content">
            <div class="container">

                <div class="row">

                    <div class="col-md-12 col-lg-12 col-xl-12 dct-appoinment">

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
                                                        <td>12 Nov 2019</td>
                                                        <td>12 Nov 2021</td>
                                                        <td>1200</td>
                                                        <td><span class="badge badge-pill bg-danger-light">Stock Out</span></td>
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
                                                        <td>Prevener 13</td>
                                                        <td>12 Nov 2019</td>
                                                        <td>12 Nov 2021</td>
                                                        <td>1200</td>
                                                        <td><span class="badge badge-pill bg-danger-light">Stock Out</span></td>
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
                                                        <td>Prevener 13</td>
                                                        <td>12 Nov 2019</td>
                                                        <td>12 Nov 2021</td>
                                                        <td>1200</td>
                                                        <td><span class="badge badge-pill bg-danger-light">Stock Out</span></td>
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