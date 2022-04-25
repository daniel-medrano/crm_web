{include file="header.tpl"}

    <form action="index.php?action=add_position" method="post">
        <div class="container add-user">
            <h2 class="title">Add Position</h2>
            <input class="text-box" type="text" name="position" placeholder="Position" required>
            <input class="text-box" type="text" name="salary" placeholder="Salary" required>
            
            <div class="buttons">
                <input class="button" type="submit" value="Add">
                <a class="button" href="index.php?action=show_positions">Cancel</a>
            </div>
        </div>
    </form>
</body>
</html>