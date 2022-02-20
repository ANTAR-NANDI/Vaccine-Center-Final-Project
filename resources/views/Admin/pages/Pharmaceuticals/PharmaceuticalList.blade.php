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
                    <div class="col-md-8 mb-2">
                        <div class="form-group">
                            <label for="Type">
                                Pharma Name</label>
                            <input type="text" value="" id="name" class="form-control form-control-lg form-control-a" placeholder="Vaccine Name">
                        </div>
                    </div>

                    <div class="col-md-12">
                        <button type="submit" class="btn btn-b">Add Pharma</button>
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
                                                        <th>Pharmaceutical Name</th>

                                                        <th>Address</th>
                                                        <th>Status</th>

                                                        <th colspan="2" style="text-align:center">Action</th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($pharmalist as $u_info)
                                                    <tr id="user_id_{{ $u_info->id }}">
                                                        <td>{{ $u_info->id  }}</td>
                                                        <td>{{ $u_info->name }}</td>
                                                        <td>{{ $u_info->address }}</td>
                                                        <td><span class="badge badge-pill bg-danger-light">Deactive</span></td>
                                                        <td class="text-center">
                                                            <div class="table-action">
                                                                <a href="javascript:void(0)" id="show-user" data-id="{{ $u_info->id }}" class="btn-sm btn-info">&nbsp;<i class="fa fa-edit"></i>Edit</a>
                                                                <a href="javascript:void(0)" id="show-user" data-id="{{ $u_info->id }}" class="btn-sm btn-danger">&nbsp;<i class="fa fa-trash"></i>Delete</a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
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
    <div class="modal fade" id="modalContactForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form class="form-a">
                    <div class="modal-header text-center">
                        <h4 class="modal-title w-100 font-weight-bold">Edit Pharmaceutical</h4>
                        <button class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <input type="hidden" name="pharma_id" id="pharma_id" value="{{$pharmalist[0]['name']}}">
                    <div class="col-md-8 mb-2">
                        <div class="form-group">
                            <label for="Type">
                                Pharma Name</label>
                            <input type="text" value="{{$pharmalist[0]['name']}}" id="name" class="form-control form-control-lg form-control-a" placeholder="Vaccine Name">
                        </div>
                    </div>
                    <div class="col-md-8 mb-2">
                        <div class="form-group">
                            <label for="Type">
                                Address</label>
                            <input type="text" value="{{$pharmalist[0]['address']}}" id="name" class="form-control form-control-lg form-control-a" placeholder="Vaccine Name">
                        </div>
                    </div>

                    <div class="col-md-6 mb-4">
                        <button type="submit" id="updatedata" class="btn btn-b">Update Pharma</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            /* When click show user */
            $('body').on('click', '#show-user', function() {
                var user_id = $(this).data('id');
                $.get('UpdatePharmaList/' + user_id, function(data) {
                    // console.log(user_id);
                    // $('#userShowModal').html("User Details");
                    $('#modalContactForm').modal('show');
                    //$(this).find('.box-collapse').collapse('show');
                    //$('.t').addClass('box-collapse-open');
                    $('#user_id').val(data.id);
                    $('#name').val(data.name);
                    $('#description').val(data.address);
                })
            });
        });


        $("#updatedata").click(updateCart);

        function updateCart() {
            var pharma_id = parseInt($('#pharma_id').val());
            console.log(pharma_id);

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                url: "{{url('admin/UpdatePharmaList/{cat_id}/{qty}/')}}",
                method: "POST",
                data: {
                    cat_id: pharma_id,
                    qty: {
                        'name': pharma_id,
                        'address': pharma_id
                    }
                },
                success: function(data) {
                    console.log(data);
                }
            });
        }
    </script>
    @stop