<?php

namespace MyLog\Controller;

use MyLog\Models;

class LoginController
{
    private $userModel;

    public function __construct()
    {
        $this->userModel = new Models\LoginModel();
    }

    public function verifyLogin()
    {
        $result = $this->initializeDefaultResult();

        if ($this->isPostRequest()) {
            $username = $this->getPostData('username');
            $password = $this->getPostData('password');

            if ($this->userModel->validateInfo($username, $password)) {
                return $result['success'] = true;
            }
        }
    }

    private function initializeDefaultResult()
    {
        return ['success' => false, 'message' => ''];
    }

    private function isPostRequest()
    {
        return $_SERVER['REQUEST_METHOD'] === 'POST';
    }

    private function getPostData($key)
    {
        return isset($_POST[$key]) ? $_POST[$key] : null;
    }
}
