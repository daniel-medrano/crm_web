{include file="header.tpl"}

    <div class="container add-user">
        <h2 class="title">Delete Payment</h2>
        <input class="text-box" type="date" name="date" value="{$payment['date']}" placeholder="Date" disabled>
        <input class="text-box" type="text" name="amount" value="{$payment['amount']}" placeholder="Amount" disabled>
        <div class="buttons">
            <a class="button" href="index.php?action=del_payment&id={$payment['payment_id']}">Delete</a>
            <a class="button" href="index.php?action=show_payments">Cancel</a>
        </div>
    </div>
</body>
</html>
