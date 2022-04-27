{include file="header.tpl"}

<div class="container add-product">
    <h2 class="title">Delete Product</h2>
    <input class="text-box" type="text" name="name" value="{$product['name']}" placeholder="Name" disabled>
    <input class="text-box" type="text" name="amount" value="{$product['amount']}" placeholder="Amount" disabled>
    <input class="text-box" type="text" name="supplier" value="{$product['supplier']}" placeholder="Supplier" disabled>
    <input class="text-box" type="text" name="warehouse" value="{$product['warehouse']}" placeholder="Warehouse" disabled>
    <div class="buttons">
        <a class="button" href="index.php?action=del_product&id={$product['product_id']}">Delete</a>
        <a class="button" href="index.php?action=show_products">Cancel</a>
    </div>
</div>
</body>
</html>