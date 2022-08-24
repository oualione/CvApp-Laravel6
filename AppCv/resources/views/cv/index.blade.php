@extends('layouts.app')


@section('content')

<section class="title">
	<div class="container">
		<div class="col-md-12 text-center">
			<h3>DASHBOARD</h3>
		</div>
	</div>
</section>
</script>
@include('partials.flash')

<section class="add-cv">
	<div class="container">
		<div class="float-right">
			<a href="{{url('cvs/create')}}" class="btn btn-success">ADD NEW CV</a>
		</div><br>
			
	</div>
	<br>
</section>

<section class="table-cvs">
	
	<div class="container">
		<div class="row">
		<!-- <table id="example" class="table table-striped table-bordered" style="width:100%">
	        <thead>
	        	
	            <tr>
	                <th>TITLE</th>
	                <th>PRESENTATION</th>
	                <th>CREATED_AT</th>
	                <th>ACTION</th>
	            </tr>
	        </thead>
	        <tbody>
	        	@foreach($cvs as $cv)
	            <tr>
	                <td>{{$cv->title}}</td>
	                <td>{{$cv->presentation}} <br> By {{ $cv->user->name}}</td>
	                <td>{{$cv->created_at}}</td>
	                <td>
	                	<form action="{{url('cvs/'.$cv->id)}}" method="POST">
                        @csrf
                        <input type="hidden" name="_method" value="DELETE">
	                	<button class="btn btn-primary"><i class="fas fa-plus-circle"></i></button>
	                	<a class="btn btn-warning" href="{{url('cvs/'.$cv->id.'/edit')}}"><i class="fas fa-edit"></i></a>
	                	<button  class="btn btn-danger waves-effect"><i class="fas fa-trash"></i></button>
	                </form>
	                </td>
	            </tr>
	           @endforeach
	        </tbody>
	        <tfoot>
	            <tr>
	                 <th>TITLE</th>
	                <th>PRESENTATION</th>
	                <th>CREATED_AT</th>
	                <th>ACTION</th>
	            </tr>
	        </tfoot>
    </table> -->
    	<!-- <div class="row">
    		@foreach($cvs as $cv)
		    <div class="col-sm-6 col-md-4">
		    	<div class="card" style="width: 18rem;">
				  <img src="{{asset('storage/'.$cv->photo)}}" class="card-img-top" alt="..." style="height: 150px;width: 100%;">
				  <div class="card-body">
				    <h5 class="card-title">{{$cv->title}}</h5>
				    <p class="card-text">{{$cv->presentation}}</p>
				    <form action="{{url('cvs/'.$cv->id)}}" method="POST">
                        @csrf
                        <input type="hidden" name="_method" value="DELETE">
	                	<button class="btn btn-primary"><i class="fas fa-plus-circle"></i></button>
	                	<a class="btn btn-warning" href="{{url('cvs/'.$cv->id.'/edit')}}"><i class="fas fa-edit"></i></a>
	                	<button  class="btn btn-danger waves-effect"><i class="fas fa-trash"></i></button>
	                </form>
				  </div>
				</div>
		    </div>
		    @endforeach
		</div> --> 
		@foreach($cvs as $cv)

		<div class="col-xs-12 col-sm-6 col-md-4">
			<div class="card" style="width: 18rem;">
			  <img class="card-img-top" src="{{asset('storage/'.$cv->photo)}}" alt="Card image cap" style="height: 150px;width: 100%;">
			  	<div class="card-body">
				    <h5 class="card-title">{{$cv->title}}</h5>
				    <p class="card-text">{{$cv->presentation}}</p>
				    <form action="{{url('cvs/'.$cv->id)}}" method="POST">
		                @csrf
		                <input type="hidden" name="_method" value="DELETE">
		            	<a class="btn btn-primary" href="{{url('cvs/'.$cv->id)}}"><i class="fas fa-plus-circle"></i></a>
		            	<a class="btn btn-warning" href="{{url('cvs/'.$cv->id.'/edit')}}"><i class="fas fa-edit"></i></a>
		            	@can('delete', $cv)
		            	<input type="submit" class="btn btn-danger" value="delete">
		            	@endcan
		            </form>
				</div>
			</div>	
		
		</div>
	@endforeach
		  </div> 
	</div>
</section>
@endsection()