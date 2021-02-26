<?php


namespace App\Models;


class AssessmentModel
{
    private $username;
    private $password;
    private $email;
    private $age;


    public function __construct($username, $password,$email,$age)
    {
        $this->username = $username;
        $this->password = $password;
        $this->email = $email;
        $this->age = $age;

    }

    //getting username
    public function getUsername()
    {
        return $this->username;
    }
    //getting password
    public function getPassword()
    {
        return $this->password;
    }
    //getting email
    public function getEmail()
    {
        return $this->email;
    }
    //getting age
    public function getAge()
    {
        return $this->age;
    }
}
