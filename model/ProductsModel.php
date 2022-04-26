<?php 
    require_once "connection/Database.php";

    class ProductsModel extends Database {
        // Inserta el registro de un nuevo producto en la base de datos.
        public function create($name, $amount, $supplier, $user_id) {
            // Se prepara y ejecuta el query.
            $sql = "INSERT INTO products (name, amount, supplier, user_id) VALUES ('$name', '$amount', '$supplier', '$user_id');";

            return $this->connect()->query($sql);

        }
        // Devuelve un array con todos los productos.
        public function getProducts($user_id) {
            $sql = "SELECT * FROM products  WHERE user_id=$user_id;";
            $result = $this->connect()->query($sql);
            
            $results = array();

            while ($row = mysqli_fetch_assoc($result)) {
                $new = array();
                $new["product_id"] = $row["product_id"];
                $new["name"] = $row["name"];
                $new["amount"] = $row["amount"];
                $new["supplier"] = $row["supplier"];
                array_push($results, $new);
            }
            return $results;
        }
        // Devuelve un array con un producto en especifico con su ID.
        public function getProduct($product_id, $user_id) {
            $sql = "SELECT * FROM products  WHERE product_id=$product_id AND user_id=$user_id;";
            $result = $this->connect()->query($sql);
            
            $product = array();

            while ($row = mysqli_fetch_assoc($result)) {
                $product["product_id"] = $row["product_id"];
                $product["name"] = $row["name"];
                $product["amount"] = $row["amount"];
                $product["supplier"] = $row["supplier"];

            }
            return $product;
        }
        // Actualiza el registro de un producto.
        function update($product_id, $name, $amount, $supplier, $user_id) {
            // Se prepara y ejecuta el query.
            $sql = "UPDATE products SET name='$name', amount='$amount', supplier='$supplier', user_id='$user_id' WHERE product_id=$product_id;";
            return $this->connect()->query($sql);
        }
        // Elimina el registro de un producto con su ID.
        function delete($product_id) {
            $sql = "DELETE FROM products WHERE product_id=$product_id;";
            return $this->connect()->query($sql);
        }


        //------------------------------------------------------------------------
        // STOCK
        //------------------------------------------------------------------------

        // Inserta el registro de un nuevo entrada en la base de datos.
        public function createInOut($amount, $type, $description, $date, $product_id, $user_id) {
            // Se prepara y ejecuta el query.
            $sql = "INSERT INTO inouts (amount, type, description, date, product_id, user_id) VALUES ('$amount', '$type', '$description', '$date', '$product_id', '$user_id')";
            $result = $this->connect()->query($sql);

            if ($type == "Input") {
                $sql = "UPDATE products SET amount=amount+$amount WHERE product_id=$product_id;";
                return $this->connect()->query($sql);
            }

        } 
         // Actualiza el registro de una product.
         function updateInOut($stock_id, $amount, $type, $description, $date, $Product_id, ) {
            // Se prepara y ejecuta el query.
            $sql = "UPDATE inouts SET amount='$amount', type='$type', description='$description', date='$date', Product_id='$Product_id' WHERE stock_id=$stock_id;";
            return $this->connect()->query($sql);
        }
 

         // Devuelve un array con todas los registors de entradas y sakidas.
         public function getInOuts($user_id) {
            $sql = "SELECT * FROM inouts WHERE user_id=$user_id;";
            $result = $this->connect()->query($sql);
            
            $results = array();

            while ($row = mysqli_fetch_assoc($result)) {
                $new = array();
                $new["inout_id"] = $row["inout_id"];
                $new["amount"] = $row["amount"];
                $new["type"] = $row["type"];
                $new["description"] = $row["description"];
                $new["date"] = $row["date"];
                $new["product_id"] = $row["product_id"];
                $new["user_id"] = $row["user_id"];              
                array_push($results, $new);
            }
            return $results;
        }
        // Devuelve un array con una vacación en especifico con su ID.
        public function getInOut($inOut_id, $user_id) {
            $sql = "SELECT * FROM inouts WHERE inout_id=$inOut_id AND user_id=$user_id;";
            $result = $this->connect()->query($sql);
            
            $inout = array();

            while ($row = mysqli_fetch_assoc($result)) {
                $inout["inout_id"] = $row["inout_id"];
                $inout["amount"] = $row["amount"];
                $inout["type"] = $row["type"];
                $inout["description"] = $row["description"];
                $inout["date"] = $row["date"];
                $inout["product_id"] = $row["product_id"];
                $neinoutw["user_id"] = $row["user_id"];      
            }
            return $inout;
        }

        // Elimina el registro de un stock con su ID.
        function deleteInOut($stock_id) {
            $sql = "DELETE FROM inouts WHERE stock_id=$stock_id;";
            return $this->connect()->query($sql);
        }
    }
?>
