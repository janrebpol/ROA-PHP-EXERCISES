<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>Contact Form</title>
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
                    <p>
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" autocomplete="off">
                    </p>
                </div>

                <div class="field input">
                    <p>
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" autocomplete="off">
                    </p>
                </div>

                <div class="field input">
                    <p>
                        <label for="message">Mesage</label>
                        <textarea name="message" id="message" rows="5" cols="58" autocomplete="off">
                    </textarea>
                    </p>
                </div>

                <div class="field input">
                    <input type="submit" name="submit" class="btn" value="Login">
                </div>
            </form>
            <?php
            if ($_SERVER['REQUEST_METHOD'] == 'POST')
            {
                include 'FormController.php';

                $name = $_POST['name'];
                $email = $_POST['email'];
                $message = $_POST['message'];

                $userController = new UserController();
                $userInputS = $userController->createUser($name, $email, $message);

                if (empty($name) || empty($email) || empty($message))
                {
                    echo "<div class='message'> Kindly complete all required fields.</div>";
                } 
                else
                {
                    echo "<h1 class='masked-text'><center>User Inputs</center></h1>";
                    echo "<div class='message1'><p>Name: " . $name . "</p><br></div>";
                    echo "<div class='message1'><p>Email: " . $email . "</p><br></div>";
                    echo "<div class='message1'><p>Message: " . $message . "</p><br></div>";
                }
            }
            ?>
        </div>
    </div>
</body>

</html>