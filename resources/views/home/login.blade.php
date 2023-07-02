<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx"
      crossorigin="anonymous"
    />
</head>
<body class="bg-secondary d-flex justify-content-center align-items-center vh-100">
    <div class="bg-white p-5 rounded-5 text-secondary shadow" style="width: 25rem">
      <h7 class="text-align-center fst-italic">Blog fotográfico</h7>
      <br>
      <br>
      <br>
      <div class="text-center fs-1 fw-bold" >Iniciar sesión</div>
      <div class="input-group mt-4">
        <input class="form-control bg-light" type="email" placeholder="Email" required>
      </div>
      <div class="input-group mt-1">
        <input class="form-control bg-light" type="password" placeholder="Contraseña" required>
      </div>
      <div class="d-flex justify-content-around mt-1">
        <div class="d-flex align-items-center gap-1">
          <input class="form-check-input" type="checkbox" />
          <div class="pt-1" style="font-size: 0.9rem">Recordarme</div>
        </div>
        <div class="pt-1"> 
          <a
            href="#" class=" text-info  fst-italic" style="font-size: 0.9rem"
            >Olvidaste tu contraseña?</a
          >
        </div>
      </div>
      <a class="btn btn-info text-white w-100 mt-4 fw-semibold shadow-sm" href="/">
        Login
      </a>
      <a class="btn btn-info text-white w-100 mt-4 fw-semibold shadow-sm" href="/registro">
        Registrarse
      </a>
      <br>
      <br>
      <br>
    </div>
</body>
</html>
