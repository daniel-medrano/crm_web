<?php

    $action = $_REQUEST["action"];

    switch ($action) {
        case "list_users":
            listUsers();
            break;
        case "request_user":
            requestUser();
            break;
        case "delete_user":
            deleteUser();
            break;
    }

    function listUsers() {
        header("HTTP/1.1 200 OK");
        $sqlConnection = new mysqli("localhost", "root", "", "project_progra3");

        $sql = "SELECT id_user, name, last_name, user, role FROM users;";
        $result = $sqlConnection->query($sql);

        $usersTable = "";
        $usersTable = "<h2>List of Users</h2>";
        $usersTable .= "<table>";
        $usersTable .="<thead>";
        $usersTable .="<tr>";
            $usersTable .="<th>User ID</th>";
            $usersTable .="<th>Name</th>";
            $usersTable .="<th>Last Name</th>";
            $usersTable .="<th>User</th>";
            $usersTable .="<th>Role</th>";
            $usersTable .="<th>Del</th>";
            $usersTable .="<th>Edit</th>";
        $usersTable .="</tr>";
        $usersTable .="</thead>";

        $usersTable .="<tbody>";

        while ($row = mysqli_fetch_assoc($result)) {
            $usersTable .="<tr>";
                $usersTable .="<td>".$row['id_user']."</td>";
                $usersTable .="<td>".$row['name']."</td>";
                $usersTable .="<td>".$row['last_name']."</td>";
                $usersTable .="<td>".$row["user"]."</td>";
                $usersTable .="<td>".$row["role"]."</td>";
                $usersTable .="<td><img src='img/delete.png' class='clickable-img' onclick='deleteUser(".$row["id_user"].")'></td>";
                $usersTable .="<td><img src='img/lapiz.png' class='clickable-img' onclick='requestUser(".$row["id_user"].")'></td>";

            $usersTable .="</tr>";
        }
        $usersTable .="</tbody>";


        $usersTable .= "</table>";
        $sqlConnection->close();

        echo $usersTable;

    }

    function requestUser() {
        $user_id = $_REQUEST["user_id"];
        $sqlConnection = new mysqli("localhost", "root", "", "project_progra3");
        $sql = "SELECT * FROM users WHERE id_user=$user_id;";
        $result = $sqlConnection->query($sql);
        $results = array();
        while ($row = mysqli_fetch_assoc($result)) {
            $results["id_user"] = $row["id_user"];
            $results["name"] = $row["name"];
            $results["last_name"] = $row["last_name"];
            $results["user"] = $row["user"];
            $results["role"] = $row["role"];
        }
        $sqlConnection->close();
        echo json_encode($results);
        exit;
    }

    function deleteUser() {
        $user_id = $_REQUEST["user_id"];
        $sqlConnection = new mysqli("localhost", "root", "", "project_progra3");
        $sql = "DELETE FROM users WHERE id_user=$user_id;";
        $result = $sqlConnection->query($sql);

        $sqlConnection->close();
        echo "$sql";
        exit;

    }

?>