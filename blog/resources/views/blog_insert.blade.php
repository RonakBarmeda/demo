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
					</div>
					</div>
					</div>
					</div>
					</div>