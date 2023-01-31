<?php
/** @var Array $data */
?>

<!-- CreateShows Section -->
<div class="w3-container section" id="createShow">
    <h1 class="title"><i class="fa-solid fa-paw w3-jumbo"></i><br>Create club</h1>
    <p class="center-text">Please type exact information about club.</p>

    <!--    --><?php //if($data['error'] != "") { ?>
    <!--        <div class="errortext">-->
    <!--            --><?php //= $data['error'] ?>
    <!--        </div>-->
    <!--    --><?php //} ?>

    <form name="createform" class="contactform" method="post" action="?c=Club&a=createclub">
        <label class="login-label">
            <input class="w3-input w3-border login-line" type="text" placeholder="Title" required name="title">
        </label>
        <label>
            <input class="w3-input w3-border login-line" type="text" placeholder="Owner" required name="owner">
        </label>
        <label>
            <input class="w3-input w3-border login-line" type="date" placeholder="Since" required name="since">
        </label>
        <label>
            <input class="w3-input w3-border login-line" type="number" placeholder="Number of dogs" required name="number_of_dogs">
        </label>
        <label>
            <input class="w3-input w3-border login-line" type="number" placeholder="Breed_id" required name="breed">
        </label>
        <button class="button-menu mygrey-text login-button" type="submit">
            <i class="fa fa-paper-plane"></i> CREATE
        </button>
    </form>
</div>