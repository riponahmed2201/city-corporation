@extends('master')

@section('dashboard-title', 'Admin Dashboard')
@section('breadcrumb-title', 'Admin Dashboard')

@section('content')
<section class="content">
    <div class="container-fluid">
      <!-- Info boxes -->
      <div class="row">
        <div class="col-12 col-sm-6 col-md-4">
          <div class="info-box">
            <span class="info-box-icon bg-pink elevation-1"><i class="fas fa-receipt"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">অতিরিক্ত বৃষ্টিপাতে রাস্তায় পানি সমস্যা ।</span>
              <span class="info-box-number">
                <small>4</small>
              </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-12 col-sm-6 col-md-4">
          <div class="info-box mb-3">
            <span class="info-box-icon bg-yellow elevation-1"><i class="fas fa-list"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">ড্রেনের পানির  লাইন থেকে দুর্গন্ধ ছড়ানো ।</span>
              <span class="info-box-number">
                <small>7</small>
              </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <!-- fix for small devices only -->
        <div class="clearfix hidden-md-up"></div>

        <div class="col-12 col-sm-6 col-md-4">
          <div class="info-box mb-3">
            <span class="info-box-icon bg-red elevation-1"><i class="fas fa-list-alt "></i></span>

            <div class="info-box-content">
              <span class="info-box-text">ওয়াসার পানির লাইনে  সমস্যা ।</span>
              <span class="info-box-number">
                <small>5</small>
              </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
      </div>

      <div class="row">
        <div class="col-12 col-sm-6 col-md-4">
          <div class="info-box">
            <span class="info-box-icon bg-blue elevation-1"><i class="fas fa-list"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">গ্যাস  সরবাহে ও গ্যাস লাইনে ত্রুটি ।</span>
              <span class="info-box-number">
                <small>3</small>
              </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-12 col-sm-6 col-md-4">
          <div class="info-box mb-3">
            <span class="info-box-icon bg-red elevation-1"><i class="fas fa-building"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">বিদ্যুৎ সমস্যা, ঘন ঘন লোডশেডিং ।</span>
              <span class="info-box-number">
                <small>9</small>
              </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <!-- fix for small devices only -->
        <div class="clearfix hidden-md-up"></div>

        <div class="col-12 col-sm-6 col-md-4">
          <div class="info-box mb-3">
            <span class="info-box-icon bg-green elevation-1"><i class="fas fa-list"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">রাস্তায় ময়লা আবর্জনা ও দুর্গন্ধ ।</span>
              <span class="info-box-number">
                <small>10</small>
              </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
      </div>

      <div class="row">
        <div class="col-12 col-sm-6 col-md-4">
          <div class="info-box">
            <span class="info-box-icon bg-pink elevation-1"><i class="fas fa-project-diagram"></i></span>

            <div class="info-box-content">
              <span class="info-box-text"> রাস্তা মেরামতের কাজ ঠিক ভাবে না হওয়া। </span>
              <span class="info-box-number">
                <small>8</small>
              </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-12 col-sm-6 col-md-4">
          <div class="info-box mb-3">
            <span class="info-box-icon bg-yellow elevation-1"><i class="fas fa-list"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">খাল খনন ও রাস্তা নির্মাণ ।</span>
              <span class="info-box-number">
                <small>6</small>
              </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <!-- fix for small devices only -->
        <div class="clearfix hidden-md-up"></div>

        <div class="col-12 col-sm-6 col-md-4">
          <div class="info-box mb-3">
            <span class="info-box-icon bg-blue elevation-1"><i class="fas fa-list-alt"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">ব্যক্তিগত কাজে রাস্তা বন্ধ রাখা ।</span>
              <span class="info-box-number">
                <small>11</small>
              </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
      </div>

      <div class="row">
        <div class="col-12 col-sm-6 col-md-4">
          <div class="info-box">
            <span class="info-box-icon bg-green elevation-1"><i class="fas fa-receipt"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">সাবধানতা অবলম্বন না করে বাড়ির নির্মাণ কাজ</span>
              <span class="info-box-number">
                <small>16</small>
              </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-12 col-sm-6 col-md-4">
          <div class="info-box mb-3">
            <span class="info-box-icon bg-green elevation-1"><i class="fas fa-list-alt"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">ঝুঁকিপূর্ণ ভবন ও বৈদ্যুতিক খুঁটি ।</span>
              <span class="info-box-number">
                <small>5</small>
              </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <!-- fix for small devices only -->
        <div class="clearfix hidden-md-up"></div>

        <div class="col-12 col-sm-6 col-md-4">
          <div class="info-box mb-3">
            <span class="info-box-icon bg-red elevation-1"><i class="fas fa-dolly"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">সরকারি দপ্তরে কাজে  ভোগান্তির শিকার ।</span>
              <span class="info-box-number">
                <small>9</small>
              </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
      </div>

      <div class="row">
        <div class="col-12 col-sm-6 col-md-4">
          <div class="info-box">
            <span class="info-box-icon bg-pink elevation-1"><i class="fas fa-project-diagram"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">সিটিতে নিরাপত্তা জনিত ইস্যু ।</span>
              <span class="info-box-number">
                <small>11</small>
              </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-12 col-sm-6 col-md-4">
          <div class="info-box mb-3">
            <span class="info-box-icon bg-yellow elevation-1"><i class="fas fa-boxes"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">ডেঙ্গু মশার প্রকোপ বেড়ে যাওয়া।</span>
              <span class="info-box-number">
                <small>7</small>
              </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <!-- fix for small devices only -->
        <div class="clearfix hidden-md-up"></div>

        <div class="col-12 col-sm-6 col-md-4">
          <div class="info-box mb-3">
            <span class="info-box-icon bg-green elevation-1"><i class="fas fa-list-alt"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">উচ্চ স্বরে মিউজিক বাজানো ।</span>
              <span class="info-box-number">
                <small>15</small>
              </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
      </div>

      <div class="row">
        <div class="col-12 col-sm-6 col-md-4">
          <div class="info-box">
            <span class="info-box-icon bg-green elevation-1"><i class="fas fa-list"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">নিয়ম নীতি না মেনে বাঁজার ও দোকান বসানো ।</span>
              <span class="info-box-number">
                <small>18</small>
              </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
      </div>
    </div><!--/. container-fluid -->
  </section>
@endsection
