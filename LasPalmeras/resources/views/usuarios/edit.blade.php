	@extends('layouts.app2')
	@section('contenido')
	<form class="form-group" method="POST" action="/usuarios/{{$usuario->slug}}" enctype="multipart/form-data">
@method('PUT')
		@csrf
		<div class="form-group">
				<label for="">nombre</label>
				<input type="text" name="nombre" value="{{$usuario->nombre}}" class="form-control">
				<label for="">apellido</label>
				<input type="text" name="apellido" value="{{$usuario->apellido}}" class="form-control">
				<label for="">telefono</label>
				<input type="text" name="telefono" value="{{$usuario->telefono}}" class="form-control">
				<label for="">direccion</label>
				<input type="text" name="direccion" value="{{$usuario->direccion}}" class="form-control">
				<label for="">slug</label>
				<input type="text" name="slug" value="{{$usuario->slug}}" class="form-control">
				<label for="">foto</label>
				<input type="file" name="foto" value="{{$usuario->foto}}">
			</div>
			<button type="submit" class="btn btn-primary">actualizar</button>
	</form>


	@endsection
