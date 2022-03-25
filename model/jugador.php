<?php
    require('../db/conectar.php');
    
    class jugador {
        private $documento, $nombre, $apellido, $direccion, $email, $telefono,$premio;
        private $conexionDB;

        public function __construct($documento, $nombre, $apellido, $direccion, $email, $telefono, $premio){
            $this->conexionDB = new conectar();
            
            $this->documento = $documento;
            $this->nombre = $nombre;
            $this->apellido = $apellido;
            $this->direccion = $direccion;
            $this->email = $email;
            $this->telefono = $telefono;
            $this->premio = $premio;
        }

        //Metodo destructor que termina la conexion si no se utiliza
        public function __destruct(){
            $this->conexionDB = null;
        }

        public function registrarJugador(){
            try {
                $sql = "INSERT INTO jugador (documento, nombres, apellidos, direccion, email, telefono)";
                $sql .= "VALUES ('$this->documento', '$this->nombre', '$this->apellido', '$this->direccion', '$this->email', '$this->telefono')";
                $stmt = $this->conexionDB->connect()->prepare($sql);
                $stmt->execute();
            } catch(Exception $e) {
                die("Se produjo un error: $e");
            }

            if(isset($stmt)) {
    ?>
                <script>alert('Registro almacenado'); window.location = '../view/index.php'</script>
    <?php
                exit();
            } else {
                echo 'Hay problemas con la sentencia SQL';
            }
        }

        public function buscarJugador($doc){
            $sql = "SELECT * FROM jugador WHERE documento = $doc";
            $query = $this->conexionDB->connect()->prepare($sql);
            $query->execute();
            $results = $query->fetchAll(PDO::FETCH_ASSOC);
            return $results;
        }

   
    }
?>