<?php
/** @var $data */
/** @var string $username  */

use App\Controllers\Auth;
use App\Models\Breed;

$breed = Breed::getOne($data);
$username = Auth::getName()
?>

<div class="w3-container section">
    <div class="w3-container" id="clubs">
        <h1 class="title"><i class="fa-solid fa-paw w3-jumbo"></i><br><?=$breed->getName()?></h1>
        <p class="w3-center w3-large">Information about <?=$breed->getName()?></p>
    </div>
    <div>
            <div class="shows" id="breedslist">
                <img src="/checkpoint2/public/images/paw.jpg" class="logo">
                <label class="shows_text">Name:</label> <?=$breed->getName()?>
                <br>
                <label class="shows_text">Section:</label> <?=$breed->getSection()?>
                <br>
                <label class="shows_text">Country:</label> <?=$breed->getCountry()?>
            </div>
    </div>
    <?php if(Auth::isAdmin()) { ?>

    <?php }?>
</div>
