<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator Exercise</title>
    <link rel="icon" type="image/x-icon" href="pol.ico">
    <link rel="stylesheet" href="css.css">
</head>

<body>
    <div class="container">
        <div class="box form-box">
            <header>
                <h1 class="masked-text">Calculator</h1>
            </header>
            <form action='calcuModel.php' method="POST">
                <div class="field input">
                    <label class="masked-text" for="num1"> Enter First Number: </label>
                    <input type="number" id="num1" name="num1" required><br>
                </div>
                <p class="masked-text"> Operator:
                    <select class="drop" name="operand" id="operand">
                        <option value="addition">Add</option>
                        <option value="subtraction">Subtract</option>
                        <option value="multiplication">Multiply</option>
                        <option value="division">Divide</option>
                    </select>
                </p>
                <div class="field input">
                    <label class="masked-text" for="num2"> Enter Second Number: </label>
                    <input type="number" id="num2" name="num2" required><br>
                </div>
                <div class="field input">
                    <button class="submit" type="submit">Calculate</button>
                </div>
            </form>
            <div class="popup <?php if (isset($_GET['result'])) echo 'active'; ?>">
                <h2><?php if (isset($_GET['result'])) echo $_GET['result']; ?></h2>
                <button class="popup-btn" onclick="window.location.href = 'index.php';">Close</button>
            </div>
        </div>
    </div>
</body>

</html>