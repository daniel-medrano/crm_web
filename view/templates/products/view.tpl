{include file="header.tpl"}
    <div class="container users-view">
        <div class="buttons">
            <a class="button" href="index.php?action=show_inouts">In/Out</a>
            <a class="button" href="index.php?action=show_add_product">Add</a>
        </div>
        <table>
            <thead>
                <tr>
                    <th>Product ID</th>
                    <th>Name</th>
                    <th>Amount</th>
                    <th>Supplier</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                {foreach $products as $product}
                    <tr>
                        <td>{$product["product_id"]}</td>
                        <td>{$product["name"]}</td>
                        <td>{$product["amount"]}</td>
                        <td>{$product["supplier"]}</td>
                        <td class="actions">
                            <a href="index.php?action=show_edit_product&id={$product['product_id']}"><img src="img/edit.png" alt=""></a>
                            <a href="index.php?action=show_del_product&id={$product['product_id']}"><img src="img/delete.png" alt=""></a>
                        </td>
                    </tr>
                {/foreach}
            </tbody>
        </table>
    </div>
</body>
</html>