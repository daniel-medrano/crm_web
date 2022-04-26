{include file="header.tpl"}

    <form action="index.php?action=add_inout" method="post">
        <div class="container add-product">
            <h2 class="title">Stock In/Out</h2>
            <input class="text-box" type="text" name="amount" placeholder="Amount" required>
            <select class="select" name="type" required>
                <option disabled selected>Select type</option>
                <option value="Input">Input</option>
                <option value="Output">Output</option>
            </select>
            <input class="text-box" type="text" name="description" placeholder="Description" required>
            <input class="text-box" type="date" name="date" required>
            <select class="select" name="product_id" required>
                <option disabled selected>Select product</option>
                {foreach $products as $product}
                    <option value="{$product['product_id']}">{$product["name"]}</option>
                {/foreach}
            </select>
            <div class="buttons">
                <input class="button" type="submit" value="Add">
                <a class="button" href="index.php?action=show_inouts">Cancel</a>
            </div>
        </div>
    </form>
</body>
</html>