<?php

namespace App\Controllers;

use App\Core\AControllerBase;
use App\Core\Responses\Response;
use App\Models\Breed;

class BreedController extends AControllerBase
{

    public function index(): Response
    {
        $breeds = Breed::getAll();
        return $this->html($breeds, "breed");
    }
    public function createbreeds() : Response
    {
        $data = $this->request()->getPost();

        if (isset($data["name"]))
        {

            $name = $_POST['name'];
            $section = $_POST['section'];
            $country = $_POST['country'];

            if (!(strlen($name) > 0))
            {
                $data = ['error' => 'Name must not be empty.'];
                return $this->html($data);
            }
            else if (!(strlen($section) > 0))
            {
                $data = ['error' => 'Section must not be empty.'];
                return $this->html($data);
            }
            else if (!(strlen($country) > 0))
            {
                $data = ['error' => 'Country must not be empty.'];
                return $this->html($data);
            }
            else {
                $post = new Breed();
                $post->setName($data["name"]);
                $post->setSection($data["section"]);
                $post->setCountry($data["country"]);
                $post->save();
            }
        }

        return $this->html(new Breed(), "createbreed");
    }

    public function createbreed(): Response
    {
        return $this->html();
    }
}