<?php
/** @var \App\Models\Show[] $data */
/** @var string $username  */
use App\Controllers\Auth;

$username = Auth::getName()
?>

<!-- Shows section -->
<div class="w3-container section">
    <div class="w3-container" id="show">
        <h1 class="title"><i class="fa-solid fa-paw w3-jumbo"></i><br>Shows</h1>
        <p class="w3-center w3-large">List of upcoming shows</p>
    </div>
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
                        <a href="#" class="admin_show_button_edit right" onclick="">Edit</a>
                        <a href="#" class="admin_show_button_delete right" onclick="return confirmDeleteShow(<?=$item->getId()?>)">Delete</a>
                    <?php }?>
                </div>
            <?php }?>
        </div>
        <?php if(Auth::isAdmin()) { ?>
            <a href="?c=Show&a=createshowspage" class="admin_show_button_create">Create</a>
            <label class="right admin_text">Admin is logged in</label>
        <?php }?>
    </form>
</div>
