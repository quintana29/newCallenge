<?php
    require('../db/conectar.php');
    
    class pregunta {
        private $id, $descripcion, $categoria, $solucion;
        private $conexionDB;

        public function __construct($id, $descripcion,$categoria, $solucion){
            $this->conexionDB = new conectar();
            
            $this->id = $id;
            $this->nombre = $descripcion;
            $this->categoria = $categoria;
            $this->solucion =$solucion;
            
        }

        //Metodo destructor que termina la conexion si no se utiliza
        public function __destruct(){
            $this->conexionDB = null;
        }

        public function registrarPregunta(){
            try {
                $sql = "INSERT INTO pregunta (id, categoria, descripcion, solucion)";
                $sql .= "VALUES ('$this->id', '$this->categoria','$this->descripcion','$this->solucion')";
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

        public function buscarPregunta($doc1,$doc2){
            $sql = "SELECT * FROM pregunta WHERE id = $doc AND categoria = $doc2";
            $query = $this->conexionDB->connect()->prepare($sql);
            $query->execute();
            $results = $query->fetchAll(PDO::FETCH_ASSOC);
            return $results;
        }

   
    }
?>