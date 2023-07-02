<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" 
    href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <title>Home</title>
</head>

<body class="bg-secondary">
    
    <div class="container-fluid px-0">
        <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
            <div class="container-fluid">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="/Publico">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/Cuentas">Gestionar cuentas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/banearDesbanear">Banear/Desbanear fotos</a>
                        </li>
                        <li class = "nav-item">
                            <a href="/login" class="nav-link">Cerrar Sesión</a>
                        </li>
                        
                    </ul>
            </div>
        </nav>
    </div>
	<h3 class="text-center fst-italic fs-1 py-5">Gestión de cuentas</h3>
    <div class="container text-center" >
        <div class="row">
        
            <div class="card">
                <div class="card-header center-text">
                    <H3>Artistas</H3>
                </div>
                <table class="table table-bordered col-auto">
                    <thead>
                        <tr>
                            <th>Usuario</th>
                            <th>Contraseña</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Tipo de cuenta</th>
                            <th colspan="col-auto" >Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($cuentas as $cuenta )
          
                        <tr>
                            <td>{{$cuenta->user}}</td>
                            <td>{{$cuenta->password}}</td>
                            <td>{{$cuenta->nombre}}</td>
                            <td>{{$cuenta->apellido}}</td>
                            <td>{{$cuenta->perfil_id}}</td>
                            <td>
                                <div>
                                    <a href=""></a>
                                    <form method="POST" action="{{route('cuentas.destroy', $cuenta->id)}}">
                                        @csrf
                                        @method('DELETE')
                                        <input type="submit" onclick="return confirm('¿Quieres borrar a {{$cuenta->nombre}}?')" class="btn btn-danger" value="Borrar">
                                    </form>
                                    <br>
                                    <a href="{{route('cuentas.edit', $cuenta)}}" type="submit" onclick="return confirm('¿Quieres editar a {{$cuenta->nombre}}?')" class="btn btn-warning" value=Editar>Editar</a>
                            </td>
                        </tr>
                        @endforeach
                      </tr>
                    </tbody>
                </table>
            </div>
            
        </div>
    </div>
    <br>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
</body>

</html>