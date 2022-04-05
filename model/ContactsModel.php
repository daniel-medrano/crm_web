<?php 
    require_once "connection/Database.php";

    class ContactsModel extends Database {
        // Inserta el registro de un nuevo contacto en la base de datos.
        public function create($name, $last_name, $email, $relation, $user_id) {
            // Se prepara y ejecuta el query.
            $sql = "INSERT INTO contacts (name, last_name, email, relation, user_id) VALUES ('$name', '$last_name', '$email','$relation', $user_id);";

            return $this->connect()->query($sql);

        }
        // Devuelve un array con todos los contacts.
        public function getContacts($user_id) {
            $sql = "SELECT * FROM contacts WHERE user_id=$user_id;";
            $result = $this->connect()->query($sql);
            
            $results = array();

            while ($row = mysqli_fetch_assoc($result)) {
                $new = array();
                $new["contact_id"] = $row["contact_id"];
                $new["name"] = $row["name"];
                $new["last_name"] = $row["last_name"];
                $new["email"] = $row["email"];
                $new["relation"] = $row["relation"];
                array_push($results, $new);
            }
            return $results;
        }
        // Devuelve un array con un contacto en especifico con su ID.
        public function getContact($contact_id, $user_id) {
            $sql = "SELECT * FROM contacts WHERE contact_id=$contact_id AND user_id=$user_id;";
            $result = $this->connect()->query($sql);
            
            $contact = array();

            while ($row = mysqli_fetch_assoc($result)) {
                $contact["contact_id"] = $row["contact_id"];
                $contact["name"] = $row["name"];
                $contact["last_name"] = $row["last_name"];
                $contact["email"] = $row["email"];
                $contact["relation"] = $row["relation"];
            }
            return $contact;
        }
        // Actualiza el registro de un contacto.
        function update($contact_id, $name, $last_name, $email, $relation) {
            // Se prepara y ejecuta el query.
            $sql = "UPDATE contacts SET name='$name', last_name='$last_name', email='$email', relation='$relation' WHERE contact_id=$contact_id;";
            return $this->connect()->query($sql);
        }
        // Elimina el registro de un contacto con su ID.
        function delete($contact_id) {
            $sql = "DELETE FROM contacts WHERE contact_id=$contact_id;";
            return $this->connect()->query($sql);
        }
    }
?>
