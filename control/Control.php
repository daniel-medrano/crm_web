<?php

    session_start();

    require_once "model/UsersModel.php";
    require_once "libs/smarty-4.1.0/Config.php";

    class Control {
        private $configSmarty;
        private $action;
        private $model;

        function __construct() {
            $this->configSmarty = new Config();
            $this->action = null;
            $this->usersModel = new UsersModel();
        }

        function console_log( $data ){
            echo '<script>';
            echo 'console.log('. json_encode( $data ) .')';
            echo '</script>';
          }

        function menu() {

            if (isset($_REQUEST["action"])) {
                $this->action = $_REQUEST["action"];
            }

            $this->verifySession();

            switch ($this->action) {
                case "login":
                    $this->verifyLogin();
                    break;
                case "open_login":
                    $this->showLogin();
                    break;
                case "open_signup":
                    $this->showSignup();
                    break;
                case "signup_submission":
                    $this->registerUser();
                    break;
                case "add_user":
                    $this->addUser();
                    break;
                case "edit_user":
                    $this->editUser();
                    break;
                case "del_user":
                    $this->deleteUser();
                    break;
                case "show_add_user":
                    $this->showAddUser();
                    break;
                case "show_edit_user":
                    $this->showEditUser();
                    break;
                case "show_del_user":
                    $this->showDelUser();
                    break;
                case "show_users":
                    $this->showUsers();
                    break;
                default:
                    if (isset($_SESSION["username"])) {
                        $this->configSmarty->setAssign("role", $_SESSION["role"]);
                        $this->configSmarty->setAssign("isLoggedIn", true);
                        $this->configSmarty->setDisplay("welcome.tpl");
                        exit;
                    }
                    $this->configSmarty->setAssign("isLoggedIn", false);
                    $this->configSmarty->setAssign("role", null);
                    $this->configSmarty->setDisplay("header.tpl");
                    $this->configSmarty->setDisplay("frm_main.tpl");
                    $this->configSmarty->setDisplay("footer.tpl");
                    break;
            }
        }

        function verifyLogin() {

            $username = $_POST["username"];
            $password = $_POST["password"];

            $results = $this->usersModel->validateLogin($username, $password);
            if (sizeof($results) != 0) {

                $_SESSION["username"] = $username;
                $_SESSION["name"] = $results[0]["name"];
                $_SESSION["role"] = $results[0]["role"];
                
                $this->configSmarty->setAssign("role", $_SESSION["role"]);
                $this->configSmarty->setAssign("isLoggedIn", true);
                $this->configSmarty->setDisplay("welcome.tpl");


            } else {
                $this->configSmarty->setDisplay("login.tpl");
            }
        }

        function verifySession() {
            if (!isset($_SESSION["time"])) {
                $_SESSION["time"] = time();

            } else if (time() - $_SESSION["time"] > 200) {
                session_destroy();
                header("Location: index.php");
                exit;
            }
            $_SESSION["time"] = time();
        }

        function registerUser() {
            // Se obtienen los datos del POST.
            $name = $_POST["name"];
            $last_name = $_POST["last_name"];
            $username = $_POST["username"];
            $password = $_POST["password"];
            $role = $_POST["role"];
            // Con ayuda del modelo se crea el usuario.
            $message = $this->model->registerUser($name, $last_name, $username, $password, $role);
            // Se verifica si el usuario se creo.
            switch ($message) {
                case "username already exists":
                    $this->showSignup($message);
                    break;
                case "user inserted":
                    $this->showLogin();
                    break;
                case "error inserting the user":
                    $this->showSignup($message);
                    break;
            }
        }

        function addUser() {
            $name = $_POST["name"];
            $last_name = $_POST["last_name"];
            $username = $_POST["username"];
            $password = $_POST["password"];
            $role = $_POST["role"];
            $created = $this->usersModel->create($name, $last_name, $username, $password, $role);

            if ($created) {
                $this->showUsers();
            }
        }

        function editUser() {
            // Se obtienen los datos del POST.
            $id = intval($_POST["id_user"]);
            $name = $_POST["name"];
            $last_name = $_POST["last_name"];
            $username = $_POST["username"];
            $role = $_POST["role"];
            // Con ayuda del modelo se crea el usuario.
            $updated = $this->usersModel->update($id, $name, $last_name, $username, $role);

            if ($updated) {
                $this->showUsers();
            }
        }

        function deleteUser() {
            $deleted = $this->usersModel->delete($_GET["id"]);
            if ($deleted) {
                $this->showUsers();
            }
        }

        // Metodos para el view.

        function showSignup($message="") {
            $this->configSmarty->setAssign("message", $message);
            $this->configSmarty->setDisplay("signup.tpl");
        }
        
        function showLogin() {
            $this->configSmarty->setDisplay("login.tpl");
        }

        function showUsers() {
            $this->configSmarty->setAssign("role", $_SESSION["role"]);
            $this->configSmarty->setAssign("isLoggedIn", true);
            $this->configSmarty->setAssign("users", $this->usersModel->getUsers());
            $this->configSmarty->setDisplay("users/view.tpl");
        }

        function showAddUser() {
            $this->configSmarty->setAssign("role", $_SESSION["role"]);
            $this->configSmarty->setAssign("isLoggedIn", true);
            $this->configSmarty->setDisplay("users/add.tpl");
        }

        function showEditUser() {
            $user = $this->usersModel->getUser(intval($_GET["id"]));
            $this->configSmarty->setAssign("role", $_SESSION["role"]);
            $this->configSmarty->setAssign("isLoggedIn", true);
            $this->configSmarty->setAssign("user", $user);
            $this->configSmarty->setDisplay("users/edit.tpl");
        }

        function showDelUser() {
            $user = $this->usersModel->getUser(intval($_GET["id"]));
            $this->configSmarty->setAssign("role", $_SESSION["role"]);
            $this->configSmarty->setAssign("isLoggedIn", true);
            $this->configSmarty->setAssign("user", $user);
            $this->configSmarty->setDisplay("users/delete.tpl");
        }
    }
?>