{include file="header.tpl"}

    <form action="index.php?action=add_vacation" method="post">
        <div class="container add-user">
            <h2 class="title">Add Vacation</h2>
            <input class="text-box" type="text" name="days" placeholder="Days" required>
            <input class="text-box" type="date" name="date" placeholder="Date" required>
            <select class="select" name="employee_id" required>
                <option disabled selected>Select employee</option>
                {foreach $employees as $employee}
                    <option value="{$employee['employee_id']}">{$employee["name"]} {$employee["last_name"]}</option>
                {/foreach}
            </select>
            <div class="buttons">
                <input class="button" type="submit" value="Add">
                <a class="button" href="index.php?action=show_vacations">Cancel</a>
            </div>
        </div>
    </form>
</body>
</html>