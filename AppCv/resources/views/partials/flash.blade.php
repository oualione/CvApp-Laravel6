<section class="alert">
       <div class="container">
        <script type="text/javascript">
            setTimeout(function(){
                  $('#remove_msg').remove();
                }, 3000);
    </script>
		@if(session()->has('save'))
		<div class="col-md-12" id="remove_msg">
			<div class="alert alert-success text-center" role="alert">
			  <strong>Well done!</strong> {{session()->get('save')}}
			</div>
		</div>
		@endif
		@if(session()->has('update'))
		<div class="col-md-12" id="remove_msg">
			<div class="alert alert-success text-center" role="alert">
			  <strong>Well done!</strong> {{session()->get('update')}}
			</div>
		</div>
		@endif
		@if(session()->has('delete'))
		<div class="col-md-12" id="remove_msg">
			<div class="alert alert-success text-center" role="alert">
			  <strong>Well done!</strong> {{session()->get('delete')}}
			</div>
		</div>
		@endif
	</div>
</section>