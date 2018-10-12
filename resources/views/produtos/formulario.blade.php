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

<form action="/produtos/adiciona" method="post">
	
	<input type="hidden" 
  name="_token" value="{{{ csrf_token() }}}" />

	<div class="form-group">
		<label>Nome: </label>
		<input name="nome" class="form-control" value="{{ old('nome') }}"/>
	<div/>	
	<div class="form-group">
		<label>Valor: </label>
		<input name="valor" class="form-control" value="{{ old('valor') }}"/>
	<div/>	
	<div class="form-group">
		<label>Quantidade: </label>
		<input type="number" name="quantidade" class="form-control" value="{{ old('quantidade') }}"/>
	<div/>	
	<div class="form-group">
		<label>Tamanho: </label>
		<input name="tamanho" class="form-control" value="{{ old('tamanho') }}"/>
	<div/>	
	<div class="form-group">
		<label>Categoria</label>
            <select name="categoria_id" class="form-control">
                @foreach($categorias as $c)
                    <option value="{{$c->id}}">{{$c->nome}}</option>
                @endforeach
            </select>
	<div/>	
	<div class="form-group">
		<label>Descrição: </label>
		<textarea name="descricao" class="form-control" placeholder="Type description here..."></textarea>
	<div/>	
	<button class="btn btn-primary" type="submit">Adicionar</button>

@stop