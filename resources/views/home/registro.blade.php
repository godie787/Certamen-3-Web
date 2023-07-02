<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Registro</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx"
      crossorigin="anonymous"
    />
</head>
<body class="bg-secondary bg-gradient d-flex justify-content-center align-items-center vh-100">
    <form method= "POST" action="{{route('home.store')}}">
        @csrf
        <div class="bg-white p-5 rounded-5 text-secondary shadow" style="width: 25rem">
            <h7 class="text-align-center fst-italic">Blog fotográfico</h7>
            <div class="text-center fs-1 fw-bold">Registro Artista</div>
            <div class="input-group mt-4">
              <input class="form-control bg-light" type="" id="user" name="user"  placeholder="Nombre de usuario" required>
            </div>
            <div class="input-group mt-4">
              <input class="form-control bg-light" type="password" id="password" name="password" placeholder="Contraseña" required>
            </div>
            <div class="input-group mt-4">
              <input class="form-control bg-light" type="" id="nombre" name="nombre" placeholder="Nombre" required>
            </div>
            <div class="input-group mt-4">
              <input class="form-control bg-light" type="" id="apellido" name="apellido" placeholder="Apellido" required>
            </div>
            <div class="input-group mt-4">
              <input class="form-control bg-light" type="" id="perfil_id" name="perfil_id"placeholder="Tipo de cuenta" required>
            </div>

            <button href=""type ="submit" class="btn btn-info text-white w-100 mt-4 fw-semibold shadow-sm">Registrarse</button>
            <a href="/login"type ="" class="btn btn-info text-white w-100 mt-4 fw-semibold shadow-sm">Iniciar Sesión</a>
        </div>
    </form>
</body>
</html>