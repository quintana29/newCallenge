<?php
require('../model/ronda.php');

if(isset($_POST['op'])){
    $opcion=$_POST['op'];
}
//$solucion =isset($_POST['valor']) ? $_POST['valor'] : null; 
$valor = $_POST['valor'];
$solucion = $_POST['solucion'];
$ronda = $_POST['ronda'];

if(isset($_POST['btnSiguiente'])){
      
    if($solucion == $opcion){
        if($ronda == 1){
            header("Location: ../view/frmRonda2.php?valor=".$valor);
            echo 'bien'; 
        }else if($ronda == 2){
            header("Location: ../view/frmRonda3.php?valor=".$valor);
            echo 'bien';
        }else if($ronda == 3){
            header("Location: ../view/frmRonda4.php?valor=".$valor);
            echo 'bien';
        }else if($ronda == 4){
            header("Location: ../view/frmRonda5.php?valor=".$valor);
            echo 'bien';
        }else if($ronda == 5){
            echo 'gano';
            //registrar al usuario con su puntaje
            header("Location: ../view/registroJugador.php?valor=".$valor);
        }
      
    }else{
        //registrar al usuario con su puntaje
        ?>
        <script>
        alert('Opción incorrecta');
        location.href="../view/registroJugador.php";
        </script>
         <?php       
    }

}else {
    header("Location: ../view/registroJugador.php?valor=".$valor);

} 


?>