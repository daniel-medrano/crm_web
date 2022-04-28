<?php
    require_once "model/ContactsModel.php";

    $action = $_REQUEST["action"];

    switch ($action) {
        case "list_contacts":
            listContacts();
            break;
    }

    function listContacts() {
        header("HTTP/1.1 200 OK");
        $contactsModel = new ContactsModel();
        $user_id = $_REQUEST["id"];
        $contacts = $contactsModel->getContacts($user_id);

        echo json_encode($contacts);
    }
?>