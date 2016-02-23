@extends('layouts.app')

@section('header')

<link rel="stylesheet" href="css/custom.css" />

@stop

@section('content')

<div class="container">
	<h2>Catálogo</h2>

	<input type="text" name="s" class="form-control center-mid" placeholder="Buscar">

	
	<div class="proyecto">
		
		@foreach($products as $product)
		<div class="producto">
			<div class="producto-imagen">
				<img src="http://auladigital.cl/smstore2/imagenes/miniaturas_carro/{{$product->portada}}" alt="">

				<div class="producto-precio">
					<a href="" ng-click="addToCart({{$product->id}})">Agregar al carro</a>
				</div>
			</div>

			<div class="producto-datos">
				<div class="titulo-producto">
					{{ $product->asignatura . ' ' . $product->nivel}}
				</div>

				<div class="producto-precio">
					{{$product->precio}}
				</div>
			</div>
		</div>
		@endforeach
	</div>

</div>

@stop