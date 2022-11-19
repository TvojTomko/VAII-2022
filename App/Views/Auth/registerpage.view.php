<?php /** @var Array $data */ ?>

<!-- REGISTER section -->
<div class="w3-container w3-light-grey" id="register">
    <h3 class="title"><i class="fa-solid fa-paw w3-jumbo"></i><br>REGISTER</h3>
    <p class="center-text">Create your account</p>
    <div>
        <?php if($data['error'] != "") { ?>
            <div class="errortext">
                <?= $data['error'] ?>
            </div>
        <?php } ?>
        <form class="contactform" method="post" action="?c=Auth&a=register">
            <label>
                <input class="w3-input w3-border login-line" type="email" placeholder="Email" name="email" required>
            </label>
            <label>
                <input class="w3-input w3-border login-line" type="text" placeholder="Username" name="username" required>
            </label>
            <label>
                <input class="w3-input w3-border login-line" type="password" placeholder="Password" name="password" required>
            </label>
                <button class="button-menu mygrey-text login-button" type="submit">
                    <i class="fa fa-paper-plane"></i>Register
                </button>
        </form>
    </div>
</div>