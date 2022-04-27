{include file="header.tpl"}
    <div class="container users-view">
        <h2 class="title">Employees</h2>
        <div class="buttons">
            <a class="button" href="index.php?action=show_payments">Payments</a>
            <a class="button" href="index.php?action=show_vacations">Vacations</a>
            <a class="button" href="index.php?action=show_positions">Positions</a>
            <a class="button" href="index.php?action=show_add_employee">Add</a>
        </div>
        <div class="table-wrapper">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Position</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    {foreach $employees as $employee}
                        <tr>
                            <td>{$employee["employee_id"]}</td>
                            <td>{$employee["name"]}</td>
                            <td>{$employee["last_name"]}</td>
                            <td>{$employee["email"]}</td>
                            <td>{$employee["position"]}</td>
                            <td class="actions">
                                <a href="index.php?action=show_edit_employee&id={$employee['employee_id']}"><img src="img/edit.png" alt=""></a>
                                <a href="index.php?action=show_del_employee&id={$employee['employee_id']}"><img src="img/delete.png" alt=""></a>
                            </td>
                        </tr>
                    {/foreach}
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>