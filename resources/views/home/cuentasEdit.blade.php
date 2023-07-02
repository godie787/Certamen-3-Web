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
                            <a class="nav-link" href="">Inicio</a>
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
    <br>
    <div class="container">
      <div class="row">
        <div class="col">
          <form method= "post" action="{{route('cuentas.update', $cuenta->id)}}">
            @csrf
            @method('put')
            <div class="bg-white p-5 rounded-5 text-secondary shadow" style="width: 25rem">
                
                <div class="text-center fs-1 fw-bold">Editar datos</div>
                <div class="input-group mt-4">
                  <input class="form-control bg-light" type="" id="user" name="user"  placeholder="user" value = "{{$cuenta->user}}" required>
                </div>
                <div class="input-group mt-4">
                  <input class="form-control bg-light" type="password" id="password" name="password" placeholder="Contraseña" value = "{{$cuenta->password}}"required>
                </div>
                <div class="input-group mt-4">
                  <input class="form-control bg-light" type="" id="nombre" name="nombre" placeholder="Nombre" value = "{{$cuenta->nombre}}"required>
                </div>
                <div class="input-group mt-4">
                  <input class="form-control bg-light" type="" id="apellido" name="apellido" placeholder="Apellido" value = "{{$cuenta->apellido}}"required>
                </div>
                <div class="input-group mt-4">
                  <input class="form-control bg-light" type="" id="perfil_id" name="perfil_id"placeholder="Perfil id" value = "{{$cuenta->perfil_id}}"required>
                </div>
    
                <button type ="submit" class="btn btn-info text-white w-100 mt-4 fw-semibold shadow-sm">Actualizar datos</button>
            </div>
        </form>
        </div>
      </div>
    </div>
    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
</body>

</html>