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
        require('../db/conectar.php');
        $conexionDB = new conectar();
        $valor = 3000;
        $rand =rand(1,5);
        $ronda = 3;

            $sql1 = "SELECT descripcion, solucion from pregunta WHERE id = '$rand' AND categoria = '$ronda';";
               
            $sql1 = $conexionDB->connect()->prepare($sql1);
            $sql1->execute();
            $results1 = $sql1->fetchAll(PDO::FETCH_ASSOC);
                
            $sql = "SELECT op1,op2,op3,op4 FROM opcion  
            WHERE idPregunta ='$rand' AND idCategoria = '$ronda';
            ";
               
            $sql = $conexionDB->connect()->prepare($sql);
            $sql->execute();
            $results = $sql->fetchAll(PDO::FETCH_ASSOC);
            $solucion = $results1[0]['solucion'];
                
                $valor =isset($_GET['valor']) + $valor;
                //echo $valor;

        ?>
<div class="container-fluid">
    <div class="row" id="map_section">
        <div class="col-12">
        <h2>Reto conocimento en progración</h2>
            <form action="../controller/ctrRonda.php" method="post">
                <div class="form-group ">                  
                    <label><?php echo $results1[0]['descripcion']; ?></label>
                </div> 
                <div class="form-group ">
                    <input type="radio" id="a" name="op" value="a" >
                    <label for="b"><?php echo $results[0]['op1']; ?></label>
                </div> 
                <div class="form-group ">
                    <input type="radio" id="a" name="op" value="b" >
                    <label for="b"><?php echo $results[0]['op2']; ?></label>
                </div> 
                <div class="form-group ">
                    <input type="radio" id="a" name="op" value="c" >
                    <label for="c"><?php echo $results[0]['op3']; ?></label>
                </div> 
                <div class="form-group ">
                    <input type="radio" id="a" name="op" value="d" >
                    <label for="d"><?php echo $results[0]['op4']; ?></label>
                </div> 
                <div class="form-group row-md-2">
                    <button class="btn btn-success" name="btnSiguiente">Siguiente</button>
                    <button class="btn btn-success" name="btnCancelar">Cancelar</button>
                </div>
                <label>Valor ronda <?php echo $ronda;?></label>
                <input class="form-control col-2" type="text" name="valor" value='<?php echo $valor?>' readonly>
                <input id="prodId" name="solucion" type="hidden" value='<?php echo $solucion?>'>
                <input id="prodId" name="ronda" type="hidden" value='<?php echo $ronda?>'>
            </form>
        </div>
    </div>
</div>    
    </body>
</html>