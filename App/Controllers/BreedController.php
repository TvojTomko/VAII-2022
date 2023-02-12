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

        return $this->redirect("?c=Breed");
    }

    public function deletebreed() : Response
    {
        $id = $this->request()->getValue("id");
        $post = Breed::getOne($id);
        if ($post != null)
        {
            $post->delete();
        }

        return $this->redirect("?c=Breed");
    }

    public function createbreed() : Response
    {
        return $this->html();
    }

    public function breedinfo() : Response
    {
        return $this->html($this->request()->getValue("id"));
    }
}