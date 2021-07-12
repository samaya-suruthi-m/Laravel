<!DOCTYPE html>
<html>
<head>
	@include('curd::includes.header')
</head>
<body>
	<!--show flash messages -->
	<div class='container'>
		@if(session()->has('msg'))
		<div class='row'>
			<div class='alert alert-success'>
				<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
				<strong>Notification</strong>
				{{session()->get('msg')}}
			</div>
		</div>
		@endif
	</div>
	<div class='containe-fluid'>
		<div id='main' class='row'>
			@yield('home')
		</div>
		@include('curd::includes.footer')
	</div>
</body>
</html>