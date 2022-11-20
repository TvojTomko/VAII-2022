<?php /** @var Array $data */ ?>

<!-- LOGIN section -->
<div class="w3-container section" id="deleteuser">
    <div>
        <h3 class="title"><i class="fa-solid fa-paw w3-jumbo"></i><br>DELETE USER</h3>
        <form class="contactform center-text" method="post" action="?c=auth&a=deleteuser">
            <h2 class="center-text">Do you really want to delete your account?</h2>
            <button class="center-text button-menu mygrey-text login-button" type="submit">
                <i class="fa fa-paper-plane"></i> Delete user
            </button>
        </form>
    </div>
</div>