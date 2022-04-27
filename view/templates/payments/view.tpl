{include file="header.tpl"}
    <div class="container users-view">
        <h2 class="title">Payments</h2>
        <div class="buttons">
            <a class="button" href="index.php?action=show_employees">Return</a>
            <a class="button" href="index.php?action=show_cal_payment">Calculate</a>
        </div>
        <div class="table-wrapper">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Date</th>
                        <th>Amount</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    {foreach $payments as $payment}
                        <tr>
                            <td>{$payment["payment_id"]}</td>
                            <td>{$payment["date"]}</td>
                            <td>{$payment["amount"]}</td>
                            <td class="actions">
                                <a href="index.php?action=show_del_payment&id={$payment['payment_id']}"><img src="img/delete.png" alt=""></a>
                            </td>
                        </tr>
                    {/foreach}
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>