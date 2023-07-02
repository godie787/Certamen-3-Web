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
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Imagenes
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark bg-dark">
                                <li><a class="dropdown-item" href="/Artista">Gestionar imagenes</a></li>
                                <li><a class="dropdown-item" href="/ArtistaBaneadas">Ver imagenes baneadas</a></li>
                            </ul>
                        </li>
                        <li class = "nav-item">
                            <a href="\login" class="nav-link">Cerrar Sesión</a>
                        </li>
                    </ul>
            </div>
        </nav>
    </div>
    <div class="container-fluid">
		<h3 class="text-center fst-italic fs-1 py-5">AQUÍ PODRÁ VER SUS IMAGENES BANEADAS Y LOS MOTIVOS</h3>
        <br>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
</body>

</html>