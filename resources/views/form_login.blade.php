@extends('layout.main')

@section('content')

@if(count($errors) > 0)
	<div class="alert alert-danger">
		<ul>	
			@foreach($errors->all() as $error)
				<li>{{$error}}</li>
			@endforeach
		</ul>
	</div>
@endif
<h1>Novo produto</h1>

<form action="/login" method="post">
	
	<input type="hidden" 
  name="_token" value="{{{ csrf_token() }}}" />

	<div class="form-group">
		<label>Email:  </label>
		<input name="email" class="form-control" "/>
	<div/>	
	<div class="form-group">
		<label>Senha: </label>
		<input type="password" name="password" class="form-control" "/>
	<div/>	
	<button class="btn btn-primary" type="submit">Log in</button>

@stop