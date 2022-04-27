{include file="header.tpl"}
    <div class="container users-view">
        <h2 class="title">Stock In/Out</h2>
        <div class="buttons">
            <a class="button" href="index.php?action=show_products">Return</a>
            <a class="button" href="index.php?action=show_add_inout">Add</a>
        </div>
        <div class="table-wrapper">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Type</th>
                        <th>Amount</th>
                        <th>Date</th>
                        <th>Product</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    {foreach $inOuts as $inOut}
                        <tr>
                            <td>{$inOut["inout_id"]}</td>
                            {if $inOut["type"] == "Input"}
                                <td><img src="img/increase.png" alt=""></td>
                            {elseif $inOut["type"] == "Output"}
                                <td><img src="img/decrease.png" alt=""></td>
                            {/if}
                            <td>{$inOut["amount"]}</td>
                            <td>{$inOut["date"]}</td>
                            <!-- <td>{$inOut["product"]}</td> -->
                            <td>{$inOut["name"]}</td>
                            <td class="actions">
                                <a href="index.php?action=show_edit_inout&id={$inOut['inout_id']}"><img src="img/edit.png" alt=""></a>
                                <a href="index.php?action=show_del_inout&id={$inOut['inout_id']}"><img src="img/delete.png" alt=""></a>
                            </td>
                        </tr>
                    {/foreach}
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>