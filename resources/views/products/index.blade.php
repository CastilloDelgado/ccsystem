@extends('layouts.appMain')

@section('content')
<h1>Lista de Productos</h1>
<small>Esta es la lista de todos los productos cargados en sistema.</small>
<!-- On tables -->

<table class="table mt-3">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre</th>
      <th scope="col">Descripción</th>
      <th scope="col">Costo</th>
      <th scope="col">Precio de Venta</th>
      <th scope="col">Inventario</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($products as $product)
    <tr>
      <th scope="row">{{$product->id}}</th>
      <td> {{$product->name}} </td>
      <td> {{$product->description}} </td>
      <td> {{$product->cost}} </td>
      <td> {{$product->price}} </td>
      <td> {{$product->inventory}} {{$product->uom}} </td>
      <td>Activo</td>
    </tr>
    @endforeach
  </tbody>
</table>

@endsection