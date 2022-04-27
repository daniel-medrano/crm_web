{include file="header.tpl"}
    <div class="container users-view">
        <h2 class="title">Contacts</h2>
        <a class="button" href="index.php?action=show_add_contact">Add</a>
        <div class="table-wrapper">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Relation</th>
                        <th>Actions</th>
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
                            <td class="actions">
                                <a href="index.php?action=show_edit_contact&id={$contact['contact_id']}"><img src="img/edit.png" alt=""></a>
                                <a href="index.php?action=show_del_contact&id={$contact['contact_id']}"><img src="img/delete.png" alt=""></a>
                            </td>
                        </tr>
                    {/foreach}
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>