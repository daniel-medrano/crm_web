{include file="header.tpl"}

<div class="container add-product">
    <h2 class="title">Delete Product</h2>
    <input class="text-box" type="text" name="product_id" value="{$inOut['inout_id']}" placeholder="Product Id" disabled>
    <input class="text-box" type="text" name="amount" value="{$inOut['amount']}" placeholder="Name" disabled>
    <input class="text-box" type="text" name="type" value="{$inOut['type']}" placeholder="Amount" disabled>
    <input class="text-box" type="text" name="description" value="{$inOut['description']}" placeholder="Description" disabled>
    <div class="buttons">
        <a class="button" href="index.php?action=del_inout&id={$inOut['inout_id']}">Delete</a>
        <a class="button" href="index.php?action=show_inouts">Cancel</a>
    </div>
</div>
</body>
</html>