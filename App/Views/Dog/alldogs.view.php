<?php
/** @var Dog[] $dogs */

use App\Models\Dog;

$dogs = Dog::getAll();
?>
<div class="w3-container section">
    <div class="w3-container" id="clubs">
        <h1 class="title"><i class="fa-solid fa-paw w3-jumbo"></i><br>Dogs</h1>
        <p class="w3-center w3-large">List of our registered dogs</p>
    </div>
    <div class="center">
        <table class="dogtable">
            <tr>
                <th>Dog ID</th>
                <th>Name</th>
                <th>Birth</th>
                <th>Height [cm]</th>
                <th>Weight [kg]</th>
                <th>Delete dog</th>
            </tr>
            <?php foreach ($dogs as $dog) { ?>
                <tr class="dogtable-row">
                    <td><?= $dog->getId() ?></td>
                    <td><?= $dog->getName() ?></td>
                    <td><?= $dog->getBirth() ?></td>
                    <td><?= $dog->getHeight() ?></td>
                    <td><?= $dog->getWeight() ?></td>
                    <td><a href="#" class="admin_show_button_delete" onclick="return confirmDeleteDog(<?=$dog->getId()?>)">Delete</a></td>
                </tr>
            <?php } ?>
        </table>
    </div>
</div>