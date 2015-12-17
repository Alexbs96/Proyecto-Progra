<?php
    /**
    * Database Connection
    */
    class Connect 
    {
        private $hostname    = 'localhost';
        private $username    = 'root';
        private $password    = 'root';
        private $database    = 'servicioinf';
        private $usuariosInfo = array();
        
        public function getHostname(){
            return $this->hostname;
        }
        public function getUsername(){
            return $this->username;
        }
        public function getPassword(){
            return $this->password;
        }
        public function getSchema(){
            return $this->database;
        }       

        public function connectDb()
        {
           try {

             $connexion = mysqli_connect(
                    $this->getHostname(),
                    $this->getUsername(),
                    $this->getPassword(),
                    $this->getSchema()
                ) OR DIE ('Error de Conexión');
                            
                return $connexion;
            } catch (Exception $e) {
                echo $e->getMessage;
            }
        }

        public function getUser ($usuario) {
            try {
                $sql = 'SELECT * FROM usuarios WHERE usuario="' . $usuario . '"' ;
                $query = mysqli_query (
                        $this->connectDb(),
                        $sql
                    );
                $this->usuariosInfo = mysqli_fetch_assoc($query);
                return $this->usuariosInfo;
                
            } catch (Exception $e) {
                echo $e->getMessage();
            }
        }

        public function getUsers () {
            try {
                $sql = 'SELECT * FROM usuarios ORDER BY id';
                $query = mysqli_query (
                        $this->connectDb(),
                        $sql
                    );

                $i = 0;
                while($queryData = mysqli_fetch_assoc($query)){
                    $this->usuariosInfo[$i] = $queryData;
                    $i++;
                }
                return $this->usuariosInfo;
                
            } catch (Exception $e) {
                echo $e->getMessage();
            }
            
            return $this->usuariosInfo;
        }

        public function addUser ($nombre, $apellido, $usuario, $pass, $rol)
        {
            try {

                $sql = 'INSERT INTO usuarios (`nombre`, `apellidos`, `usuario`, `password`,`rol`) VALUES ("' . $nombre . '","' . $apellido . '","' . $usuario . '", "' . $pass . '", "' . $rol . '")';
                
                mysqli_query($this->connectDb(), $sql);

            } catch (Exception $e) {
                echo $e->getMessage();
            }
        }
        public function deleteUser ($usuario)
        {
            try {

                $sql = 'DELETE FROM usuarios where usuario="' . $usuario . '"';
                
                mysqli_query($this->connectDb(), $sql);

            } catch (Exception $e) {
                echo $e->getMessage();
            }
        }
    }
    
    

?>