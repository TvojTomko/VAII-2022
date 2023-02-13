<?php
/** @var Breed[] $data */
/** @var string $username  */

use App\Controllers\Auth;
use App\Models\Breed;

$username = Auth::getName();

$layout = "no";
?>

<div class="w3-container section">
        <div class="w3-container">
            <h1 class="title"><i class="fa-solid fa-paw w3-jumbo"></i><br>Breeds</h1>
            <p class="w3-center w3-large">List of our official registered breeds</p>
        </div>

        <div>
            <a href="#" class="admin_show_button_create" onclick="return getBreed()"><i class="fa-solid fa-arrows-rotate"></i>Refresh</a>
        </div>

    <?php foreach ($data as $item) { ?>
        <div class="shows" id="breedslist">
            <img src="/checkpoint2/public/images/paw.jpg" class="logo">
            <label class="shows_text">Name:</label> <?=$item->getName()?>
            <br>
            <label class="shows_text">Section:</label> <?=$item->getSection()?>
            <br>
            <label class="shows_text">Country:</label> <?=$item->getCountry()?>
            <?php if(Auth::isAdmin()) { ?>
                <a href="" class="admin_show_button_delete right" onclick="return confirmDeleteBreed(<?=$item->getId()?>)">Delete</a>
            <?php }?>
        </div>
    <?php }?>

</div>
