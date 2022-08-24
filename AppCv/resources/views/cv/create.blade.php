@extends('layouts.app')



@section('content')

<section>
	<div class="row">
		<div class="col-md-12 text-center">
			<h3>DASHBOARD</h3>
		</div>
	</div>
</section>
<section class="form-section">
	<div class="container">
		<div class="col-md-12">
			<form method="POST" action="{{url('cvs')}}" enctype="multipart/form-data">
				@csrf()
				  <div class="form-group">
				    <label for="exampleFormControlInput1">Title</label>
				    <input type="text" class="form-control @error('title') is-invalid @enderror" id="exampleFormControlInput1" value="{{old('title')}}" name="title">
				    @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                    </div>

				  <div class="form-group">
				    <label for="exampleFormControlTextarea1">Presentation</label>
				    <textarea class="form-control @error('presentation') is-invalid @enderror" id="exampleFormControlTextarea1" rows="3"  name="presentation">{{old('presentation')}}</textarea>
				   @error('presentation')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                    </div>

                    <div class="form-group">
					    <label for="exampleFormControlFile1">Photo</label>
					    <input type="file" class="form-control-file @error('photo') is-invalid @enderror" name="photo" id="exampleFormControlFile1">
					    @error('photo')
                                   <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                   	   @enderror
					 </div>
					   
				 
					  <div class="form-group">
					    <input type="submit" class="btn btn-success"  value="save">
					  </div>
			</form>
		</div>	
	</div>
</section>

@endsection
