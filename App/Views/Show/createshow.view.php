<?php
/** @var Array $data */
?>

<!-- CreateShows Section -->
<div class="w3-container section" id="createShow">
    <h1 class="title"><i class="fa-solid fa-paw w3-jumbo"></i><br>Create show</h1>
    <p class="center-text">Please type exact information about show.</p>

    <?php if($data != null && $data['error'] != "") { ?>
        <div class="errortext">
            <?= $data['error'] ?>
        </div>
    <?php } ?>

    <form name="createform" class="contactform" method="post" action="?c=Show&a=createshow">
        <label class="login-label">
            <input class="w3-input w3-border login-line" type="text" placeholder="Title" name="title">
        </label>
        <label>
            <input class="w3-input w3-border login-line" type="text" placeholder="Location" required name="location">
        </label>
        <label>
            <input class="w3-input w3-border login-line" type="date" placeholder="Date" required name="date">
        </label>
        <button class="button-menu mygrey-text login-button" type="submit">
            <i class="fa fa-paper-plane"></i> CREATE
        </button>
    </form>
</div>