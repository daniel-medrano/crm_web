<?php 
    require_once "connection/Database.php";

    class EmployeesModel extends Database {
        // Inserta el registro de un nuevo empleado en la base de datos.
        public function create($name, $last_name, $email, $position_id, $user_id) {
            // Se prepara y ejecuta el query.
            $sql = "INSERT INTO employees (name, last_name, email, position_id, user_id) VALUES ('$name', '$last_name', '$email','$position_id', $user_id);";

            return $this->connect()->query($sql);

        }
        // Devuelve un array con todos los empleados.
        public function getEmployees($user_id) {
            $sql = "SELECT * FROM employees INNER JOIN positions ON employees.position_id=positions.position_id WHERE employees.user_id=$user_id;";
            $result = $this->connect()->query($sql);
            
            $results = array();

            while ($row = mysqli_fetch_assoc($result)) {
                $new = array();
                $new["employee_id"] = $row["employee_id"];
                $new["name"] = $row["name"];
                $new["last_name"] = $row["last_name"];
                $new["email"] = $row["email"];
                $new["position_id"] = $row["position_id"];
                $new["position"] = $row["position"];
                array_push($results, $new);
            }
            return $results;
        }
        // Devuelve un array con un empleado en especifico con su ID.
        public function getEmployee($employee_id, $user_id) {
            $sql = "SELECT * FROM employees INNER JOIN positions ON employees.position_id=positions.position_id WHERE employee_id=$employee_id AND user_id=$user_id;";
            $result = $this->connect()->query($sql);
            
            $employee = array();

            while ($row = mysqli_fetch_assoc($result)) {
                $employee["employee_id"] = $row["employee_id"];
                $employee["name"] = $row["name"];
                $employee["last_name"] = $row["last_name"];
                $employee["email"] = $row["email"];
                $employee["position_id"] = $row["position_id"];
                $employee["position"] = $row["position"];

            }
            return $employee;
        }
        // Actualiza el registro de un empleado.
        function update($employee_id, $name, $last_name, $email, $position_id) {
            // Se prepara y ejecuta el query.
            $sql = "UPDATE employees SET name='$name', last_name='$last_name', email='$email', position_id='$position_id' WHERE employee_id=$employee_id;";
            return $this->connect()->query($sql);
        }
        // Elimina el registro de un empleado con su ID.
        function delete($employee_id) {
            $sql = "DELETE FROM employees WHERE employee_id=$employee_id;";
            return $this->connect()->query($sql);
        }

        //------------------------------------------------------------------------
        // POSITIONS
        //------------------------------------------------------------------------

        public function getPositions($user_id) {
            $sql = "SELECT * FROM positions WHERE user_id=$user_id;";
            $result = $this->connect()->query($sql);
            
            $results = array();

            while ($row = mysqli_fetch_assoc($result)) {
                $new = array();
                $new["position_id"] = $row["position_id"];
                $new["position"] = $row["position"];
                $new["salary"] = $row["salary"];
                array_push($results, $new);
            }
            return $results;
        }

        // Inserta el registro de un nuevo puesto en la base de datos.
        public function createPosition($position, $salary, $user_id) {
            // Se prepara y ejecuta el query.
            $sql = "INSERT INTO positions (position, salary, user_id) VALUES ('$position', '$salary', '$user_id')";
            return $this->connect()->query($sql);

        } 
        public function getPosition($position_id, $user_id) {
            $sql = "SELECT * FROM positions WHERE position_id=$position_id AND user_id=$user_id;";
            $result = $this->connect()->query($sql);
            
            $position = array();

            while ($row = mysqli_fetch_assoc($result)) {             
                $position["position_id"] = $row["position_id"];
                $position["position"] = $row["position"];
                $position["salary"] = $row["salary"];

            }
            return $position;
        }
        // Actualiza el registro de un puesto.
        function updatePosition($position_id, $position, $salary) {
            // Se prepara y ejecuta el query.
            $sql = "UPDATE positions SET position='$position', salary='$salary' WHERE position_id=$position_id;";
            return $this->connect()->query($sql);
        }
        // Elimina el registro de una puesto con su ID.
        function deletePosition($position_id) {
            $sql = "DELETE FROM positions WHERE position_id=$position_id;";
            return $this->connect()->query($sql);
        }

        //------------------------------------------------------------------------
        // VACATIONS
        //------------------------------------------------------------------------
        
        public function createVacation($days, $vacation_date, $employee_id, $user_id) {
            // Se prepara y ejecuta el query.
            $sql = "INSERT INTO vacations (days, vacation_date, employee_id, user_id) VALUES ('$days', '$vacation_date', '$employee_id', $user_id);";

            return $this->connect()->query($sql);

        }
        // Devuelve un array con todas las vacaciones.
        public function getVacations($user_id) {
            $sql = "SELECT * FROM vacations WHERE user_id=$user_id;";
            $result = $this->connect()->query($sql);
            
            $results = array();

            while ($row = mysqli_fetch_assoc($result)) {
                $new = array();
                $new["vacation_id"] = $row["vacation_id"];
                $new["days"] = $row["days"];
                $new["vacation_date"] = $row["vacation_date"];
                $new["employee_id"] = $row["employee_id"];
                array_push($results, $new);
            }
            return $results;
        }
        // Devuelve un array con una vacación en especifico con su ID.
        public function getVacation($vacation_id, $user_id) {
            $sql = "SELECT * FROM vacations WHERE vacation_id=$vacation_id AND user_id=$user_id;";
            $result = $this->connect()->query($sql);
            
            $vacation = array();

            while ($row = mysqli_fetch_assoc($result)) {
                $vacation["vacation_id"] = $row["vacation_id"];
                $vacation["days"] = $row["days"];
                $vacation["vacation_date"] = $row["vacation_date"];
                $vacation["employee_id"] = $row["employee_id"];

            }
            return $vacation;
        }
        // Actualiza el registro de una vacación.
        function updateVacation($vacation_id, $days, $vacation_date) {
            // Se prepara y ejecuta el query.
            $sql = "UPDATE vacations SET days='$days', vacation_date='$vacation_date' WHERE vacation_id=$vacation_id;";
            return $this->connect()->query($sql);
        }
        // Elimina el registro de una vacación con su ID.
        function deleteVacation($vacation_id) {
            $sql = "DELETE FROM vacations WHERE vacation_id=$vacation_id;";
            return $this->connect()->query($sql);
        }

    }
?>
