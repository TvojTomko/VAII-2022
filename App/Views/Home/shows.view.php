<?php
/** @var \App\Models\Show[] $data */
/** @var string $username  */
use App\Controllers\Auth;

$username = Auth::getName()
?>
<div class="w3-container section">
    <form>
        <div>
            <?php foreach ($data as $item) { ?>
                <div class="shows">
                    <img src="/checkpoint2/public/images/FCI_logo.png" class="logo">
                    <label class="shows_text">Title:</label> <?=$item->getTitle()?>
                    <br>
                    <label class="shows_text">Location:</label> <?=$item->getLocation()?>
                    <br>
                    <label class="shows_text">Date:</label> <?=$item->getDate()?>
                    <?php if(Auth::isAdmin()) { ?>
                        <button>Edit</button>
                        <button>Delete</button>
                    <?php echo "Admin je prihlaseny"; }?>
                </div>
            <?php }?>
        </div>
    </form>
</div>
