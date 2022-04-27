{include file="header.tpl"}

    <form action="index.php?action=edit_product" method="post">
        <div class="container add-product">
            <h2 class="title">Edit Product</h2>
            <input type="hidden" name="product_id" value="{$product['product_id']}">
            <input class="text-box" type="text" name="name" value="{$product['name']}" placeholder="Name" required>
            <!-- <input class="text-box" type="text" name="amount" value="{$product['amount']}" placeholder="Amount" required> -->
            <input class="text-box" type="text" name="supplier" value="{$product['supplier']}" placeholder="Supplier" required>
            <input class="text-box" type="text" name="warehouse" value="{$product['warehouse']}" placeholder="Warehouse" required>
            <input class="text-box" type="text" name="price" value="{$product['price']}" placeholder="Price" required>

            <div class="buttons">
                <input class="button" type="submit" value="Save">
                <a class="button" href="index.php?action=show_products">Cancel</a>
            </div>
        </div>
    </form>
</body>
</html>