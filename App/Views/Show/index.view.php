<?php
/** @var \App\Models\Show[] $data */
/** @var string $username  */
use App\Controllers\Auth;

$username = Auth::getName()
?>

<!-- Shows section -->
<div class="w3-container section">
    <form>
        <div>
            <?php foreach ($data as $item) { ?>
                <div class="shows">
                    <img alt="fci" src="/checkpoint2/public/images/FCI_logo.png" class="logo">
                    <label class="shows_text">Title:</label> <?=$item->getTitle()?>
                    <br>
                    <label class="shows_text">Location:</label> <?=$item->getLocation()?>
                    <br>
                    <label class="shows_text">Date:</label> <?=$item->getDate()?>
                    <?php if(Auth::isAdmin()) { ?>
                        <button class="admin_show_button_delete right">Delete</button>
                    <?php echo "Admin is logged in."; }?>
                </div>
            <?php }?>
        </div>
        <?php if(Auth::isAdmin()) { ?>
        <a href="?c=Show&a=createshowspage" class="admin_show_button_create">Create</a>
        <?php }?>
    </form>
</div>
