<?php 
    require_once "connection/Database.php";

    class PaymentsModel extends Database {
        // Inserta el registro de un nuevo empleado en la base de datos.
        public function create($date, $amount, $user_id) {
            // Se prepara y ejecuta el query.
            $sql = "INSERT INTO payments (date, amount, user_id) VALUES ('$date', '$amount', $user_id);";

            return $this->connect()->query($sql);

        }
        // Devuelve un array con todos los empleados.
        public function getPayments($user_id) {
            $sql = "SELECT * FROM payments WHERE user_id=$user_id;";
            $result = $this->connect()->query($sql);
            
            $results = array();

            while ($row = mysqli_fetch_assoc($result)) {
                $new = array();
                $new["payment_id"] = $row["payment_id"];
                $new["amount"] = $row["amount"];
                $new["date"] = $row["date"];
                array_push($results, $new);
            }
            return $results;
        }
        // Devuelve un array con un empleado en especifico con su ID.
        public function getPayment($payment_id, $user_id) {
            $sql = "SELECT * FROM payments WHERE payment_id=$payment_id AND user_id=$user_id;";
            $result = $this->connect()->query($sql);
            
            $payment = array();

            while ($row = mysqli_fetch_assoc($result)) {
                $payment["payment_id"] = $row["payment_id"];
                $payment["amount"] = $row["amount"];
                $payment["date"] = $row["date"];
            }
            return $payment;
        }

        // Devuelve un array con un empleado en especifico con su ID.
        public function getPaymentsPerMonth($user_id) {
            $sql = "SELECT MONTH(date) AS num_month, MONTHNAME(date) AS month, SUM(amount) AS total_amount FROM payments WHERE user_id=$user_id GROUP BY month ORDER BY num_month;";
            $result = $this->connect()->query($sql);
            
            $results = array();

            while ($row = mysqli_fetch_assoc($result)) {
                $new = array();
                $new["month"] = $row["month"];
                $new["total_amount"] = $row["total_amount"];
                array_push($results, $new);
            }
            return $results;
        }

        
        // Elimina el registro un pago con su ID.
        function delete($payment_id) {
            $sql = "DELETE FROM payments WHERE payment_id=$payment_id;";
            return $this->connect()->query($sql);
        }

        function calculatePayment($user_id) {
            $sql = "SELECT SUM(salary) AS salary_payment FROM employees INNER JOIN positions ON employees.position_id=positions.position_id WHERE employees.user_id=$user_id;";
            $result = $this->connect()->query($sql);
            return mysqli_fetch_assoc($result)["salary_payment"];
        }
    }
?>
