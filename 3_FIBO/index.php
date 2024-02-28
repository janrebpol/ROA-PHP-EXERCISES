<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fibonacci Sequence</title>
    <link rel="icon" type="image/x-icon" href="pol.ico">
    <style>

    body {
    background: #e4e9f7;
    }

h1 {
    font-family: 'Serif', Georgia;
}
    .container {
    display: flex;
    align-items: center;
    justify-content: center;
    min-height: 90vh;
}

.form-box {
    width: 450px;
    margin: 0px 10px;
}

.form-box header{
    font-size: 25px;
    font-weight: 600;
    padding-bottom: 10px;
    border-bottom: 1px solid #e6e6e6;
    margin-bottom: 10px;
}

.form-box form .field{
    display: flex;
    margin-bottom: 10px;
    flex-direction: column;
}

.form-box form .input input{
    height: 40px;
    width: 100%;
    font-size: 16px;
    padding: 0 10px;
    border-radius: 5px;
    border: 1px solid #ccc;
    outline: none;
}

.submit {
            padding: 10px 20px;
            background: #555;
            border: none;
            color: white;
            border-radius: 5px;
            cursor: pointer;
}

.popup {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: #000;
            background: #555;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(255, 255, 255, 0.3);
            z-index: 1000;
            text-align: center;
}

.popup-btn {
            padding: 10px 20px;
            background-color: #333;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-right: 10px;
            margin-left: 10px;
        }

.popup.active {
    display: block;
}

    .masked-text{
    background-image: url('login.jpg');
    background-size: cover;
    background-clip: text;
    -webkit-background-clip: text;
    color: transparent;
    font-family: 'Serif', Georgia;
}

.masked-text{
    background-image: url('font.jpg');
    background-size: cover;
    background-clip: text;
    -webkit-background-clip: text;
    color: transparent;
    font-family: 'Serif', Georgia;
}

    </style>
    
</head>
<body>
<div class="container">
        <div class="box form-box">
    <form method="post" action="index.php">
        <header>
        <h1 class="masked-text">Fibonacci Sequence</h1>
        </header>
        <label class="masked-text" for ="number">Enter number of sequences: </label>
        <input type="number" name="number" required>
        <br>
        <input class="submit" type="submit" value="Submit" name="submit">
<?php 

    if(isset($_POST['submit'])) {
        $num = $_POST['number'];
        $s1 = 0; $s2 = 1; $i = 0;
        echo "<span class='masked-text'><br> The first <b>" . $num . 
        "</b> Fibonacci Sequence are: <b>" . $s1 . "   ,   " . $s2. " </b></span>";
        while($i < $num - 2) {
            $nterm = $s1 + $s2;
            $s1 = $s2;
            $s2 = $nterm;
            echo "<span class='masked-text'><b>  ,   ". $nterm. " </b></span>  ";
            $i++;
        }
    }
?>
    </form>
    </div>
</div>
</body>
</html>

