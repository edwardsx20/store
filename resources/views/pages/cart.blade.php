@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Carro de compras</h2>

    @if(isset($cartproducts) && $cartproducts.length > 0)
    <div class="cart-products">
        <table class="table carro-tabla">
            <tr>
                <th>Portada</th>
                <th>Descripción</th>
                <th>Caducidad</th>
                <th>Cantidad</th>
                <th>Precio</th>
            </tr>

            @foreach($cartproducts as $product)
            <tr>
                <td><img src="http://auladigital.cl/smstore2/imagenes/miniaturas_carro/" alt=""></td>
                <td>Proyecto</td>
                <td>
                    <strong>01-03-2017</strong>
                </td>
                <td>
                    <input type="number" class="form-control">
                </td>
                <td>PRECIO !</td>
            </tr>
            @endforeach

        </table> 
        <div class="carro-total"><strong>TOTAL: </strong></div>
    </div>
</div>

@else

<div class="">

No se encontraron productos. 

</div>

@endif

@stop