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
    <tr>
      <th scope="row">1</th>
      <td>Libro Matematicas 1</td>
      <td>Libro para curso 1 de matematicas</td>
      <td>$100.00</td>
      <td>$350.00</td>
      <td>60 piezas</td>
      <td>Activo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Libro Español 1</td>
      <td>Libro para curso 1 de español</td>
      <td>$100.00</td>
      <td>$350.00</td>
      <td>60 piezas</td>
      <td>Activo</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Libro Historia 1</td>
      <td>Libro para curso 1 de histaria</td>
      <td>$100.00</td>
      <td>$350.00</td>
      <td>60 piezas</td>
      <td>Activo</td>
    </tr>
    <tr>
      <th scope="row">4</th>
      <td>Libro Matematicas 2</td>
      <td>Libro para curso 2 de matematicas</td>
      <td>$100.00</td>
      <td>$350.00</td>
      <td>60 piezas</td>
      <td>Activo</td>
    </tr>
    <tr>
      <th scope="row">5</th>
      <td>Libro Literarua 1</td>
      <td>Libro para curso 1 de literatura</td>
      <td>$100.00</td>
      <td>$350.00</td>
      <td>60 piezas</td>
      <td>Activo</td>
    </tr>
    <tr>
      <th scope="row">6</th>
      <td>Libro Ciencias Naturales</td>
      <td>Librfeo para curso 1 de ciencias naturales</td>
      <td>$100.00</td>
      <td>$350.00</td>
      <td>60 piezas</td>
      <td>Activo</td>
    </tr>
    <tr>
      <th scope="row">7</th>
      <td>Libro Computación 1</td>
      <td>Libro para curso 1 de computación</td>
      <td>$100.00</td>
      <td>$350.00</td>
      <td>60 piezas</td>
      <td>Activo</td>
    </tr>
    <tr>
      <th scope="row">8</th>
      <td>Libro Matematicas 3</td>
      <td>Libro para curso 3 de matematicas</td>
      <td>$100.00</td>
      <td>$350.00</td>
      <td>60 piezas</td>
      <td>Activo</td>
    </tr>
    
  </tbody>
</table>

@endsection