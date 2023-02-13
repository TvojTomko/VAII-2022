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
        return $this->html(null, "shows");
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

                $data = ['success' => 'Show was added.', 'delete' => ''];
                return $this->html($data, "shows");
            }
        }

        $data = ['success' => '', 'delete' => ''];
        return $this->html($data, "createshow");
    }

    public function deleteshow() : Response
    {
        $id = $this->request()->getValue("id");
        $post = Show::getOne($id);
        if ($post != null)
        {
            $name = $post->getTitle();
            $post->delete();
            $data = ['delete' => 'Item ' . $name .' was deleted.', 'success' => ''];
        }

        return $this->html($data, "shows");
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

            if(!(strlen($title) > 0))
            {
                echo "<div>Title must not be empty</div><br>";
                return $this->redirect("?c=Show&a=editshow&id=" . $id);
            }
            elseif(!(strlen($location) > 0))
            {
                echo "<div>Location must not be empty</div><br>";
                return $this->redirect("?c=Show&a=editshow&id=". $id);
            }
            elseif(!(strlen($date) > 0))
            {
                echo "<div>Date must not be empty</div><br>";
                return $this->redirect("?c=Show&a=editshow&id=". $id);

            } else {
                $post->setTitle($data["title"]);
                $post->setLocation($data["location"]);
                $post->setDate($data["date"]);
                $post->save();

                $name = $post->getTitle();
                $data = ['success' => 'Edit ' . $name . ' was successful.', 'delete' => ''];
                return $this->html($data, "shows");
                }
            }

        //$data = ['success' => '', 'delete' => ''];
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