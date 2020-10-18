
@extends('master')

@section('breadcrumb-title', 'All Complain Information')

@section('content')

<section class="content">

  <div class="card card-success card-outline">
    <div class="card-header">
        <h3 class="card-title">All Complain Information</h3>
        @include('message')

    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="all-complain" class="table table-bordered table-striped">
        <thead>
            <tr>
              <th>SL NO</th>
              <th>Complain Category</th>
              <th>Name</th>
              <th>Phone</th>
              <th>Reviewer</th>
              <th>Complain Details</th>
              <th>Resulation</th>
              <th>Status</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
              @foreach ($complains as $complain)
              <tr>
                  <td>{{ $loop->iteration }}</td>
                  <td>{{ $complain->complain_category }}</td>
                  <td>{{ $complain->name }}</td>
                  <td>{{ $complain->phone }}</td>
                  <td>{{ $complain->reviewer }}</td>
                  <td>{{ $complain->complain_details }}</td>
                  <td>{{ $complain->resulation }}</td>
                  <td>{{ $complain->status == '1' ? 'Open' : 'Close' }}</td>
                  <td>
                    <div style="width: 150px; display: block;">
                      <a href="{{ route('edit_complain',$complain->id) }}" class="btn btn-info btn-xs" title="Edit"><i class="far fa-edit"></i></a>
                      <a href="{{ route('delete_complain',$complain->id) }}" class="btn btn-danger btn-xs" title="Delete"><i class="far fa-trash-alt"></i></a>
                    </div>
                  </td>
              </tr>
              @endforeach
          </tbody>
          
      </table>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->

</section>
@endsection

@section('custom_js')
<script>
    $(document).ready(function() {
    $('#all-complain').DataTable( {
        scrollY:        '50vh',
        // scrollCollapse: true,
        // "responsive": true,
      "autoWidth": false,
    } );
} );

//delete 
function deleteComplain(id) {
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then(function(result) {
                if (result.value) {
                    //Delete by ajax from list-datatable
                    var url="{{url('complain/delete-complain')}}";
                    $.ajax({
                        //config part
                        url:url+"/"+id,
                        type:"GET",
                        dataType:"json",
                        //config part
                        beforeSend:function () {
                            Swal.fire({
                                title: 'Deleting The Complain data.....',
                                html:"<i class='fa fa-spinner fa-spin' style='font-size: 24px;'></i>",
                                confirmButtonColor: '#3085d6',
                                allowOutSideClick:false,
                                showCancelButton:false,
                                showConfirmButton:false
                            });
                        },
                        success:function (response) {
                            Swal.close();
                            if(response==="success") {
                                Swal.fire({
                                    title:'success',
                                    text: 'You Have Successfully Deleted The Complain',
                                    type:'success',
                                    confirmButtonText: 'OK'
                                }).then(function(result){
                                    if (result.value) {
                                        window.location.reload();
                                    }
                                });
                            }
                            console.log(response);
                        },
                        error:function (error) {
                            Swal.fire({
                                title: 'Error',
                                text:'Something Went Wrong',
                                type:'error',
                                showConfirmButton: true
                            });
                            console.log(error);
                        }
                    })
                }
            });
        }
</script>
@endsection