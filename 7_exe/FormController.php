<?php

include 'FormModel.php';

class UserController
{
    public function createUser($name, $email, $messages)
    {
        $userInputs = new User($name, $email, $messages);
        return $userInputs;
    }
}
