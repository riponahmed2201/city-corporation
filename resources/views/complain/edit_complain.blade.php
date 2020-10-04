

@extends('master')

@section('breadcrumb-title', 'Edit Complain Information')

@section('content')

<section class="content">
    <div class="container-fluid">
      <!-- SELECT2 EXAMPLE -->
      <div class="card card-success card-outline">
        <div class="card-header">
          <h3 class="card-title">Edit Complain Information</h3>
        </div>

         @include('message')
        <!-- /.card-header -->
        <form action="{{ route('update_complain',$complain->id) }}" method="POST">
            @csrf
            <div class="card-body">
                <div class="col-md-12">
                  <div class="form-group">
                      <label>Resulation</label>
                      <input type="text" class="form-control" name="resulation" id="Resulation" value="{{ $complain->resulation }}">
                      @if($errors->has('resulation'))
                        <strong class="text-danger">{{ $errors->first('resulation') }}</strong>
                      @endif
                  </div>
              </div>
          </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-success ">Update</button>
                <a href="{{ route('show_complain') }}" type="submit" class="btn btn-info">Back</a>
            </div>
        </form>
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>

  @endsection
