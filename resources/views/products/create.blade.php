@extends('layouts.appMain')

@section('content')

<h1>Crear Producto</h1>
<small>Completa el formulario para poder crear un producto.</small>

<form action="" class="mt-3 w-50">
<div class="mb-3">
    <label for="name" class="form-label">Nombre del Producto</label>
    <input type="text" placeholder="Nombre del Producto" class="form-control" id="name" aria-describedby="emailHelp">
  </div>
<div class="mb-3">
    <label for="name" class="form-label">Descripción del Producto</label>
    <input type="text" placeholder="Descripción del Producto" class="form-control" id="name" aria-describedby="emailHelp">
  </div>
<div class="mb-3">
    <label for="name" class="form-label">Marca del Producto</label>
    <input type="text" placeholder="Marca del Producto" class="form-control" id="name" aria-describedby="emailHelp">
  </div>
<div class="mb-3">
    <label for="name" class="form-label">Costo del Producto</label>
    <input type="text" placeholder="Costo del Producto" class="form-control" id="name" aria-describedby="emailHelp">
  </div>
<div class="mb-3">
    <label for="name" class="form-label">Precio de Venta del Producto</label>
    <input type="text" placeholder="Precio de Venta del Producto" class="form-control" id="name" aria-describedby="emailHelp">
</div>
<div class="mb-3">
    <label for="name" class="form-label">Proveedor del Producto</label>
    <input type="text" placeholder="Proveedor del Producto" class="form-control" id="name" aria-describedby="emailHelp">
</div>

<button class="btn btn-primary">Crear Producto</button>
</form>

@endsection