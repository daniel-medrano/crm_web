{include file="header.tpl"}
    <div class="container users-view">
        <a class="button" href="index.php?action=show_add_user">Add</a>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Last Name</th>
                    <th>Username</th>
                    <th>Role</th>
                    <th>Actions</th>
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
                        <td class="actions">
                            <a href="index.php?action=show_edit_user&id={$user['user_id']}"><img src="img/edit.png" alt=""></a>
                            <a href="index.php?action=show_del_user&id={$user['user_id']}"><img src="img/delete.png" alt=""></a>
                        </td>
                    </tr>
                {/foreach}
            </tbody>
        </table>
    </div>
</body>
</html>