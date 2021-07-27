@extends('curd::layout.default')
@section('home')
<div style='margin:50px 400px'>
	<div class='panel panel-primary'>
		<div class='panel-heading'><h2>Laravel Package</h2></div>
		<div class='panel-body'>
			{{Form::open(['url' => 'updateData', 'method' => 'post', 'class' => 'form-group'])}}
				{{Form::hidden('id', $customer['id'])}}
				{{Form::label('name', 'Name')}}
				{{Form::text('name', $customer['name'], ['class' => 'form-control'])}}@error('name')<span class='alert alert-danger'>{{$message}}</span>@enderror<br><br>
				{{Form::label('email', 'Email-Id')}}
				{{Form::email('email', $customer['email'], ['class' => 'form-control'])}}@error('email')<span class='alert alert-danger'>{{$message}}</span>@enderror<br><br>
				{{Form::label('phone', 'Phone Number')}}
				{{Form::number('phone', $customer['phone'], ['class' => 'form-control'])}}@error('phone')<span class='alert alert-danger'>{{$message}}</span>@enderror<br><br>
				{{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
			{{Form::close()}}
			<a href='index'><button class='btn btn-primary'>Cancel</button></a>
		</div>
	</div>
</div>
@endsection