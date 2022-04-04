<?php 
    require_once "connection/Database.php";

    class UsersModel extends Database {

        function validateLogin($username, $password) {
            $sql = "SELECT id_user, name, last_name, role FROM users WHERE user='$username' and password=md5('$password');";
            $result = $this->connect()->query($sql);
            // Quick view of result.
            // var_dump($result);
            $results = array();

            while ($row = mysqli_fetch_assoc($result)) {
                $new = array();
                $new["id_user"] = $row["id_user"];
                $new["name"] = $row["name"];
                $new["last_name"] = $row["last_name"];
                $new["role"] = $row["role"];
                array_push($results, $new);
            }

            return $results;
        }

        
        // Inserta el registro de un nuevo usuario en la base de datos.
        public function create($name, $last_name, $user, $password, $role) {
            if ($this->isUsernameRepeated($user)) {
                return "username already exists";
            }
            // Se prepara y ejecuta el query.
            $sql = "INSERT INTO users (name, last_name, user, password, role) VALUES ('$name', '$last_name', '$user', md5('$password'), $role);";
            return $this->connect()->query($sql);

        }
        
        public function getUsers() {
            $sql = "SELECT * FROM users;";
            $result = $this->connect()->query($sql);
            
            $results = array();

            while ($row = mysqli_fetch_assoc($result)) {
                $new = array();
                $new["id_user"] = $row["id_user"];
                $new["name"] = $row["name"];
                $new["last_name"] = $row["last_name"];
                $new["username"] = $row["user"];
                $new["role"] = $row["role"];
                array_push($results, $new);
            }
            return $results;
        }

        public function getUser($id) {
            $sql = "SELECT * FROM users WHERE id_user=$id;";
            $result = $this->connect()->query($sql);
            
            $user = array();

            while ($row = mysqli_fetch_assoc($result)) {
                $user["id_user"] = $row["id_user"];
                $user["name"] = $row["name"];
                $user["last_name"] = $row["last_name"];
                $user["username"] = $row["user"];
                $user["role"] = $row["role"];
            }
            return $user;
        }

        function update($id, $name, $last_name, $user, $role) {
            // Se prepara y ejecuta el query.
            $sql = "UPDATE users SET name='$name', last_name='$last_name', user='$user', role=$role WHERE id_user=$id;";
            return $this->connect()->query($sql);
            
        }
        
        function delete($id) {
            $sql = "DELETE FROM users WHERE id_user=$id;";
            return $this->connect()->query($sql);
        }

        function isUsernameRepeated($username) {
            $sql = "SELECT * FROM users WHERE user='$username';";
            $result = $this->connect()->query($sql);

            if (mysqli_num_rows($result) == 1) {
                return true;
            }
            return false;
        }
    }


?>
