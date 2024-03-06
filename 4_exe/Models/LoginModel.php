<?php

namespace MyLog\Models;

class LoginModel
{
    private $username = 'user';
    private $password = 'password123';

    public function validateInfo($infoUsername, $infoPassword)
    {
        return ($infoUsername == $this->username) && ($infoPassword == $this->password);
    }
}
