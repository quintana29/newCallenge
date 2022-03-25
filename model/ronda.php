<?php
    require('../db/conectar.php');
    
    class ronda {
        private $id, $idPregunta, $idCategoria,$idJugador;
        private $conexionDB;

        public function __construct($id, $idPregunta, $idCategoria,$idJugador){
            $this->conexionDB = new conectar();
            
            $this->id = $id;
            $this->idPregunta = $idPregunta;   
            $this->idCategoria = $idCategoria; 
            $this->idJugador = $idJugador;   
            
        }

        //Metodo destructor que termina la conexion si no se utiliza
        public function __destruct(){
            $this->conexionDB = null;
        }

        public function registrarRonda(){
            try {
                $sql = "INSERT INTO premio (' ',idPregunta, idCategoria, idJugador)";
                $sql .= "VALUES (' ', '$this->idPregunta','$this->idCategoria','$this->idJugador')";
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

        public function buscarRonda($doc,$idCategoria,$idJugador){
            $sql = "SELECT * FROM ronda WHERE id = $doc AND idCategoria = $idCategoria AND idJugador = $idJugador";
            $query = $this->conexionDB->connect()->prepare($sql);
            $query->execute();
            $results = $query->fetchAll(PDO::FETCH_ASSOC);
            return $results;
        }

   
    }
?>