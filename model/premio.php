<?php
    require('../db/conectar.php');
    
    class premio {
        private $id, $valor, $fecha;
        private $conexionDB;

        public function __construct($id, $valor, $fecha){
            $this->conexionDB = new conectar();
            
            $this->id = $id;
            $this->valor = $valor;   
            $this->fecha = $fecha;       
            
        }

        //Metodo destructor que termina la conexion si no se utiliza
        public function __destruct(){
            $this->conexionDB = null;
        }

        public function registrarPremio(){
            try {
                $sql = "INSERT INTO premio ('',valor, fecha )";
                $sql .= "VALUES (' ', '$this->valor','$this->fecha')";
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

        public function buscarPremio($doc){
            $sql = "SELECT * FROM premio WHERE id = $doc";
            $query = $this->conexionDB->connect()->prepare($sql);
            $query->execute();
            $results = $query->fetchAll(PDO::FETCH_ASSOC);
            return $results;
        }

   
    }
?>