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
                                <li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Invoice View</li>
                            </ol>
                        </nav>
                        <h2 class="breadcrumb-title">Invoice View</h2>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Breadcrumb -->
        <div class="content">
            <div class="container">

                <div class="row">

                    <div class="col-12">

                        <!-- General -->

                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">General</h4>
                            </div>
                            <div class="card-body">
                                <form action="#">

                                    <div class="form-group">
                                        <label>Website Name</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Website Logo</label>
                                        <input type="file" class="form-control">
                                        <small class="text-secondary">Recommended image size is <b>150px x 150px</b></small>
                                    </div>
                                    <div class="form-group mb-0">
                                        <label>Favicon</label>
                                        <input type="file" class="form-control">
                                        <small class="text-secondary">Recommended image size is <b>16px x 16px</b> or <b>32px x 32px</b></small><br>
                                        <small class="text-secondary">Accepted formats : only png and ico</small>
                                    </div>

                                </form>
                            </div>
                        </div>

                        <!-- /General -->

                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    @stop