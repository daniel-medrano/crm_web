{include file="header.tpl"}

    <form action="index.php?action=edit_employee" method="post">
        <div class="container add-user">
            <h2 class="title">Edit Employee</h2>
            <input type="hidden" name="employee_id" value="{$employee['employee_id']}">
            <input class="text-box" type="text" name="name" value="{$employee['name']}" placeholder="Name" required>
            <input class="text-box" type="text" name="last_name" value="{$employee['last_name']}" placeholder="Last Name" required>
            <input class="text-box" type="text" name="email" value="{$employee['email']}" placeholder="Email" required>
            
            <select class="select" name="position" required>
                <option disabled>Select position</option>
                <option value="Client">Client</option>
                <option value="Lead" selected>Lead</option>
            </select>
            <div class="buttons">
                <input class="button" type="submit" value="Save">
                <a class="button" href="index.php?action=show_employees">Cancel</a>
            </div>
        </div>
    </form>
</body>
</html>