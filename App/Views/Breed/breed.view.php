<?php
/** @var Breed[] $data */
/** @var string $username  */

use App\Controllers\Auth;
use App\Models\Breed;

$username = Auth::getName()
?>

<div class="w3-container section">
    <div class="w3-container" id="clubs">
        <h1 class="title"><i class="fa-solid fa-paw w3-jumbo"></i><br>Breeds</h1>
        <p class="w3-center w3-large">List of our official registered breeds</p>
    </div>
        <div>
            <?php foreach ($data as $item) { ?>
                <div class="shows" id="breedslist">
                    <img src="/checkpoint2/public/images/paw.jpg" class="logo">
                    <label class="shows_text">Name:</label> <?=$item->getName()?>
                    <br>
                    <label class="shows_text">Section:</label> <?=$item->getSection()?>
                    <br>
                    <label class="shows_text">Country:</label> <?=$item->getCountry()?>
                </div>
            <?php }?>
        </div>
        <?php if(Auth::isAdmin()) { ?>

        <?php }?>
</div>