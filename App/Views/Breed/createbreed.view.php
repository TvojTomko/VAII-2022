<?php
/** @var Array $data */
?>

<!-- CreateBreed Section -->
<div class="w3-container section" id="createShow">
    <h1 class="title"><i class="fa-solid fa-paw w3-jumbo"></i><br>Create new breed</h1>
    <p class="center-text">Please type exact information new dog breed.</p>

    <?php if($data != null && $data['error'] != "") { ?>
        <div class="errortext">
            <?= $data['error'] ?>
        </div>
    <?php } ?>

    <form name="createform" class="contactform" method="post" action="?c=Breed&a=createbreeds">
        <label class="login-label">
            <input class="w3-input w3-border login-line" type="text" placeholder="Name" required name="name">
        </label>
        <label>
            <select id="section" name="section" class="w3-input w3-border login-line">
                <option value="working group">Working group</option>
                <option value="herding group">Herding group</option>
                <option value="hound group">Hound group</option>
                <option value="sporting group">Sporting group</option>
                <option value="non-sporting group">Non-sporting group</option>
                <option value="toy group">Toy group</option>
                <option value="terrier group">Terrier group</option>
            </select>
        </label>
        <label>
            <input class="w3-input w3-border login-line" type="text" placeholder="Country" required name="country">
        </label>
        <button class="button-menu mygrey-text login-button" type="submit">
            <i class="fa fa-paper-plane"></i> CREATE
        </button>
    </form>
</div>