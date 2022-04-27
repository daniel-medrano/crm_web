{include file="header.tpl"}

    <form action="index.php?action=edit_inout" method="post">
        <div class="container add-product">
            <h2 class="title">Edit In/Out</h2>
            <input type="hidden" name="inout_id" value="{$inOut['inout_id']}">
            <input class="text-box" type="text" name="amount" value="{$inOut['amount']}" placeholder="Amount" required>
            <!-- <input class="text-box" type="text" name="type" value="{$inOut['type']}" placeholder="Type" required> -->
            <input class="text-box" type="text" name="description" value="{$inOut['description']}" placeholder="Description" required>
            <div class="buttons">
                <input class="button" type="submit" value="Save">
                <a class="button" href="index.php?action=show_inouts">Cancel</a>
            </div>
        </div>
    </form>
</body>
</html>

