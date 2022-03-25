<?php
    
        //require('../model/pregunta.php');
        //require('../model/opcion.php');
    
        $p1 = isset($_POST['pregunta1']) ? $_POST['pregunta1'] : null;  

        $cont =isset($_POST['cont']) ? $_POST['cont'] : null; 
        echo $cont;
    
        //if(isset($_POST['frmRegistrar'])) {
            $cont++;
            header("Location: ../view/frmRegistroPregunta.php? cont=".$cont++);
        //} 
    
?>