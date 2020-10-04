<div class="col-md-8 offset-2 mt-2">
    @if ($message = Session::get('success'))
      <div class="alert alert-success alert-block text-center">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong class="text-center">{{ $message }}</strong>
      </div>
    @endif

    @if ($message = Session::get('danger'))
      <div class="alert alert-danger alert-block text-center">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>{{ $message }}</strong>
      </div>
    @endif
</div>
