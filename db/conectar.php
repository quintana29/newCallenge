<?php
    require_once('config.php');

    class Conectar {
        private $host;
        private $db;
        private $user;
        private $password;
        private $charset;

        public function __construct(){
            $this->host = SERVIDOR;
            $this->db = NAMEDB;
            $this->user = USER;
            $this->password = PASSWORD;
            $this->charset = CHARSET;
        }

        function connect(){
            try {
                $conexion="mysql:host=".$this->host.";dbname=".$this->db.";charset"
            .$this->charset;

                $options = [
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_EMULATE_PREPARES => false,
                    PDO::ATTR_PERSISTENT => true
                ];

                $pdo = new PDO($conexion, $this->user, $this->password, $options);
                return $pdo;
            } catch(PDOExcepcion $e) {
    ?>
                <script>alert('Hay Problemas para realizar la conexión')</script>
    <?php
            }
        }
    }
?>