@extends('admin.layout')

@section('content')
<div class="container">
	<h2>Category</h2>
	<div class="well" style="width: 220px"> 
	<form method="post" action="/insertCategory">
		@csrf

			<div class="form-group">
				<input type="text" name="first_name" class="form-control" placeholder="Enter First Name"/>
				<input type="submit" class="btn btn-primary"/>
			</div>
		</form>
			
	
	</div>
	
</div>
		
	
@endsection