{include file="header.tpl"}
<div class="container users-view">
    <h2 class="title">Reports</h2> 
    <h2 class="title">Stock's Report</h2>
    <div class="table-wrapper">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Type</th>
                    <th>Amount</th>
                    <th>Date</th>
                    <th>Product</th>
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
                    </tr>
                {/foreach}
            </tbody>
        </table>
    </div>
    <h2 class="title">Payments Per Month</h2>
    <div class="table-wrapper">
        <table>
            <thead>
                <tr>
                    <th>Month</th>
                    <th>Amount</th>         
                </tr>
            </thead>
            <tbody>
                {foreach $payments as $payment}
                    <tr>
                        <td>{$payment["month"]}</td>
                        <td>{$payment["total_amount"]}</td>                 
                    </tr> 
                {/foreach}
            </tbody>
        </table>
    </div>
    <h2 class="title">Client's List</h2> 
    <div class="table-wrapper">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Last Name</th>
                    <th>Email</th> 
                    <th>Relation</th>
                </tr>
            </thead>
            <tbody>
                {foreach $contacts as $contact}
                    <tr>
                        <td>{$contact["contact_id"]}</td>
                        <td>{$contact["name"]}</td>
                        <td>{$contact["last_name"]}</td>
                        <td>{$contact["email"]}</td>
                        <td>{$contact["relation"]}</td>                    
                    </tr>
                {/foreach}
            </tbody>
        </table>
    </div>
    <h2 class="title">User's List</h2>
    <div class="table-wrapper">
        <table> 
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Last Name</th>
                    <th>Username</th>
                    <th>Role</th>
                </tr>
            </thead>
            <tbody>
                {foreach $users as $user}
                    <tr>
                        <td>{$user["user_id"]}</td>
                        <td>{$user["name"]}</td>
                        <td>{$user["last_name"]}</td>
                        <td>{$user["username"]}</td>
                        <td>{$user["role"]}</td>
                    </tr>
                {/foreach}
            </tbody>
        </table>
    </div>
    <br><br><br>
</div>
</body>
</html>