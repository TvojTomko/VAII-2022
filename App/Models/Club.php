<?php

namespace App\Models;

use App\Core\Model;

class Club extends Model
{
    public $id;
    public $title;
    public $owner;
    public $since;
    public $number_of_dogs;
    public $breed;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title): void
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getOwner()
    {
        return $this->owner;
    }

    /**
     * @param mixed $owner
     */
    public function setOwner($owner): void
    {
        $this->owner = $owner;
    }

    /**
     * @return mixed
     */
    public function getSince()
    {
        return $this->since;
    }

    /**
     * @param mixed $since
     */
    public function setSince($since): void
    {
        $this->since = $since;
    }

    /**
     * @return mixed
     */
    public function getNumberOfDogs()
    {
        return $this->number_of_dogs;
    }

    /**
     * @param mixed $number_of_dogs
     */
    public function setNumberOfDogs($number_of_dogs): void
    {
        $this->number_of_dogs = $number_of_dogs;
    }

    /**
     * @return mixed
     */
    public function getBreed()
    {
        return $this->breed;
    }

    /**
     * @param mixed $breed
     */
    public function setBreed($breed): void
    {
        $this->breed = $breed;
    }
}