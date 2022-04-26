{include file="header.tpl"}

    <form action="index.php?action=add_product" method="post">
        <div class="container add-product">
            <h2 class="title">Add Product</h2>
            <input class="text-box" type="text" name="name" placeholder="Name" required>
            <input class="text-box" type="text" name="amount" placeholder="Amount" required>
            <input class="text-box" type="text" name="supplier" placeholder="Supplier" required>
            <div class="buttons">
                <input class="button" type="submit" value="Add">
                <a class="button" href="index.php?action=show_products">Cancel</a>
            </div>
        </div>
    </form>
</body>
</html>