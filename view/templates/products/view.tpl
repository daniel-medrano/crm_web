{include file="header.tpl"}
    <div class="container users-view">
        <h2 class="title">Products</h2>
        <div class="buttons">
            <a class="button" href="index.php?action=show_inouts">In/Out</a>
            <a class="button" href="index.php?action=show_add_product">Add</a>
            <select class="select filter"" id="warehousesDropdown">
                <option value="All">All</option>
                {foreach $warehouses as $warehouse}
                    <option value="{$warehouse['warehouse']}">{$warehouse["warehouse"]}</option>
                {/foreach}
            </select>
        </div>
        <div class="table-wrapper">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Amount</th>
                        <th>Supplier</th>
                        <th>Warehouse</th>
                        <th>Price</th>
                        <th>Total Price</th>
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
                            <td>{$product["warehouse"]}</td>
                            <td>{$product["price"]}</td>
                            <td>{$product["total_price"]}</td>
                            <td class="actions">
                                <a href="index.php?action=show_edit_product&id={$product['product_id']}"><img src="img/edit.png" alt=""></a>
                                <a href="index.php?action=show_del_product&id={$product['product_id']}"><img src="img/delete.png" alt=""></a>
                            </td>
                        </tr>
                    {/foreach}
                </tbody>
            </table>
        </div>
    </div>
    <script src="js/filter.js"></script>
</body>
</html>