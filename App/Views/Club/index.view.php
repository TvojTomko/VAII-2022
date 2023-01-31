<?php
/** @var \App\Models\Club[] $data */
/** @var string $username  */
use App\Controllers\Auth;

$username = Auth::getName()
?>
<div class="w3-container section">
    <form>
        <div>
            <?php foreach ($data as $item) { ?>
                <div class="shows">
                    <img src="/checkpoint2/public/images/dog-paw_silhouette.jpg" class="logo">
                    <label class="shows_text">Title:</label> <?=$item->getTitle()?>
                    <br>
                    <label class="shows_text">Owner:</label> <?=$item->getOwner()?>
                    <br>
                    <label class="shows_text">Since:</label> <?=$item->getSince()?>
                    <br>
                    <label class="shows_text">Number of dogs</label> <?=$item->getNumberOfDogs()?>
                    <br>
                    <label class="shows_text lastline">Breed:</label> <?=$item->getBreed()?>
                    <?php if(Auth::isAdmin()) { ?>
                        <br>
                        <button class="admin_show_button_delete right">Delete</button>
                        <a class="lastline"><?php echo "Admin is logged in."; }?></a>
                </div>
            <?php }?>
        </div>
        <?php if(Auth::isAdmin()) { ?>
            <a href="?c=Home&a=createshows" class="admin_show_button_create">Create</a>
        <?php }?>
    </form>
</div>
