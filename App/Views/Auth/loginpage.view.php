<?php
/** @var Array $data */
?>

<!-- Login Section -->
<div class="w3-container section" id="login">
    <h1 class="title"><i class="fa-solid fa-paw w3-jumbo"></i><br>Login</h1>
    <p class="center-text">Please type your email and password or register a new account</p>

    <?php if($data['error'] != "") { ?>
        <div class="errortext">
            <?= $data['error'] ?>
        </div>
    <?php } ?>

    <form class="contactform" method="post" action="?c=Auth&a=login">
        <label>
            <input class="w3-input w3-border login-line" type="text" placeholder="Username" required name="username">
        </label>
        <label>
            <input class="w3-input w3-border login-line" type="text" placeholder="Password" required name="password">
        </label>
        <button class="button-menu mygrey-text login-button" type="submit">
            <i class="fa fa-paper-plane"></i> LOG IN
        </button>
        <a href="?c=auth&a=registerpage" class="right register">Not have an account? Register now</a>
    </form>
</div>
