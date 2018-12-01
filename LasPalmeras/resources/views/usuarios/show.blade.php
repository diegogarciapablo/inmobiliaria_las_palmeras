@extends ('layouts.app2')
@section('contenido')
@include('common.actualizacion')
			<img class="card-img-top rounded-circle mx-auto d-block" style="height: 200px; width:200px; background-color:#EFEFEF; margin: 20px;" src="/imagenes/{{$usuario->foto}}" alt="">

			<div class="card-body text-center">
				<h5 class="card-title text-center">{{$usuario->nombre}} {{$usuario->apellido}}</h5>


			<ul class="list-group list-group-flush">
				<li class="list-group-item">telefono: {{$usuario->telefono}}</li>
				<li class="list-group-item">direccion: {{$usuario->direccion}}</li>
			</ul>

			<a href="/usuarios/{{$usuario->slug}}/edit" class="btn btn-primary" >editar</a>
			{!!Form::open(['route'=>['usuarios.destroy',$usuario->slug], 'method'=>'DELETE'])!!}
			{!!Form::submit('eliminar',['class'=>'btn btn-danger'])!!}
			{!!Form::close()!!}

	</div>
@endsection