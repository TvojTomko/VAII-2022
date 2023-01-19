<?php

namespace App\Controllers;

use App\Core\AControllerBase;
use App\Core\Responses\Response;
use App\Models\Show;

class ShowController extends AControllerBase
{

    public function index(): Response
    {
        $shows = Show::getAll();
        return $this->html($shows);
    }

    public function createshows() : Response
    {
        $data = $this->request()->getPost();

        if (isset($data["title"]))
        {

            $title = $_POST['title'];
            $location = $_POST['location'];
            $date = $_POST['date'];

            if (!(strlen($title) > 0))
            {
                $data = ['error' => 'Title must not be empty.'];
                return $this->html($data);
            }
            else if (!(strlen($location) > 0))
            {
                $data = ['error' => 'Location must not be empty.'];
                return $this->html($data);
            }
            else if (!(strlen($date) > 0))
            {
                $data = ['error' => 'Date must not be empty.'];
                return $this->html($data);
            }
            else {
                $post = new Show();
                $post->setTitle($data["title"]);
                $post->setLocation($data["location"]);
                $post->setDate($data["date"]);
                $post->save();
            }
        }

        return $this->html(new Show());
    }

    public function delete() : Response
    {
        $id = $this->request()->getValue("id");
        $post = Show::getOne($id);
        if($post != null){
            $post->delete();
        }

        return $this->redirect("?c=home");
    }
}