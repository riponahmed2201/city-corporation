@extends('master')

@section('dashboard-title', 'Admin Dashboard')
@section('breadcrumb-title', 'Admin Dashboard')

@section('content')
<section class="content">
    <div class="container-fluid">
      <!-- Info boxes -->
      <div class="row">
        <div class="col-12 col-sm-6 col-md-3">
          <div class="info-box">
            <span class="info-box-icon bg-pink elevation-1"><i class="fas fa-project-diagram"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Complain</span>
              <span class="info-box-number">
                <small>4</small>
              </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-12 col-sm-6 col-md-3">
          <div class="info-box mb-3">
            <span class="info-box-icon bg-yellow elevation-1"><i class="fas fa-boxes"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Complain</span>
              <span class="info-box-number">
                <small>4</small>
              </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <!-- fix for small devices only -->
        <div class="clearfix hidden-md-up"></div>

        <div class="col-12 col-sm-6 col-md-3">
          <div class="info-box mb-3">
            <span class="info-box-icon bg-red elevation-1"><i class="fas fa-dolly"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Complain</span>
              <span class="info-box-number">
                <small>4</small>
              </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>

        <div class="col-12 col-sm-6 col-md-3">
          <div class="info-box mb-3">
            <span class="info-box-icon bg-green elevation-1"><i class="fas fa-dolly"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Complain</span>
              <span class="info-box-number">
                <small>4</small>
              </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        
        <!-- /.col -->
      </div>
      <!-- /.row -->
      <!-- /.row -->
    </div><!--/. container-fluid -->
  </section>
@endsection
