<?php

namespace App\Controllers;

use App\Core\AControllerBase;
use App\Core\Responses\Response;
use App\Models\Breed;
use App\Models\Club;
use App\Models\Dog;

class ClubController extends AControllerBase
{

    public function index(): Response
    {
        return $this->html(null, "clubs");
    }

    public function createclub() : Response
    {
        $data = $this->request()->getPost();

        if (isset($data["title"]))
        {

            $title = $_POST['title'];
            $owner = $_POST['owner'];
            $since = $_POST['since'];
            $number_of_dogs = $_POST['number_of_dogs'];
            $breed = $_POST['breed'];

            if (!(strlen($title) > 0))
            {
                $data = ['error' => 'Title must not be empty.'];
                return $this->html($data, "createclub");
            }
            else if (!(strlen($owner) > 0))
            {
                $data = ['error' => 'Owner must not be empty.'];
                return $this->html($data, "createclub");
            }
            else if (!(strlen($since) > 0))
            {
                $data = ['error' => 'Since must not be empty.'];
                return $this->html($data, "createclub");
            }
            else if (!($number_of_dogs >= 0))
            {
                $data = ['error' => 'Enter a valid number of dogs.'];
                return $this->html($data, "createclub");
            }
            else if (!($breed >= 0))
            {
                $data = ['error' => 'Enter a valid breed_id.'];
                return $this->html($data, "createclub");
            }
            else {
                $post = new Club();
                $post->setTitle($data["title"]);
                $post->setOwner($data["owner"]);
                $post->setSince($data["since"]);
                $post->setNumberOfDogs($data["number_of_dogs"]);
                $post->setBreed($data["breed"]);
                $post->save();

                $data = ['success' => 'Club was created.', 'delete' => ''];
                return $this->html($data, "clubs");
            }
        }

        $data = ['success' => ''];
        return $this->html($data, "createclub");
    }

    public function deleteclub() : Response
    {
        $id = $this->request()->getValue("id");
        $post = Club::getOne($id);
        if ($post != null)
        {
            $post->delete();
        }

        $data = ['success' => '', 'delete' => 'Club was deleted.'];
        return $this->html($data, "clubs");
    }

    public function editclub() : Response
    {
        $id = $this->request()->getValue("id");
        $post = Club::getOne($id);
        $data = $this->request()->getPost();

        if(isset($data["title"]))
        {
            $title = $_POST['title'];
            $owner = $_POST['owner'];
            $since = $_POST['since'];
            $number_of_dogs = $_POST['number_of_dogs'];
            $breed = $_POST['breed'];

            if(!(strlen($title) > 0))
            {
                echo "<div class='text-danger'>Title must not be empty</div><br>";

            }
            elseif(!(strlen($owner) > 0))
            {
                echo "<div class='text-danger'>Location must not be empty</div><br>";

            }
            elseif(!(strlen($since) > 0))
            {
                echo "<div class='text-danger'>Date must not be empty</div><br>";

            }
            elseif(!($number_of_dogs >= 0))
            {
                echo "<div class='text-danger'>Number of dogs must not be empty</div><br>";
            }
            elseif(!(strlen($breed) > 0))
            {
                echo "<div class='text-danger'>Breed must not be empty</div><br>";
            }
            else {
                $post->setTitle($data["title"]);
                $post->setOwner($data["owner"]);
                $post->setSince($data["since"]);
                $post->setNumberOfDogs($data["number_of_dogs"]);
                $post->setBreed($data["breed"]);
                $post->save();

                return $this->redirect("?c=club");
            }
        }
        return $this->html($post, "editclub");
    }

    public function createclubpage() : Response
    {
        return $this->html(null, "createclub");
    }
}