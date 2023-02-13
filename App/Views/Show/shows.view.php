<?php
/** @var Array $data */
/** @var Show[] $shows */
/** @var string $username  */

use App\Controllers\Auth;
use App\Models\Show;

$shows = Show::getAll();
$username = Auth::getName()
?>

<script src="/checkpoint2/public/js/ajax.js"></script>

<!-- Shows section -->
<div class="w3-container section">
    <div class="w3-container">
        <h1 class="title"><i class="fa-solid fa-paw w3-jumbo"></i><br>Shows</h1>
        <p class="w3-center w3-large">List of upcoming shows</p>
    </div>

    <?php if($data != null && $data['success'] != "") { ?>
        <div class="successtext">
            <?= $data['success'] ?>
        </div>
    <?php } ?>

    <?php if($data != null && $data['delete'] != "") { ?>
        <div class="successtext">
            <?= $data['delete'] ?>
        </div>
    <?php } ?>

    <div class="searchline">
        <input type="search" placeholder="Search" onkeyup="filterShows(this.value)" />
        <i class="fas fa-search lens"></i>
    </div>
    <div class="showss" id="show">

    </div>
        <?php if(Auth::isAdmin()) { ?>
            <a href="?c=Show&a=createshowspage" class="admin_show_button_create">Create</a>
            <label class="right admin_text">Admin is logged in</label>
        <?php }?>
</div>
