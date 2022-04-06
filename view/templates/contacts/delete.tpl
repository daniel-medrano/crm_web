{include file="header.tpl"}

    <div class="container add-user">
        <h2 class="title">Delete Contact</h2>
        <!-- <input class="text-box" type="hidden" name="contact_id" value="{$contact['contact_id']}" disabled> -->
        <input class="text-box" type="text" name="name" value="{$contact['name']}" placeholder="Name" disabled>
        <input class="text-box" type="text" name="last_name" value="{$contact['last_name']}" placeholder="Last Name" disabled>
        <input class="text-box" type="text" name="email" value="{$contact['email']}" placeholder="Email" disabled>
        <input class="text-box" type="text" name="relation" value="{$contact['relation']}" placeholder="Relation" disabled>
        <div class="buttons">
            <a class="button" href="index.php?action=del_contact&id={$contact['contact_id']}">Delete</a>
            <a class="button" href="index.php?action=show_contacts">Cancel</a>
        </div>
    </div>
</body>
</html>