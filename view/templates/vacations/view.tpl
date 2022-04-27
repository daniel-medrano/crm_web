{include file="header.tpl"}
    <div class="container users-view">
        <h2 class="title">Vacations</h2>
        <div class="buttons">
            <a class="button" href="index.php?action=show_employees">Return</a>
            <a class="button" href="index.php?action=show_add_vacation">Add</a>
        </div>
        <div class="table-wrapper">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Days</th>
                        <th>Date</th>
                        <th>Employee ID</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    {foreach $vacations as $vacation}
                        <tr>
                            <td>{$vacation["vacation_id"]}</td>
                            <td>{$vacation["days"]}</td>
                            <td>{$vacation["vacation_date"]}</td>
                            <td>{$vacation["employee_id"]}</td>
                            <td class="actions">
                                <a href="index.php?action=show_edit_vacation&id={$vacation['vacation_id']}"><img src="img/edit.png" alt=""></a>
                                <a href="index.php?action=show_del_vacation&id={$vacation['vacation_id']}"><img src="img/delete.png" alt=""></a>
                            </td>
                        </tr>
                    {/foreach}
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>