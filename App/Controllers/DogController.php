<?php

namespace App\Controllers;

use App\Core\AControllerBase;
use App\Core\Responses\Response;
use App\Models\Club;
use App\Models\Dog;

class DogController extends AControllerBase
{

    public function index(): Response
    {
        return $this->html();
    }

    public function adddog() : Response
    {
        $id = $this->request()->getValue("id");
        $club_id = Club::getOne($id);
        $data = $this->request()->getPost();

        if (isset($data["name"]))
        {

            $name = $_POST['name'];
            $birth = $_POST['birth'];
            $height = $_POST['height'];
            $weight = $_POST['weight'];
            $club = $_POST['club'];

            if (!(strlen($name) > 0))
            {
                $data = ['error' => 'Name must not be empty.'];
                return $this->html($data);
            }
            else if (!(strlen($birth) > 0))
            {
                $data = ['error' => 'Birth must not be empty.'];
                return $this->html($data);
            }
            else if (!($height >= 0))
            {
                $data = ['error' => 'Height must not be empty.'];
                return $this->html($data);
            }
            else if (!($weight >= 0))
            {
                $data = ['error' => 'Weight a valid number of dogs.'];
                return $this->html($data);
            }
            else {
                $post = new Dog();
                $post->setName($data["name"]);
                $post->setBirth($data["birth"]);
                $post->setHeight($data["height"]);
                $post->setWeight($data["weight"]);
                $post->setClub($data["club"]);
                $post->save();

                return $this->redirect("?c=club");
            }
        }

        return $this->html($club_id);
    }

    public function adddogpage() : Response
    {
        return $this->html(null, "adddog");
    }

    public function deletedog() : Response
    {
        $id = $this->request()->getValue("id");
        $post = Dog::getOne($id);
        if ($post != null)
        {
            $post->delete();
        }

        return $this->redirect("?c=club");
    }
}