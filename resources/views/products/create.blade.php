@extends('layouts.appMain')

@section('content')

<h1>Crear Producto</h1>
<small>Completa el formulario para poder crear un producto.</small>
<form action="/products" method="post" class="mt-3">
  @csrf
  <fieldset>

    <div class="container-fluid p-0">
      <div class="row">
        <div class="col-6">
          <div class="mb-3">
            <label for="code" class="form-label">Código del Producto</label>
            <input type="number" placeholder="Código del Producto" class="form-control" id="code" name="code">
          </div>
        </div>
        <div class="col-6">
          <div class="mb-3">
            <label for="name" class="form-label">Nombre del Producto</label>
            <input type="text" placeholder="Nombre del Producto" class="form-control" id="name" name="name">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-6">
          <div class="mb-3">
            <label for="description" class="form-label">Descripción del Producto</label>
            <input type="text" placeholder="Descripción del Producto" class="form-control" id="description" name="description">
          </div>
        </div>
        <div class="col-6">
          <div class="mb-3">
            <label for="brand" class="form-label">Marca del Producto</label>
            <input type="text" placeholder="Marca del Producto" class="form-control" id="brand" name="brand">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-6">
          <div class="mb-3">
            <label for="family" class="form-label">Familia del Producto</label>
            <input type="text" placeholder="Familia del Producto" class="form-control" id="family" name="family">
          </div>
        </div>
        <div class="col-6">
          <div class="mb-3">
            <label for="cost" class="form-label">Costo del Producto</label>
            <input type="text" placeholder="Costo del Producto" class="form-control" id="cost" name="cost">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-6">
          <div class="mb-3">
            <label for="price" class="form-label">Precio de Venta del Producto</label>
            <input type="text" placeholder="Precio de Venta del Producto" class="form-control" id="price" name="price">
          </div>
        </div>
        <div class="col-6">
          <div class="mb-3">
            <label for="supplier" class="form-label">Proveedor del Producto</label>
            <input type="text" placeholder="Proveedor del Producto" class="form-control" id="supplier" name="supplier">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-6">
          <div class="mb-3">
            <label for="uom" class="form-label">Unidad de Medida</label>
            <input type="text" placeholder="Unidad de Medida" class="form-control" id="uom" name="uom">
          </div>
        </div>
        <div class="col-6">
          <div class="mb-3">
            <label for="inventory" class="form-label">Inventario</label>
            <input type="text" placeholder="Inventario del Producto" class="form-control" id="inventory" name="inventory">
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <div class="mb-3">
          <label for="inventory" class="form-label">Impustos</label>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
              IVA 16%
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
              IEPS 8%
            </label>
          </div>
        </div>
      </div>
    </div>
    <button class="btn btn-primary">Crear Producto</button>
  </fieldset>
</form>

@endsection