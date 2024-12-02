<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>@yield('title', 'Desarrollo de aplicaciones web - FilesUploader')</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Estilos generales */
        body {
            font-family: 'Arial', sans-serif;
            background: #f4f7fc;  /* Color de fondo suave */
            color: #333;  /* Color del texto */
            margin: 0;
            padding: 0;
        }

        /* Estilo del encabezado */
        header {
            background: linear-gradient(135deg, #0a6351, #1f5748);  
            color: white;
            padding: 40px 0;
            text-align: center;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);  
        }

        .titulo h1 {
            font-size: 3rem;
            font-weight: 700;
            text-transform: uppercase;  
            letter-spacing: 2px;  
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);  
           
        }



        .alert {
            font-size: 1.2rem;
            padding: 15px;
            margin-top: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);  
       
        }

        .alert-success {
            background-color: #28a745;
            color: white;
        }

        .alert-danger {
            background-color: #dc3545;
            color: white;
        }

        .alert-info {
            background-color: #17a2b8;
            color: white;
        }

        /* Estilo para el contenedor de la página */
        .container {
            max-width: 900px;
            margin: 0 auto;
            padding: 40px;
            background: white;
            border-radius: 8px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);  /* Sombra de caja para dar profundidad */
        }
    </style>
</head>
<body>
    <header>
        <h1 class="titulo" >@yield('titulo', 'Archivo-Box')</h1>
    </header>
    <div>
        @if(session('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif

        @if($errors->any())
            <div class="alert alert-danger">
                {{ $errors->first() }}
            </div>
        @endif

        @yield('content')
    </div>
</body>
</html>
