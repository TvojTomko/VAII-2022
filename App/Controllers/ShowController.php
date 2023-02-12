<?php

namespace App\Controllers;

use App\Core\AControllerBase;
use App\Core\Responses\RedirectResponse;
use App\Core\Responses\Response;
use App\Models\Show;

class ShowController extends AControllerBase
{

    public function index(): Response
    {
        $shows = Show::getAll();
        return $this->html($shows, "shows");
    }

    public function createshow() : Response
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
                return $this->html($data, "createshow");
            }
            else if (!(strlen($location) > 0))
            {
                $data = ['error' => 'Location must not be empty.'];
                return $this->html($data, "createshow");
            }
            else if (!(strlen($date) > 0))
            {
                $data = ['error' => 'Date must not be empty.'];
                return $this->html($data, "createshow");
            }
            else {
                $post = new Show();
                $post->setTitle($data["title"]);
                $post->setLocation($data["location"]);
                $post->setDate($data["date"]);
                $post->save();

                return $this->redirect("?c=Show");
            }
        }

        $data = ['success' => 'Success.'];
        return $this->html($data, "createshow");
    }

    public function deleteshow() : Response
    {
        $id = $this->request()->getValue("id");
        $post = Show::getOne($id);
        if ($post != null)
        {
            $post->delete();
        }

        return $this->redirect("?c=show");
    }

    public function editshow() : Response
    {
        $id = $this->request()->getValue("id");
        $post = Show::getOne($id);
        $data = $this->request()->getPost();

        if(isset($data["title"]))
        {
            $title = $_POST['title'];
            $location = $_POST['location'];
            $date = $_POST['date'];

            if(!(strlen($title) > 0) || !(strlen($title) < 100))
            {
                echo "<div class='text-danger'>Title must not be empty</div><br>";

            }
            elseif(!(strlen($location) > 0))
            {
                echo "<div class='text-danger'>Location must not be empty</div><br>";

            }
            elseif(!(strlen($date) > 0))
            {
                echo "<div class='text-danger'>Date must not be empty</div><br>";

            } else {
                $post->setTitle($data["title"]);
                $post->setLocation($data["location"]);
                $post->setDate($data["date"]);
                $post->save();
                }
            }

        return $this->html($post,"editshow");
    }

    public function createshowspage() : Response
    {
        return $this->html(null, "createshow");
    }

    public function editshowpage() : Response
    {
        return $this->html(null, "editshow");
    }
}