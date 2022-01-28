@extends('Admin.layouts.defaults')
@section('abc')
<!-- Page Wrapper -->
<div class="page-wrapper">

  <div class="content container-fluid">

    <div class="card card-primary">
      <div class="card-header mb-2">
        <h3 class="card-title">Add Patient Details</h3>
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
                    <label for="Type">Vaccine Name</label>
                    <input type="text" class="form-control form-control-lg form-control-a" placeholder="Vaccine Name">
                  </div>
                </div>
                <div class="col-md-6 mb-2">
                  <div class="form-group">
                    <label for="Type">Provider</label>
                    <select class="form-control form-control-lg form-control-a" id="Type">
                      <option>Square Pharmaceuticals</option>
                      <option>Beximco Pharma</option>
                      <option>Sanofi Pharma</option>
                      <option>Sk+F</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-6 mb-2">
                  <div class="form-group">
                    <label for="Type">Vaccine Qnty</label>
                    <input type="number" class="form-control form-control-lg form-control-a" placeholder="Vaccine Ammount">
                  </div>
                </div>
                <div class="col-md-6 mb-2">
                  <div class="form-group">
                    <label for="Type">Discount</label>
                    <input type="number" class="form-control form-control-lg form-control-a" placeholder="10%">
                  </div>
                </div>
                <div class="col-md-6 mb-2">
                  <div class="form-group">
                    <label for="Type">Manufactured Date</label>
                    <input type="date" class="form-control form-control-lg form-control-a" placeholder="10%">
                  </div>
                </div>
                <div class="col-md-6 mb-2">
                  <div class="form-group">
                    <label for="Type">Expired Date</label>
                    <input type="date" class="form-control form-control-lg form-control-a" placeholder="10%">
                  </div>
                </div>
                <div class="col-md-6 mb-2">
                  <div class="form-group">
                    <label for="Type">Vaccine Interval(days)</label>
                    <input type="number" class="form-control form-control-lg form-control-a" placeholder="Vaccine Interval">
                  </div>
                </div>
                <div class="col-md-6 mb-2">
                  <div class="form-group">
                    <label for="Type">Booster Dose(month)</label>
                    <input type="number" class="form-control form-control-lg form-control-a" placeholder="Booster Dose">
                  </div>
                </div>
                <div class="col-md-6 mb-2">
                  <div class="form-group">
                    <label for="Type">Selling Price(per)</label>
                    <input type="number" class="form-control form-control-lg form-control-a" placeholder="Booster Dose">
                  </div>
                </div>
                <div class="col-md-6 mb-2">
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
      @stop