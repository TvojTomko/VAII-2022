<?php
/** @var Array $data */
?>

<!-- CreateBreed Section -->
<div class="w3-container section" id="createShow">
    <h1 class="title"><i class="fa-solid fa-paw w3-jumbo"></i><br>Create show</h1>
    <p class="center-text">Please type exact information about show.</p>

<!--    --><?php //if($data['error'] != "") { ?>
<!--        <div class="errortext">-->
<!--            --><?php //= $data['error'] ?>
<!--        </div>-->
<!--    --><?php //} ?>

    <form name="createform" class="contactform" method="post" action="?c=Breed&a=createbreed">
        <label class="login-label">
            <input class="w3-input w3-border login-line" type="text" placeholder="Name" required name="name">
        </label>
        <label>
            <input class="w3-input w3-border login-line" type="text" placeholder="Section" required name="section">
        </label>
        <label>
            <input class="w3-input w3-border login-line" type="text" placeholder="Country" required name="country">
        </label>
        <button class="button-menu mygrey-text login-button" type="submit">
            <i class="fa fa-paper-plane"></i> CREATE
        </button>
    </form>
</div>