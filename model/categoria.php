<?php
    require('../db/conectar.php');
    
    class categoria {
        private $id, $descripcion;
        private $conexionDB;

        public function __construct($id, $descripcion){
            $this->conexionDB = new conectar();
            
            $this->id = $id;
            $this->descripcion = $descripcion;          
            
        }

        //Metodo destructor que termina la conexion si no se utiliza
        public function __destruct(){
            $this->conexionDB = null;
        }

        public function registrarPregunta(){
            try {
                $sql = "INSERT INTO categoria (id, descripcion)";
                $sql .= "VALUES ('$this->id', '$this->descripcion')";
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

        public function buscarCategoria($doc){
            $sql = "SELECT * FROM categoria WHERE id = $doc";
            $query = $this->conexionDB->connect()->prepare($sql);
            $query->execute();
            $results = $query->fetchAll(PDO::FETCH_ASSOC);
            return $results;
        }

   
    }
?>