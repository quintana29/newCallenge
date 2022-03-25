<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <title>Registros</title>
    </head>
    <body>
    <div class="container">
            <h2>Registro jugador</h2>
            <form action="../controller/ctrJugador.php" method="post">
                <div class="form-group col-md-4">
                    <label>Número de documento</label>
                    <input class="form-control" type="text" name="documento">
                </div>
                <div class="form-group col-md-3">
                    <label>Nombres</label>
                    <input class="form-control" type="text" name="nombres">
                </div>
                <div class="form-group col-md-3">
                    <label>Apellidos</label>
                    <input class="form-control" type="text" name="apellidos">
                </div>
                <div class="form-group col-md-3">
                    <label>Dirección</label>
                    <input class="form-control" type="text" name="direccion">
                </div>
                <div class="form-group col-md-4">
                    <label>Email</label>
                    <input class="form-control" type="email" name="email">
                </div>
                <div class="form-group col-md-4">
                    <label>Telefono</label>
                    <input class="form-control" type="text" name="telefono">
                </div>
                <div class="form-group row-md-2">
                    <button class="btn btn-success" name="frmRegistrar">Registrar</button>
                </div>
            </form>
        </div>
    </body>
</html>