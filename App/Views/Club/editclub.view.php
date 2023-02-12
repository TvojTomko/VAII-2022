<?php
/* @var Club $data */

use App\Models\Club;
?>

<!-- Edit clubs section -->
<div class="w3-container section">
    <h3 class="title"><i class="fa-solid fa-paw w3-jumbo"></i><br>Edit club</h3>
    <div>
        <form name="editform" class="contactform" method="post" action="?c=Club&a=editclub">
            <label>
                <input class="w3-input w3-border login-line" type="text" placeholder="Title" required name="title" value="<?= $data->getTitle() ?>">
            </label>
            <label>
                <input class="w3-input w3-border login-line" type="text" placeholder="Owner" required name="owner" value="<?= $data->getOwner() ?>">
            </label>
            <label>
                <input class="w3-input w3-border login-line" type="date" placeholder="Since" required name="since" value="<?= $data->getSince() ?>">
            </label>
            <label>
                <input class="w3-input w3-border login-line" type="number" placeholder="Number of dogs" required name="number_of_dogs" value="<?= $data->getNumberOfDogs() ?>">
            </label>
            <!--
            <label class="login-label">
                <input class="w3-input w3-border login-line" type="text" placeholder="Breed" required name="breed" value="<?= $data->getBreed() ?>">
            </label>
            -->
            <button class="button-menu mygrey-text login-button" type="submit">
                <i class="fa fa-paper-plane"></i> EDIT
            </button>

            <?php if ($data->getId()) { ?>
                <input type="hidden" name="id" value="<?=$data->getId() ?>">
                <input type="hidden" name="breed" value="<?= $data->getBreed() ?>">
            <?php } ?>
        </form>
    </div>
</div>