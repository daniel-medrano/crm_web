{include file="header.tpl"}

    <div class="container add-user">
        <h2 class="title">Delete Position</h2>
        
        <input class="text-box" type="text" name="position" value="{$position['position']}" placeholder="Position" disabled>
        <input class="text-box" type="text" name="salary" value="{$position['salary']}" placeholder="Salary" disabled>
        <div class="buttons">
            <a class="button" href="index.php?action=del_position&id={$position['position_id']}">Delete</a>
            <a class="button" href="index.php?action=show_positions">Cancel</a>
        </div>
    </div>
</body>
</html>