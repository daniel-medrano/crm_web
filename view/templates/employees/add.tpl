{include file="header.tpl"}

    <form action="index.php?action=add_employee" method="post">
        <div class="container add-user">
            <h2 class="title">Add Employees</h2>
            <input class="text-box" type="text" name="name" placeholder="Name" required>
            <input class="text-box" type="text" name="last_name" placeholder="Last Name" required>
            <input class="text-box" type="text" name="email" placeholder="Email" required>
            
            <select class="select" name="position" required>
                <option value="" disabled selected>Select position</option>
                {foreach $positions as $position}
                    <option value="{$position['position_id']}">{$position["position"]}</option>
                {/foreach}
            </select>
            <div class="buttons">
                <input class="button" type="submit" value="Add">
                <a class="button" href="index.php?action=show_employees">Cancel</a>
            </div>
        </div>
    </form>
</body>
</html>