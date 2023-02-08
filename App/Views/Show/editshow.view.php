<?php
/* @var \App\Models\Show $data */
?>

<!-- EditShows Section -->
<div class="w3-container section" id="editShow">
    <h1 class="title"><i class="fa-solid fa-paw w3-jumbo"></i><br>Edit show</h1>
    <p class="center-text">Edit information about show.</p>

    <form name="createform" class="contactform" method="post" action="?c=Show&a=editshow">
        <label class="login-label">
            <input class="w3-input w3-border login-line" type="text" placeholder="Title" required name="title" value="<?= $data->getTitle() ?>">
        </label>
        <label>
            <input class="w3-input w3-border login-line" type="text" placeholder="Location" required name="location" value="<?= $data->getLocation() ?>">
        </label>
        <label>
            <input class="w3-input w3-border login-line" type="date" placeholder="Date" required name="date" value="<?= $data->getDate() ?>">
        </label>
        <button class="button-menu mygrey-text login-button" type="submit">
            <i class="fa fa-paper-plane"></i> EDIT
        </button>

        <?php if ($data->getId()) { ?>
            <input type="hidden" name="id" value="<?=$data->getId() ?>">
        <?php } ?>
    </form>
</div>