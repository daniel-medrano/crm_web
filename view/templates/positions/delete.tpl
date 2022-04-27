{include file="header.tpl"}

    <div class="container add-user">
        <h2 class="title">Delete Position</h2>
        
        <input class="text-box" type="text" name="position" value="{$position['position']}" placeholder="Position" disabled>
        <input class="text-box" type="text" name="salary" value="{$position['salary']}" placeholder="Salary" disabled>
        {if $position["times_linked"] > 0}
            <div class="note">
                Can't delete because employees ({$position["times_linked"]}) using this position.
            </div>
        {/if}
        <div class="buttons">
            {if $position["times_linked"] == 0}
                <a class="button" href="index.php?action=del_position&id={$position['position_id']}">Delete</a>
            {else}
                <a class="button disabled" href="#">Delete</a>
            {/if}
            <a class="button" href="index.php?action=show_positions">Cancel</a>
        </div>
    </div>
</body>
</html>