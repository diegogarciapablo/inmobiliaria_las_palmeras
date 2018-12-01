@extends ('layouts.app2')
@section('contenido')
<div class="row">
@include('common.actualizacion')
	@foreach($personas as $usuario)

	<div class="col-sm">
		<div class="card" style="width: 18rem; margin-top:50px " >
			<img class="card-img-top rounded-circle mx-auto d-block"style="height: 120px; width:120px; background-color:#EFEFEF; margin: 20px;" src="imagenes/{{$usuario->foto}}" alt="" sr>
			<div class="card-body">
				<h5 class="card-title">{{$usuario->nombre}} {{$usuario->apellido}}</h5>
			</div>
			<ul class="list-group list-group-flush">
				<li class="list-group-item">telefono: {{$usuario->telefono}}</li>
				<li class="list-group-item">direccion: {{$usuario->direccion}}</li>

			</ul>
			<div class="card-body">
				<a href="/usuarios/{{$usuario->slug}}" class="btn btn-primary">ver mas</a>
			</div>


		</div>
	</div>


	@endforeach
</div>
@endsection