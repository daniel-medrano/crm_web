{include file="header.tpl"}

    <div class="container add-user">
        <h2 class="title">Delete Vacation</h2>

        <input class="text-box" type="text" name="days" value="{$vacation['days']}" placeholder="Days" disabled>
        <input class="text-box" type="date" name="date" value="{$vacation['vacation_date']}" placeholder="Date" disabled>
        <input class="text-box" type="text" name="full_name" value="{$vacation['name']} {$vacation['last_name']}" placeholder="Name" disabled>

        <div class="buttons">
            <a class="button" href="index.php?action=del_vacation&id={$vacation['vacation_id']}">Delete</a>
            <a class="button" href="index.php?action=show_vacations">Cancel</a>
        </div>
    </div>
</body>
</html>