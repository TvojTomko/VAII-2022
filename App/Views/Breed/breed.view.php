<?php
/** @var Array $data */
/** @var Breed[] $breeds */
/** @var string $username  */

use App\Controllers\Auth;
use App\Models\Breed;

$breeds = Breed::getAll();
$username = Auth::getName();

//$layout = "no";
?>
    <script src="/checkpoint2/public/js/ajax2.js"></script>

    <div class="w3-container section" id="breed">
        <div class="w3-container">
            <h1 class="title"><i class="fa-solid fa-paw w3-jumbo"></i><br>Breeds</h1>
            <p class="w3-center w3-large">List of our official registered breeds</p>
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
        <div>
            <a href="#" onclick="return getBreed()">asdadsad</a>
        </div>
        <div>
            <?php foreach ($breeds as $item) { ?>
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
    </div>
