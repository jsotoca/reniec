<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>DATOS RENIEC</title>
</head>
<body>
    <div class="container">
        <div class="row d-flex justify-content-center mt-2">
            <div class="col-4">
                <div class="card bg-warning text-dark">
                    <div class="card-header">
                        <h4 class="card-title">Formulario</h4>
                    </div>
                    <div class="card-body">
                        <form id="formulario">
                            <div class="form-group">
                                <label for="dni">INGRESE DNI: </label>
                                <input type="text" id="dni" class="form-control">
                            </div>
                            <button type="submit" class="btn btn-success">ENVIAR</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row d-flex justify-content-center mt-4">
            <div class="col-6">
                <div class="card bg-dark text-white">
                    <div class="card-header">
                        <h4 class="card-title">Datos Recuperados: </h4>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="cui">Cui: </label>
                            <input type="text" id="cui" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="apellido_paterno">Apellido Paterno: </label>
                            <input type="text" id="apellido_paterno" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="apellido_materno">Apellido Materno: </label>
                            <input type="text" id="apellido_materno" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="nombres">Nombres: </label>
                            <input type="text" id="nombres" class="form-control">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="jquery-3.4.0.js"></script>
    <script src="app.js"></script>
</body>
</html>