	@extends('layouts.app2')
	@section('contenido')
	@if($errors->any())
	@include('common.errores')
	@endif
	{!! Form::open(['route' => 'usuarios.store','method'=>'POST','files'=>true]) !!}
    	@csrf
		<div class="form-group">
				<label for="">nombre</label>
				<input type="text" name="nombre" class="form-control">
				<label for="">apellido</label>
				<input type="text" name="apellido" class="form-control">
				<label for="">telefono</label>
				<input type="text" name="telefono" class="form-control">
				<label for="">direccion</label>
				<input type="text" name="direccion" class="form-control">
				<label for="">slug</label>
				<input type="text" name="slug" class="form-control">
				<label for="">foto</label>
				<input type="file" name="foto">
			</div>
			<button type="submit" class="btn btn-primary">enviar</button>
	{!! Form::close() !!}

	@endsection
