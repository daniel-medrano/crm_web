{include file="header.tpl"}

    <form action="index.php?action=edit_position" method="post">
        <div class="container add-user">
            <h2 class="title">Edit Position</h2>
            <input type="hidden" name="position_id" value="{$position['position_id']}">
            <input class="text-box" type="text" name="position" value="{$position['position']}" placeholder="Position" required>
            <input class="text-box" type="text" name="salary" value="{$position['salary']}" placeholder="Salary" required>
            
            <div class="buttons">
                <input class="button" type="submit" value="Save">
                <a class="button" href="index.php?action=show_positions">Cancel</a>
            </div>
        </div>
    </form>
</body>
</html>