{include file="header.tpl"}

    <form action="index.php?action=add_payment" method="post">
        <div class="container add-user">
            <h2 class="title">Payment Details</h2>
            <input class="text-box" type="date" name="date" placeholder="Date" required>
            <input class="text-box" type="hidden" name="amount" value="{$salary_payment}" placeholder="amount">
            <input class="text-box" type="text" name="amount" value="{$salary_payment}" placeholder="amount" disabled>
            <div class="buttons">
                <input class="button" type="submit" value="Pay">
                <a class="button" href="index.php?action=show_payments">Cancel</a>
            </div>
        </div>
    </form>
</body>
</html>