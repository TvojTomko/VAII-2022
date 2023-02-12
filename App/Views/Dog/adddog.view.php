<?php
/** @var Club $data */

use App\Models\Club;

?>

<!-- AddDog Section -->
<div class="w3-container section" id="createShow">
    <h1 class="title"><i class="fa-solid fa-paw w3-jumbo"></i><br>Register new dog</h1>
    <p class="center-text">Please type exact information new dog.</p>

    <!--    --><?php //if($data['error'] != "") { ?>
    <!--        <div class="errortext">-->
    <!--            --><?php //= $data['error'] ?>
    <!--        </div>-->
    <!--    --><?php //} ?>

    <form name="createform" class="contactform" method="post" action="?c=Dog&a=adddog">
        <label class="login-label">
            <input class="w3-input w3-border login-line" type="text" placeholder="Name" required name="name">
        </label>
        <label>
            <input class="w3-input w3-border login-line" type="date" placeholder="Birth" required name="birth">
        </label>
        <label class="login-label">
            <input class="w3-input w3-border login-line" type="number" placeholder="Height[cm]" required name="height">
        </label>
        <label class="login-label">
            <input class="w3-input w3-border login-line" type="number" placeholder="Weight[kg]" required name="weight">
        </label>
        <button class="button-menu mygrey-text login-button" type="submit">
            <i class="fa fa-paper-plane"></i> CREATE
        </button>
        <?php if ($data->getId()) { ?>
            <input type="hidden" name="club" value="<?=$data->getId() ?>">
        <?php } ?>
    </form>