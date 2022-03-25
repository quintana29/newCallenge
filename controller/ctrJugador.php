<?php
    
        require('../model/jugador.php');
    
        $documento = isset($_POST['documento']) ? $_POST['documento'] : null;
        $nombres   = isset($_POST['nombres'])   ? $_POST['nombres']   : null;
        $apellidos = isset($_POST['apellidos']) ? $_POST['apellidos'] : null;
        $direccion = isset($_POST['direccion']) ? $_POST['direccion'] : null;
        $email     = isset($_POST['email'])     ? $_POST['email']     : null;
        $telefono  = isset($_POST['telefono'])  ? $_POST['telefono']  : null;
    
        if(isset($_POST['frmRegistrar'])) {
            $cliente = new Jugador($documento, $nombres, $apellidos, $direccion, $email, $telefono);
            $cliente->registrarJugador();
        } 
    
?>