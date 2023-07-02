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
                                <li><a class="dropdown-item" href="/GestionImagenes">Gestionar imagenes</a></li>
                                <li><a class="dropdown-item" href="#">Ver imagenes baneadas</a></li>
                            </ul>
                        </li>
                        <li class = "nav-item">
                            <a href="\login" class="nav-link">Cerrar Sesión</a>
                        </li>
                    </ul>
            </div>
        </nav>
    </div>
    <div class="container text-center">
		<div class="row">
			<div class="col-md-6 offset-md-3 mt-4">
            
                <form method= "POST" action="{{route('imagenes.store')}}" enctype = "multipart/form-data">
                    @csrf    
                    
					<div class="card">
						<div class="card-header center-text">
							<h2>Subir imagen</h2>
						</div>
						<div class="card-body">
                    
							<div class="row">
								<div class="form-group col">
                                    <label class="form-label">Titulo para la imagen</label>
                                    <input placeholder="Titulo para la imagen"type="text" id="titulo" name="titulo" class="form-control" required>
                                    
                                </div>
							</div>
							<div class="mb-3">
                                <br>
                                <label class="form-label">Seleccione la imagen</label>
                                <input type="file" id="archivo" accept ="image/*" name="archivo"class="form-control form-text text-align-center" required>
                                
							</div>
                            <div class="row">
								<div class="form-group col">
                                    <label class="form-label">Ingrese su usuario</label>
                                    <input placeholder="Nombre de usuario"type="text" id="cuenta_user" name="cuenta_user"  class="form-control"required>
								</div>
							</div>
                            <br>
							<div class="form-group">
								<button class="btn btn-secondary" onclick="return confirm('¿Subir Imagen?')">Aceptar</button>
							</div>
						</div>
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