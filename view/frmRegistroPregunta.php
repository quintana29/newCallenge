<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <title>Registros</title>
    </head>
    <body>
        <?php 
        
        //$cont = 1;
        //if(!isset($_POST['btnBuscar'])){
           $cont = $_GET['cont'];
                   
        //}       
            if($cont <=5){
                //$cont++;
        ?>
    <div class="container">
            <h2>Registro Preguntas</h2>
            <form action = "../controller/ctrPreguntaOpciones.php?cont=<?php $cont?>" method="post">
            <label>Categoria <?php echo $cont; ?> </label>
                <div class="form-group col-md-4">                  
                    <b><label>Introduce la pregunta 1 </label></b>
                    <p><textarea class="form-control" name="pregunta1"></textarea></p>
                </div>
                <div class="form-group col-md-4">
                    <label>Introduce respuesta a) </label>
                    <p><textarea class="form-control" name="respuesta1A"></textarea></p>
                </div>
                <div class="form-group col-md-4">
                    <label>Introduce  respuesta b) </label>
                    <p><textarea class="form-control" name="respuesta1B"></textarea></p>
                </div>
                <div class="form-group col-md-4">
                    <label>Introduce respuesta c) </label>
                    <p><textarea class="form-control" name="respuesta1C"></textarea></p>
                </div>
                <div class="form-group col-md-4">
                    <label>Introduce respuesta d) </label>
                    <p><textarea class="form-control" name="respuesta1D"></textarea></p>
                </div>
                <div class="form-group col-md-4">                 
                <b><label>Introduce la pregunta 2 </label></b>
                    <p><textarea class="form-control" name="pregunta2"></textarea></p>
                </div>
                <div class="form-group col-md-4">
                    <label>Introduce  respuesta a) </label>
                    <p><textarea class="form-control" name="respuesta2A"></textarea></p>
                </div>
                <div class="form-group col-md-4">
                    <label>Introduce  respuesta b) </label>
                    <p><textarea class="form-control" name="respuesta2B"></textarea></p>
                </div>
                <div class="form-group col-md-4">
                    <label>Introduce  respuesta c) </label>
                    <p><textarea class="form-control" name="respuesta2C"></textarea></p>
                </div>
                <div class="form-group col-md-4">
                    <label>Introduce  respuesta d) </label>
                    <p><textarea class="form-control" name="respuesta2D"></textarea></p>
                </div>
                <div class="form-group col-md-4">             
                <b><label>Introduce la pregunta 3 </label></b>
                    <p><textarea class="form-control" name="pregunta3"></textarea></p>
                </div>
                <div class="form-group col-md-4">
                    <label>Introduce respuesta a) </label>
                    <p><textarea class="form-control" name="respuesta3A"></textarea></p>
                </div>
                <div class="form-group col-md-4">
                    <label>Introduce  respuesta b) </label>
                    <p><textarea class="form-control" name="respuesta3B"></textarea></p>
                </div>
                <div class="form-group col-md-4">
                    <label>Introduce respuesta c) </label>
                    <p><textarea class="form-control" name="respuesta3C"></textarea></p>
                </div>
                <div class="form-group col-md-4">
                    <label>Introduce respuesta d) </label>
                    <p><textarea class="form-control" name="respuesta3D"></textarea></p>
                </div>
                <div class="form-group col-md-4">             
                <b><label>Introduce la pregunta 4 </label></b>
                    <p><textarea class="form-control" name="pregunta4"></textarea></p>
                </div>
                <div class="form-group col-md-4">
                    <label>Introduce respuesta a) </label>
                    <p><textarea class="form-control" name="respuesta4A"></textarea></p>
                </div>
                <div class="form-group col-md-4">
                    <label>Introduce respuesta b) </label>
                    <p><textarea class="form-control" name="respuesta4B"></textarea></p>
                </div>
                <div class="form-group col-md-4">
                    <label>Introduce respuesta c) </label>
                    <p><textarea class="form-control" name="respuesta4C"></textarea></p>
                </div>
                <div class="form-group col-md-4">
                    <label>Introduce la respuesta d) </label>
                    <p><textarea class="form-control" name="respuesta4D"></textarea></p>
                </div>
                <div class="form-group col-md-4">
                <b><label>Introduce la pregunta 5 </label></b>
                    <p><textarea class="form-control" name="pregunta5"></textarea></p>
                </div>
                <div class="form-group col-md-4">
                    <label>Introduce respuesta a) </label>
                    <p><textarea class="form-control" name="respuesta5A"></textarea></p>
                </div>
                <div class="form-group col-md-4">
                    <label>Introduce respuesta b) </label>
                    <p><textarea class="form-control" name="respuesta5B"></textarea></p>
                </div>
                <div class="form-group col-md-4">
                    <label>Introduce respuesta c) </label>
                    <p><textarea class="form-control" name="respuesta5C"></textarea></p>
                </div>
                <div class="form-group col-md-4">
                    <label>Introduce respuesta d) </label>
                    <p><textarea class="form-control" name="respuesta5D"></textarea></p>
                </div>
               
                
                
                <div class="form-group row-md-2">
                    <button class="btn btn-success" name="frmRegistrar">Registrar</button>
                </div>
            </form>
        </div>
        <?php }?>
    </body>
</html>