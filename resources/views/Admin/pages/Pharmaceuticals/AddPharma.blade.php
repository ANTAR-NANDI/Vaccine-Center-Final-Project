@extends('Admin.layouts.defaults')
@section('abc')
<!-- Page Wrapper -->
<div class="page-wrapper">

  <div class="content container-fluid">

    <div class="card card-primary">
      <div class="card-header mb-2">
        <h3 class="card-title">Add Pharmaceutical Name</h3>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      <div class="click-closed"></div>
      <!--/ Form Search Star /-->
      <div class="box-collapse">
        <div class="content container">
          <div class="box-collapse-wrap form">
            <form class="form-a">
              <div class="row">
                <div class="col-md-6 mb-2">
                  <div class="form-group">
                    <label for="Type">Keyword</label>
                    <input type="text" class="form-control form-control-lg form-control-a" placeholder="Keyword">
                  </div>
                </div>
              </div>
            </form>
          </div>
          <div class="save-button mb-4">
            <button type="submit" class="btn btn-primary">Add Pharma</button>
          </div>
        </div>
      </div>
      <!--/ Form Search End /-->
    </div>
  </div>
</div>
@stop