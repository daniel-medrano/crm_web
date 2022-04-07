<?php

    session_start();

    require_once "model/UsersModel.php";
    require_once "model/ContactsModel.php";
    require_once "libs/smarty-4.1.0/Config.php";

    class Control {
        private $configSmarty;
        private $action;
        private $usersModel;

        function __construct() {
            $this->configSmarty = new Config();
            $this->action = null;
            $this->usersModel = new UsersModel();
            $this->contactsModel = new ContactsModel();
        }
        // Para debuguear.
        function console_log( $data ){
            echo '<script>';
            echo 'console.log('. json_encode( $data ) .')';
            echo '</script>';
        }

        function index() {
            if (isset($_REQUEST["action"])) {
                $this->action = $_REQUEST["action"];
            }

            $this->checkSession();

            switch ($this->action) {
                case "login":
                    $this->checkLogin();
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
                case "add_contact":
                    $this->addContact();
                    break;
                case "edit_contact":
                    $this->editContact();
                    break;
                case "del_contact":
                    $this->deleteContact();
                    break;
                case "show_add_contact":
                    $this->showAddContact();
                    break;
                case "show_edit_contact":
                    $this->showEditContact();
                    break;
                case "show_del_contact":
                    $this->showDelContact();
                    break;
                case "show_contacts":
                    $this->showContacts();
                    break;
                default:
                    if (isset($_SESSION["user_id"])) {
                        $this->configSmarty->setAssign("role", $_SESSION["role_id"]);
                        $this->configSmarty->setAssign("isLoggedIn", true);
                        $this->configSmarty->setDisplay("dashboard.tpl");
                    } else {
                        $this->configSmarty->setAssign("role", null);
                        $this->configSmarty->setAssign("isLoggedIn", false);
                        $this->configSmarty->setDisplay("home.tpl");
                    }
                    break;
            }
        }

        //------------------------------------------------------------------------
        // HOME - MÉTODOS PARA LOGUEARSE Y REGISTRARSE
        //------------------------------------------------------------------------

        // Valida el user y password del usuario para otorgar acceso o no.
        function checkLogin() {
            // Se recuperan el user y el password del POST.
            $username = $_POST["username"];
            $password = $_POST["password"];
            // Se usa el model para validar los datos y devuelve una array con el registro de la BD.
            $results = $this->usersModel->validateLogin($username, $password);
            // Se valida si devolvio algo, si no devolvio nada significa que el username o password son incorrectos o inexistentes.
            if (sizeof($results) != 0) {
                // Se guardan los datos del registro en la sesión.
                $_SESSION["username"] = $username;
                $_SESSION["user_id"] = $results[0]["user_id"];
                $_SESSION["name"] = $results[0]["name"];
                $_SESSION["role_id"] = $results[0]["role_id"];
                // Se le manda el view o la vista al usuario.
                if (isset($_SESSION["user_id"])) {
                    $this->configSmarty->setAssign("role", $_SESSION["role_id"]);
                    $this->configSmarty->setAssign("isLoggedIn", true);
                } else {
                    $this->configSmarty->setAssign("role", null);
                    $this->configSmarty->setAssign("isLoggedIn", false);
                }
                $this->configSmarty->setDisplay("dashboard.tpl");
            } else {
                $this->configSmarty->setDisplay("login.tpl");
            }
        }
        // Crea un nuevo usuario con el role por default de usuario, solo el admin puede modificar el role.
        function registerUser() {
            // Se obtienen los datos del POST.
            $name = $_POST["name"];
            $last_name = $_POST["last_name"];
            $username = $_POST["username"];
            $password = $_POST["password"];
            // $role = $_POST["role"];
            // Con ayuda del modelo se crea el usuario.
            $registered = $this->usersModel->create($name, $last_name, $username, $password, 2);
            // Se verifica si el usuario se creo y muestra en el view lo que corresponda.
            if ($registered) {
                $this->showLogin();
            } else {
                $this->showSignup();
            }
        }

        function checkSession() {
            if (!isset($_SESSION["time"])) {
                $_SESSION["time"] = time();

            } else if (time() - $_SESSION["time"] > 300) {
                session_destroy();
                header("Location: index.php");
                exit;
            }
            $_SESSION["time"] = time();
        }

        //------------------------------------------------------------------------
        // USERS - MÉTODOS PARA ADMINISTRAR LOS USUARIOS
        //------------------------------------------------------------------------

        // Crea un nuevo usuario, para el administrador.
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
        // Actualiza el registro de un usuario.
        function editUser() {
            // Se obtienen los datos del POST.
            $id = intval($_POST["user_id"]);
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
        // Elimina el registro de un usuario.
        function deleteUser() {
            $deleted = $this->usersModel->delete($_GET["id"]);
            if ($deleted) {
                $this->showUsers();
            }
        }

        //------------------------------------------------------------------------
        // CONTACTS - MÉTODOS PARA ADMINISTRAR LOS CONTACTOS - TO-DO
        //------------------------------------------------------------------------

        function addContact() {
            $name = $_POST["name"];
            $last_name = $_POST["last_name"];
            $email = $_POST["email"];
            $relation = $_POST["relation"];
            $user_id = $_SESSION["user_id"];
            $created = $this->contactsModel->create($name, $last_name, $email, $relation, $user_id);

            if ($created) {
                $this->showContacts();
            }
        }
        // Actualiza el registro de un contacto.
        function editContact() {
            // Se obtienen los datos del POST.
            $contact_id = intval($_POST["contact_id"]);
            $name = $_POST["name"];
            $last_name = $_POST["last_name"];
            $email = $_POST["email"];
            $relation = $_POST["relation"];
            // Con ayuda del modelo se crea el contacto.
            $updated = $this->contactsModel->update($contact_id, $name, $last_name, $email, $relation);

            if ($updated) {
                $this->showContacts();
            }
        }
        // Elimina el registro de un usuario.
        function deleteContact() {
            $deleted = $this->contactsModel->delete($_GET["id"]);
            if ($deleted) {
                $this->showContacts();
            }
        }


        //------------------------------------------------------------------------
        // MÉTODOS PARA EL VIEW 
        //------------------------------------------------------------------------

        // Muestra la pagina para registrarse y crear un usuario.
        function showSignup() {
            $this->configSmarty->setDisplay("signup.tpl");
        }
        // Muestra la pagina para acceder a la plataforma.
        function showLogin() {
            $this->configSmarty->setDisplay("login.tpl");
        }

        //------------------------------------------------------------------------
        // USERS VIEW
        //------------------------------------------------------------------------

        // Muestra la pagina con la tabla que contiene todos los usuarios.
        function showUsers() {
            $this->configSmarty->setAssign("role", $_SESSION["role_id"]);
            $this->configSmarty->setAssign("isLoggedIn", true);
            $this->configSmarty->setAssign("users", $this->usersModel->getUsers());
            $this->configSmarty->setDisplay("users/view.tpl");
        }
        // Muestra la pagina para crear un usuario.
        function showAddUser() {
            $this->configSmarty->setAssign("role", $_SESSION["role_id"]);
            $this->configSmarty->setAssign("isLoggedIn", true);
            $this->configSmarty->setDisplay("users/add.tpl");
        }
        // Muestra la pagina para editar un usuario.
        function showEditUser() {
            $user = $this->usersModel->getUser(intval($_GET["id"]));
            $this->configSmarty->setAssign("role", $_SESSION["role_id"]);
            $this->configSmarty->setAssign("isLoggedIn", true);
            $this->configSmarty->setAssign("user", $user);
            $this->configSmarty->setDisplay("users/edit.tpl");
        }
        // Muestra la pagina de confirmación para eliminar el usuario.
        function showDelUser() {
            $user = $this->usersModel->getUser(intval($_GET["id"]));
            $this->configSmarty->setAssign("role", $_SESSION["role_id"]);
            $this->configSmarty->setAssign("isLoggedIn", true);
            $this->configSmarty->setAssign("user", $user);
            $this->configSmarty->setDisplay("users/delete.tpl");
        }

        //------------------------------------------------------------------------
        // CONTACTS VIEW
        //------------------------------------------------------------------------

        // Muestra la pagina con la tabla que contiene todos los contatos.
        function showContacts() {
            $this->configSmarty->setAssign("role", $_SESSION["role_id"]);
            $this->configSmarty->setAssign("isLoggedIn", true);
            $this->configSmarty->setAssign("contacts", $this->contactsModel->getContacts($_SESSION["user_id"]));
            $this->configSmarty->setDisplay("contacts/view.tpl");
        }
        // Muestra la pagina para crear un contato.
        function showAddContact() {
            $this->configSmarty->setAssign("role", $_SESSION["role_id"]);
            $this->configSmarty->setAssign("isLoggedIn", true);
            $this->configSmarty->setDisplay("contacts/add.tpl");
        }
        // Muestra la pagina para editar un contato.
        function showEditContact() {
            $contact = $this->contactsModel->getContact(intval($_GET["id"]), $_SESSION["user_id"]);
            $this->configSmarty->setAssign("role", $_SESSION["role_id"]);
            $this->configSmarty->setAssign("isLoggedIn", true);
            $this->configSmarty->setAssign("contact", $contact);
            $this->configSmarty->setDisplay("contacts/edit.tpl");
        }
        // Muestra la pagina de confirmación para eliminar el contato.
        function showDelContact() {
            $contact = $this->contactsModel->getContact(intval($_GET["id"]), $_SESSION["user_id"]);
            $this->configSmarty->setAssign("role", $_SESSION["role_id"]);
            $this->configSmarty->setAssign("isLoggedIn", true);
            $this->configSmarty->setAssign("contact", $contact);
            $this->configSmarty->setDisplay("contacts/delete.tpl");
        }
        
    }
?>