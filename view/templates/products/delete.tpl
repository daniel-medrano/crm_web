{include file="header.tpl"}

    <div class="container add-user">
        <h2 class="title">Delete Employee</h2>
        <!-- <input class="text-box" type="hidden" name="contact_id" value="{$contact['contact_id']}" disabled> -->
        <input class="text-box" type="text" name="name" value="{$employee['name']}" placeholder="Name" disabled>
        <input class="text-box" type="text" name="last_name" value="{$employee['last_name']}" placeholder="Last Name" disabled>
        <input class="text-box" type="text" name="email" value="{$employee['email']}" placeholder="Email" disabled>
        <input class="text-box" type="text" name="position" value="{$employee['position']}" placeholder="Relation" disabled>
        <div class="buttons">
            <a class="button" href="index.php?action=del_employee&id={$employee['employee_id']}">Delete</a>
            <a class="button" href="index.php?action=show_employees">Cancel</a>
        </div>
    </div>
</body>
</html>