<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>File Operations</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="container">
        <div class="box form-box">
            <header>
                <h1 class="masked-text">File Operations</h1>
            </header>
            <form action="index.php" method="post" enctype="multipart/form-data">
                <input type="file" name="fileToUpload" id="fileToUpload">
                <input type="submit" value="Upload File" name="upload">
            </form>
            <div class="field input">
                <form action="index.php" method="post">
                    <input type="text" name="filename" placeholder="Enter your File Name">
                    <textarea name="content" rows="5" cols="58" placeholder="Write a Content"></textarea>
                    <input type="submit" value="Create a File" name="createWrite">
                </form>
            </div>
            <div class="field input">
                <form action="index.php" method="post">
                    <input type="text" name="filenameToDelete" placeholder="File Name to Delete">
                    <input type="submit" value="Delete a File" name="delete">
            </div>

            <?php if (isset($_SESSION['message'])) : ?>
                <p><?php echo $_SESSION['message'];
                    unset($_SESSION['message']); ?></p>
            <?php endif; ?>

            </form>
        </div>
    </div>
</body>

</html>