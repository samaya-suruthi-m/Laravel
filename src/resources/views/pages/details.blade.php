@extends('curd::layout.default')
@section('home')
<center>
	<div class='p-3 mb-2' style='padding:50px 200px'>
		<h2>Laravel Package</h2>
		<h3>Customer Details</h3>
		<a href='form' style='float:right'>
			<button class='btn btn-primary'>Add Customer</button>
		</a><br><br>
		<table class='table table-bordered'>
			<tr>
				<th>Id</th>
				<th>Name</th>
				<th>Email Id</th>
				<th>Phone Number</th>
				<th>Action</th>
			</tr>
			@foreach($customer as $customer)
			<tr>
				<td>{{$customer['id']}}</td>
				<td>{{$customer['name']}}</td>
				<td>{{$customer['email']}}</td>
				<td>{{$customer['phone']}}</td>
				<td>
					<a href='update?id={{$customer["id"]}}' class='btn btn-warning'><i class='glyphicon glyphicon-edit'></i></a>&nbsp;&nbsp;
					<a href='delete?id={{$customer["id"]}}' class='btn btn-danger'><i class='glyphicon glyphicon-trash'></i></a>
				</td>
			</tr>
			@endforeach
		</table>
	</div>
</center>
@endsection