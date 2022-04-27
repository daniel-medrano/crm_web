{include file="header.tpl"}

    <form action="index.php?action=edit_vacation" method="post">
        <div class="container add-user">
            <h2 class="title">Edit Vacation</h2>
            <input type="hidden" name="vacation_id" value="{$vacation['vacation_id']}">
            <input class="text-box" type="text" name="days" value="{$vacation['days']}" placeholder="Days" required>
            <input class="text-box" type="date" name="date" value="{$vacation['vacation_date']}" placeholder="Date" required>
        
            <select class="select" name="employee_id" required>
                <option value="" disabled selected>Select employee</option>
                {foreach $employees as $employee}
                    {if $vacation["employee_id"] == $employee['employee_id']}
                        <option value="{$employee['employee_id']}" selected>{$employee["name"]} {$employee["last_name"]}</option>
                    {else}
                        <option value="{$employee['employee_id']}">{$employee["name"]} {$employee["last_name"]}</option>
                    {/if}
                {/foreach}
            </select>

            <div class="buttons">
                <input class="button" type="submit" value="Save">
                <a class="button" href="index.php?action=show_vacations">Cancel</a>
            </div>
        </div>
    </form>
</body>
</html>