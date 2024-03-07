<?php
include 'LoginModel.php';

class LoginController
{
    private $userModel;

    public function __construct()
    {
        $this->userModel = new User;
    }

    private function initializeResult()
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
    public function verifyLogin()
    {
        $result = $this->initializeResult();

        if ($this->isPostRequest()) {
            $username = $this->getPostData('username');
            $password = $this->getPostData('password');

            if (empty($username) && empty($password)) {
                $result['success'] = false;
                $result['message'] = 'Please enter a Username and Password';
            } elseif (empty($password)) {
                $result['success'] = false;
                $result['message'] = 'Please enter a Password';
            } elseif (empty($username)) {
                $result['success'] = false;
                $result['message'] = 'Please enter a Username';
            } elseif ($this->userModel->validateInfo($username, $password))
            {
                $result['success'] = true;
            } else
            {
                $result['message'] = 'Wrong username or password. Try to remember it';
            }
        }

        return $result;
    }
}
