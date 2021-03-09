@extends('layouts.appMain')

@section('content')

<h1>Crear Venta</h1>

<table class="table">
    <thead>
        <tr>
            <th scope="col">Producto</th>
            <th scope="col">Cantidad</th>
            <th scope="col">Impuestos</th>
            <th scope="col">Total</th>
            <th scope="col">Acción</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th scope="row">
                <select class="form-select" aria-label="Default select example">
                    <option selected>Open this select menu</option>
                    @foreach($products as $product)
                    <option value=""> {{$product->name}} </option>
                    @endforeach
                </select>
            </th>
            <td>
                <input type="number" class="form-control" id="quantity" name="quantity" value="10">
            </td>
            <td>{{ $quantity }}</td>
            <td>@mdo</td>
            <td><button type="button" class="btn btn-success">Agregar</button></td>
        </tr>
    </tbody>
</table>

@endsection