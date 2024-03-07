<?php

class User
{
    private $username = 'user';
    private $password = 'password123';

    public function validateInfo($infoUsername, $infoPassword)
    {
        return ($infoUsername == $this->username) && ($infoPassword == $this->password);
    }
}
