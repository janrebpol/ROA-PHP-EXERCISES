<?php

include 'LoginModel.php';

// class LoginController {
//     private $loginModel;
    
//     public function __construct() {
//         $this->loginModel = new User();
//     }

//     public function login () {
//         $res
//     }
// }

class LoginController {
    private $userModel;

public function __construct() {
    $this->userModel = new User();
}

public function verifyLogin() {
    $result = $this->initializeDefaultResult();

    if ($this->isPostRequest()) {
        $username = $this->getPostData('username');
        $password = $this->getPostData('password');

        if ($this->userModel->validateInfo($username, $password)) {
            $result['success'] = true;
        } else {
            $result['message'] = 'Wrong username or password. Try to remember it please huhu';
        }
    }

    return $result;
}

private function initializeDefaultResult() {
    return ['success' => false, 'message' => ''];
}

private function isPostRequest() {
    return $_SERVER['REQUEST_METHOD'] === 'POST';
}

private function getPostData($key) {
    return isset($_POST[$key]) ? $_POST[$key] : null;
}
}