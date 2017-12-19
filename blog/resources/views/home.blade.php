@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 ">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
				<form action="search" method="post">
				<input type="hidden" name="_token" value="<?= csrf_token() ?>">
                    <div class="form-group">
						<label>User Name </label>
						<input type="text" name="t1" >&nbsp;
					<input type="submit" class="btn btn-primary" value="Search">
					</div>
					<div >
					
					</div>
					</form>
					<script type="text/javascript">
$(document).ready(function(){

  $(function(){
       $('#a1').click(function() {
            
			var id=$(this).val;
			
			$.ajax({
                url: 'user/delete/{id}',
                type: 'GET',
                data: { id: 1 },
                success: function(response)
                {
                    $('#something').html(response);
                }
            });
       });
    });    
});
</script>


			<div class="col-md-12 " class="something">
				<div class="panel panel-body" style="margin-top:20px">	
					<div class="reg1" style="overflow-y:scroll; height:250px">
						<table class="table table-hover">
							<tr align="center">
								<td>First Name</td>
								<td>Last Name</td>
								<td>User name</td>
								<td>Email</td>
								
								<td>Gender</td>
								<td>Status</td>
								<td>Conatact No</td>
								<td>D.O.B.</td>
								<td>Edit</td>
								<td>Delete</td>
							</tr>
								@foreach($alldata as $d)
							<tr align="center">
								<td>{{$d->fname}}</td>
								<td>{{$d->lname}}</td>
								<td>{{$d->uname}}</td>
								<td>{{$d->email}}</td>
								
								<td>{{$d->gen}}</td>
								<td>{{$d->status}}</td>
								<td>{{$d->cno}}</td>
								<td>{{$d->dob}}</td>
								<td><a href="user/edit/{{$d->id}}" class="text-success"><b>Edit</b></a></td>
								<!-- <td><a data-token="{{ csrf_token() }}" id="delete" data-id="{{$d->id}}" data-toggle="tooltip" title="Delete" href="user/delete/{{$d->id}}" role="button" class="text-danger"><b>Delete</b></a></td>-->
								<td><a href="user/delete/{{$d->id}}" id="a1"><b>Delete</b></a></td>
							</tr>
							
								@endforeach
						</table>
							
					</div>
				</div>
			</div>
		</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
