<?php
    require('../db/conectar.php');
    
    class opcion {
        private $id, $op1, $op2, $op3, $op4;
        private $conexionDB;

        public function __construct($id, $op1, $op2, $op3, $op4){
            //$this->conexionDB = new conectar();
            
            $this->id = $id;
            $this->op1 = $op1;
            $this->op2 = $op2;
            $this->op3 = $op3;
            $this->op4 = $op4;
            
        }

        //Metodo destructor que termina la conexion si no se utiliza
        public function __destruct(){
            $this->conexionDB = null;
        }

        public function registrarPregunta(){
            try {
                $sql = "INSERT INTO opcion (id, op1, op2, op3, op4)";
                $sql .= "VALUES ('$this->id', '$this->op1','$this->op2','$this->op3','$this->op4')";
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

        public function buscarPregunta($doc){
            $sql = "SELECT * FROM opcion WHERE id = $doc";
            $query = $this->conexionDB->connect()->prepare($sql);
            $query->execute();
            $results = $query->fetchAll(PDO::FETCH_ASSOC);
            return $results;
        }

   
    }
?>