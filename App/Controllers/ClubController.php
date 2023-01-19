<?php

namespace App\Controllers;

use App\Core\AControllerBase;
use App\Core\Responses\Response;
use App\Models\Club;

class ClubController extends AControllerBase
{

    public function index(): Response
    {
        $clubs = Club::getAll();
        return $this->html($clubs);
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
                return $this->html($data);
            }
            else if (!(strlen($owner) > 0))
            {
                $data = ['error' => 'Owner must not be empty.'];
                return $this->html($data);
            }
            else if (!(strlen($since) > 0))
            {
                $data = ['error' => 'Since must not be empty.'];
                return $this->html($data);
            }
            else {
                $post = new Club();
                $post->setTitle($data["title"]);
                $post->setOwner($data["owner"]);
                $post->setSince($data["since"]);
                $post->setNumberOfDogs($data["number_of_dogs"]);
                $post->setBreed($data["breed"]);
                $post->save();
            }
        }

        return $this->html(new Club());
    }
}