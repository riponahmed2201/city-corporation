

@extends('master')

@section('breadcrumb-title', 'Add Complain Information')

@section('content')

<section class="content">
    <div class="container-fluid">
      <!-- SELECT2 EXAMPLE -->
      <div class="card card-success card-outline">
        <div class="card-header">
          <h3 class="card-title">Add Complain Information</h3>
        </div>

         @include('message')
        <!-- /.card-header -->
        <form action="{{ route('store_complain') }}" method="POST">
            @csrf
            <div class="card-body">
                <div class="row">

                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Complain Category</label>
                          <select name="complain_category" id="" class="form-control">
                            <option value="">--select--</option>
                            <option value=""></option>
                          </select>
                        @if($errors->has('complain_category'))
                            <strong class="text-danger">{{ $errors->first('complain_category') }}</strong>
                        @endif
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="name" class="form-control" placeholder="">
                        @if($errors->has('name'))
                            <strong class="text-danger">{{ $errors->first('name') }}</strong>
                        @endif
                      </div>
                    </div>
                  <!-- /.col -->
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>NID</label>
                            <input type="number" class="form-control" name="nid" placeholder="">
                            @if($errors->has('nid'))
                                <strong class="text-danger">{{ $errors->first('nid') }}</strong>
                            @endif                      
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Phone</label>
                            <input type="text" name="phone" class="form-control" placeholder="">
                            @if($errors->has('phone'))
                                <strong class="text-danger">{{ $errors->first('phone') }}</strong>
                            @endif
                        </div>
                    </div>

                      <div class="col-md-6">
                        <div class="form-group">
                            <label>Picture1</label>
                            <input type="file" name="picture1" class="form-control">
                            @if($errors->has('picture1'))
                              <strong class="text-danger">{{ $errors->first('picture1') }}</strong>
                            @endif
                        </div>
                    </div>

                      <div class="col-md-6">
                        <div class="form-group">
                            <label>Picture2</label>
                            <input type="file" name="picture2" class="form-control">
                            @if($errors->has('picture2'))
                              <strong class="text-danger">{{ $errors->first('picture2') }}</strong>
                            @endif
                        </div>
                    </div>

                    <div class="col-md-6">
                      <div class="form-group">
                          <label>Picture3</label>
                          <input type="file" name="picture3" class="form-control">
                          @if($errors->has('picture3'))
                            <strong class="text-danger">{{ $errors->first('picture3') }}</strong>
                          @endif
                      </div>
                  </div>

                    <div class="col-md-6">
                      <div class="form-group">
                          <label>Picture4</label>
                          <input type="file" name="picture4" class="form-control">
                          @if($errors->has('picture4'))
                            <strong class="text-danger">{{ $errors->first('picture4') }}</strong>
                          @endif
                      </div>
                  </div>

                  <div class="col-md-6">
                    <div class="form-group">
                        <label>Reviewer</label>
                        <input type="text" name="reviewer" class="form-control" placeholder="">
                        @if($errors->has('reviewer'))
                          <strong class="text-danger">{{ $errors->first('reviewer') }}</strong>
                        @endif
                    </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                      <label>Resulation</label>
                      <input type="text" class="form-control" name="resulation" id="Resulation">
                      @if($errors->has('resulation'))
                        <strong class="text-danger">{{ $errors->first('resulation') }}</strong>
                      @endif
                  </div>
              </div>

              <div class="col-md-12">
                <div class="form-group">
                    <label>Complain Details</label>
                    <textarea name="complain_details" class="form-control" id="" cols="3" rows="3"></textarea>
                    @if($errors->has('complain_details'))
                      <strong class="text-danger">{{ $errors->first('complain_details') }}</strong>
                    @endif
                </div>
            </div>
                  <!-- /.col -->
            </div>
                <!-- /.row -->
          </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-success ">Submit</button>
                <a href="{{ route('show_complain') }}" type="submit" class="btn btn-info">Back</a>
            </div>
        </form>
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>

  @endsection

  @section('custom_js')

<script>
    $(document).ready(function() {
        $(function() { 
     $( "#launching_date" ).datepicker();
     $( "#hand_over_date" ).datepicker();
  });
    });
</script>
    
@endsection