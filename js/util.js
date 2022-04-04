const signupPopup = document.querySelector("#popup");
const overlay = document.querySelector("#overlay-popup");
const closeModalButton = document.querySelector("#close-button");

requestUsersList = () => {
    var settings = {
        "url": "http://localhost/crm_web/ws/ws_users.php?action=list_users",
        "method": "GET",
        "timeout": 0,
    };
      
    $.ajax(settings).done(response => {
        console.log(response);
        $("#container").html(response);
    });
}

requestUser = id_user => {
    var settings = {
        "url": "http://localhost/crm_web/ws/ws_users.php?action=request_user&user_id=" + id_user,
        "method": "GET",
        "timeout": 0,
    };

    $.ajax(settings).done(response => {
        let user = JSON.parse(response);
        openSignupPopup(user);
    });
}

deleteUser = id_user => {
    var settings = {
        "url": "http://localhost/crm_web/ws/ws_users.php?action=delete_user&user_id=" + id_user,
        "method": "GET",
        "timeout": 0,
    };
      
    $.ajax(settings).done(response => {
        console.log(response);
        $("#container").html("");
        requestUsersList();
    });
}

// POP-UP

openSignupPopup = user_json => {
    let inputs = signupPopup.querySelectorAll("input, select");
    inputs.forEach(input => {
        switch (input.name) {
            case "name":
                input.value = user_json.name;
                break;
            case "last_name":
                input.value = user_json.last_name;
                break;
            case "user":
                input.value = user_json.user;
                break;
            case "role":
                input.value = user_json.role;
                break;
            case "id_user":
                // console.log("ID USER: " + user_json.id_user);
                input.value = user_json.id_user;
                break;
        }
    });
    signupPopup.classList.add("active");
    overlay.classList.add("active");
}

closeSignupPopup = () => {
    signupPopup.classList.remove("active");
    overlay.classList.remove("active");
}

overlay.addEventListener("click", closeSignupPopup);

closeModalButton.addEventListener("click", closeSignupPopup);
