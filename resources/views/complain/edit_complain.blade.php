
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
                <div class="row">

                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Complain Category</label>
                          <select name="complain_category" id="" class="form-control" readonly>
                            <option {{ $complain->complain_category ? 'selected' : '' }} value=""></option>
                          </select>
                        @if($errors->has('complain_category'))
                            <strong class="text-danger">{{ $errors->first('complain_category') }}</strong>
                        @endif
                      </div>
                    </div>
                  <!-- /.col -->
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>NID</label>
                            <input type="number" readonly class="form-control" name="nid" value="{{ $complain->nid }}">
                            @if($errors->has('nid'))
                                <strong class="text-danger">{{ $errors->first('nid') }}</strong>
                            @endif                      
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Phone</label>
                            <input type="text" name="phone" readonly class="form-control" value="{{ $complain->phone }}">
                            @if($errors->has('phone'))
                                <strong class="text-danger">{{ $errors->first('phone') }}</strong>
                            @endif
                        </div>
                    </div>

                  <div class="col-md-6">
                    <div class="form-group">
                        <label>Reviewer</label>
                        <input type="text" name="reviewer" readonly class="form-control" value="{{ $complain->reviewer }}">
                        @if($errors->has('reviewer'))
                          <strong class="text-danger">{{ $errors->first('reviewer') }}</strong>
                        @endif
                    </div>
                </div>

              <div class="col-md-6">
                <div class="form-group">
                    <label>Complain Details</label>
                    <textarea name="complain_details" readonly class="form-control" id="" cols="3" rows="5"> {{ $complain->complain_details }} </textarea>
                    @if($errors->has('complain_details'))
                      <strong class="text-danger">{{ $errors->first('complain_details') }}</strong>
                    @endif
                </div>
            </div>

                <div class="col-md-6">
                  <div class="form-group">
                      <label>Resulation</label>
                        <textarea id="my-textarea" class="form-control" name="" rows="5">{{ $complain->resulation }}</textarea>
                      @if($errors->has('resulation'))
                        <strong class="text-danger">{{ $errors->first('resulation') }}</strong>
                      @endif
                  </div>
              </div>


                <div class="col-md-6">
                  <div class="form-group">
                      <label>Status</label>
                          <select name="status" id="" class="form-control">
                            <option {{$complain->status == 'open' ? 'selected' : '' }} value="open">open</option>
                             <option {{$complain->status == 'close' ? 'selected' : '' }} value="close">close</option>
                          </select>
                      @if($errors->has('status'))
                        <strong class="text-danger">{{ $errors->first('status') }}</strong>
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