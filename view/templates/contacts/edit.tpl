{include file="header.tpl"}

    <form action="index.php?action=edit_contact" method="post">
        <div class="container add-user">
            <h2 class="title">Edit Contact</h2>
            <input type="hidden" name="contact_id" value="{$contact['contact_id']}">
            <input class="text-box" type="text" name="name" value="{$contact['name']}" placeholder="Name" required>
            <input class="text-box" type="text" name="last_name" value="{$contact['last_name']}" placeholder="Last Name" required>
            <input class="text-box" type="text" name="email" value="{$contact['email']}" placeholder="Email" required>
            <select class="select" name="relation" required>
                <option disabled>Select relation</option>
                {if $contact["relation"] == "Client"}
                    <option value="Client" selected>Client</option>
                    <option value="Lead">Lead</option>
                {else}
                    <option value="Client">Client</option>
                    <option value="Lead" selected>Lead</option>
                {/if}
            </select>
            <div class="buttons">
                <input class="button" type="submit" value="Save">
                <a class="button" href="index.php?action=show_contacts">Cancel</a>
            </div>
        </div>
    </form>
</body>
</html>