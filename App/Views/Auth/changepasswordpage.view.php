<?php /** @var Array $data */ ?>

<!-- LOGIN section -->
<div class="w3-container section" id="changepasswd">
    <h3 class="title"><i class="fa-solid fa-paw w3-jumbo"></i><br>Change password</h3>
    <?php if ($data['error'] != "") { ?>
        <div class="errortext">
            <?= $data['error'] ?>
        </div>
    <?php } ?>
    <div>
        <form name="changepasswdForm" class="contactform" method="post" action="?c=Auth&a=changepassword">
            <label>
                <input class="w3-input w3-border login-line" type="password" placeholder="New password" name="newpassword" required>
            </label>
            <label>
                <input class="w3-input w3-border login-line" type="password" placeholder="Repeat new password" name="repeatpassword" required>
            </label>
            <button class="button-menu mygrey-text login-button" type="submit">
                    <i class="fa fa-paper-plane"></i> Change password
            </button>
        </form>
    </div>
</div>