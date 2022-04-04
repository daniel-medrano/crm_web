{include file="header.tpl"}
    <div class="users-view">
        <a href="index.php?action=show_add_user">Add</a>
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
                        <td>{$user["id_user"]}</td>
                        <td>{$user["name"]}</td>
                        <td>{$user["last_name"]}</td>
                        <td>{$user["username"]}</td>
                        <td>{$user["role"]}</td>
                        <td><a href="index.php?action=show_edit_user&id={$user['id_user']}">Edit</a> <a href="index.php?action=show_del_user&id={$user['id_user']}">Delete</a></td>
                    </tr>
                {/foreach}
    
            </tbody>
        </table>

    </div>
</body>
</html>