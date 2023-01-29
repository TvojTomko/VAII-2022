<?php

namespace App\Models;

use App\Core\Model;

class Dog extends Model
{
    public $id;
    public $name;
    public $birth;
    public $breed_id;
    public $club_id;

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
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getBirth()
    {
        return $this->birth;
    }

    /**
     * @param mixed $birth
     */
    public function setBirth($birth): void
    {
        $this->birth = $birth;
    }

    /**
     * @return mixed
     */
    public function getBreedId()
    {
        return $this->breed_id;
    }

    /**
     * @param mixed $breed_id
     */
    public function setBreedId($breed_id): void
    {
        $this->breed_id = $breed_id;
    }

    /**
     * @return mixed
     */
    public function getClubId()
    {
        return $this->club_id;
    }

    /**
     * @param mixed $club_id
     */
    public function setClubId($club_id): void
    {
        $this->club_id = $club_id;
    }
}