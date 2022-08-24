@extends('layouts/app')

@section('content')

<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="alert alert-success text-center" role="alert">
			  <strong>ERROR 403</strong>This action is unauthorized.  <a href="{{url('cvs')}}">HOME</a>
			</div>
		</div>
	</div>
</div>

@endsection