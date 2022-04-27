<?php 
    require_once "connection/Database.php";

    class ProductsModel extends Database {
        // Inserta el registro de un nuevo producto en la base de datos.
        public function create($name, $amount, $supplier, $warehouse, $price, $user_id) {
            // Se prepara y ejecuta el query.
            $sql = "INSERT INTO products (name, amount, supplier, warehouse, price, user_id) VALUES ('$name', '$amount', '$supplier', '$warehouse', '$price', '$user_id');";

            return $this->connect()->query($sql);

        }
        // Devuelve un array con todos los productos.
        public function getProducts($user_id) {
            $sql = "SELECT product_id, name, amount, supplier, warehouse, price, amount*price AS total_price FROM products  WHERE user_id=$user_id;";
            $result = $this->connect()->query($sql);
            
            $results = array();

            while ($row = mysqli_fetch_assoc($result)) {
                $new = array();
                $new["product_id"] = $row["product_id"];
                $new["name"] = $row["name"];
                $new["amount"] = $row["amount"];
                $new["supplier"] = $row["supplier"];
                $new["warehouse"] = $row["warehouse"];
                $new["price"] = $row["price"];
                $new["total_price"] = $row["total_price"];

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
                $product["warehouse"] = $row["warehouse"];
                $product["price"] = $row["price"];
            }
            return $product;
        }
        // Actualiza el registro de un producto.
        function update($product_id, $name, $supplier, $warehouse, $price, $user_id) {
            // Se prepara y ejecuta el query.
            $sql = "UPDATE products SET name='$name', supplier='$supplier', warehouse='$warehouse', price='$price', user_id='$user_id' WHERE product_id=$product_id;";
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
                $this->connect()->query($sql);
            } else if ($type == "Output") {
                $sql = "UPDATE products SET amount=amount-$amount WHERE product_id=$product_id;";
                $this->connect()->query($sql);
            }

            return $result;

        } 
        // Actualiza el registro de una product.
        function updateInOut($inout_id, $amount, $description, $user_id) {

            $sql = "SELECT * FROM inouts WHERE inout_id=$inout_id;";
            $inout =  mysqli_fetch_assoc($this->connect()->query($sql));
            // Se calcula la diferencia a sumar a la cantidad de cierto producto.
            $new_amount = $amount - $inout["amount"];

            if ($inout["type"] == "Input") {
                $sql = "UPDATE products SET amount=amount+$new_amount WHERE product_id=".$inout["product_id"].";";
                $this->connect()->query($sql);
            } else if ($inout["type"] == "Output") {
                $sql = "UPDATE products SET amount=amount-$new_amount WHERE product_id=".$inout["product_id"].";";
                $this->connect()->query($sql);
            }
            // Se prepara y ejecuta el query.
            $sql = "UPDATE inouts SET amount='$amount', description='$description' WHERE inout_id=$inout_id AND user_id=$user_id";
            return $this->connect()->query($sql);
        }
        // Devuelve un array con todas los registors de entradas y sakidas.
        public function getInOuts($user_id) {
            $sql = "SELECT inout_id, inouts.amount, type, description, date, inouts.product_id, name, inouts.user_id FROM inouts INNER JOIN products ON inouts.product_id=products.product_id WHERE inouts.user_id=$user_id;";
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
                $new["name"] = $row["name"];
                $new["user_id"] = $row["user_id"];              
                array_push($results, $new);
            }
            return $results;
        }
        // Devuelve un array con una vacación en especifico con su ID.
        public function getInOut($inout_id, $user_id) {
            $sql = "SELECT * FROM inouts WHERE inout_id=$inout_id AND user_id=$user_id;";
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
        function deleteInOut($inout_id) {
            $sql = "SELECT * FROM inouts WHERE inout_id=$inout_id;";
            $inout =  mysqli_fetch_assoc($this->connect()->query($sql));

            if ($inout["type"] == "Input") {
                $sql = "UPDATE products SET amount=amount-".$inout["amount"]." WHERE product_id=".$inout["product_id"].";";
                $this->connect()->query($sql);
            } else if ($inout["type"] == "Output") {
                $sql = "UPDATE products SET amount=amount+".$inout["amount"]." WHERE product_id=".$inout["product_id"].";";
                $this->connect()->query($sql);
            }

            $sql = "DELETE FROM inouts WHERE inout_id=$inout_id;";
            return $this->connect()->query($sql);
        }
    }
?>
