<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link rel="apple-touch-icon" href="/docs/5.0/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="/docs/5.0/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="/docs/5.0/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
    <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon.ico">
    <meta name="theme-color" content="#7952b3">
</head>


<body>
    <div class="container-fluid h-100">
        <div class="row h-100">
            <div class="col-2 p-4 side-bar">
                <div class="row w-100 justify-content-md-center m-0">
                    <img class="mb-4 col-11" src={{ url('/assets/images/logo.png') }} alt="">
                </div>
                <h3>Productos</h3>
                <ul>
                    <li><a href="/products/create">Crear Producto</a></li>
                    <li><a href="/products">Listar Productos</a></li>
                </ul>
                <h3>Ventas</h3>
                <ul>
                    <li><a href="/sales/create">Crear Venta</a></li>
                    <li><a href="/sales">Listar Ventas</a></li>
                </ul>
                <h3>Compras</h3>
                <ul>
                    <li><a href="/">Crear Compra</a></li>
                    <li><a href="/">Listar Compras</a></li>
                </ul>
                <h3>Movimientos</h3>
                <ul>
                    <li><a href="/">Crear Ingreso</a></li>
                    <li><a href="/">Crear Egreso</a></li>
                    <li><a href="/">Listar Movimientos</a></li>
                </ul>
                <h3>Cuentas</h3>
                <ul>
                    <li><a href="/">Crear Cuentas</a></li>
                    <li><a href="/">Listar Cuentas</a></li>
                </ul>
                <h3>Reportes</h3>
                <ul>
                    <li><a href="/reports/products">Productos</a></li>
                    <li><a href="/">Ventas </a></li>
                    <li><a href="/">Compras</a></li>
                    <li><a href="/">Movimientos</a></li>
                    <li><a href="/">Usuarios</a></li>
                </ul>
            </div>
            <div class="col-10 p-4 app-module">
                @yield('content')
            </div>
        </div>
    </div>
</body>

</html>