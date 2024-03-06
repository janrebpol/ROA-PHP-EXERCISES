<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="style/style.css">
    <title>Login System</title>
    <link rel="icon" type="image/x-icon" href="pol.ico">
</head>

<body>
    <div class="container">
        <div class="box form-box">

            <header>
                <h1 class="masked-text">Login</h1>
            </header>
            <form action="" method="post">
                <div class="field input">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" autocomplete="off" required>
                </div>

                <div class="field input">
                    <p>
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" autocomplete="off" required>
                        <i class="bi bi-eye-slash" id="togglePassword"></i>
                    </p>
                    <script src="js.js"></script>
                </div>

                <div class="field input">
                    <input type="submit" name="submit" class="btn" value="Login" required>
                </div>
                <div>
                    <p>Login using Soicial Accounts?
                        <a href="https://www.facebook.com/paulroaaa">
                            <img src="images/facebook.png" alt="fb" style="text-shadow:2px 2px 4px" /></a>
                        <a href="https://www.instagram.com/janrebpol">
                            <img src="images/instagram.png" alt="ig" style="text-shadow:2px 2px 4px" /></a>
                        <a href="https://twitter.com/lizasoberano">
                            <img src="images/twitter.png" alt="twt" style="text-shadow:2px 2px 4px" /></a>
                        <a href="https://www.linkedin.com/in/revroa/">
                            <img src="images/linkedin.png" alt="li" style="text-shadow:2px 2px 4px" /></a>
                    </p>
                </div>
            </form>
        </div>
    </div>
    <?php

    require 'Controllers/LoginController.php';

    $controller = new \LoginController;
    $loginResult = $controller->verifyLogin();

    if ($loginResult['success']) {
        echo "<div class='message'>Login successful!</div>";
    } else {
        echo "<div class='message'>{$loginResult['message']}</div>";
    }
    ?>
</body>

</html>
