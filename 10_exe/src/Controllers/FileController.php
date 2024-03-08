<?php

namespace src\Controllers;

use src\Models\FileModel;

class FileController
{
    private $fileModel;

    public function __construct()
    {
        $this->fileModel = new FileModel();
    }

    public function handleRequest($post, $files)
    {
        if (isset($post['createWrite'])) {
            $filename = $post['filename'];
            $content = $post['content'];
            $this->fileModel->createFile($filename, $content);
            $_SESSION['message'] = "File has been created successfully!";
        }

        if (isset($post['delete'])) {
            $filenameToDelete = $post['filenameToDelete'];
            $this->fileModel->delete($filenameToDelete);
            $_SESSION['message'] = "File already deleted!";
        }

        if (isset($post['upload'])) {
            $target_file = $this->fileModel->getStoragePath() . basename($files["fileToUpload"]["name"]);
            if (move_uploaded_file($files["fileToUpload"]["tmp_name"], $target_file)) {
                $content = nl2br(htmlspecialchars($this->fileModel->readFile(basename($files["fileToUpload"]["name"]))));
                $_SESSION['message'] = "<div class='masked-text'>File uploaded successfully!</div><br> <div class='message'>Contents<br></div>" . "<div class='message1'> $content .</div>" ."</div>";
            } else {
                $_SESSION['message'] = "There was an error uploading your file.";
            }
        }

        header("Location: ./");
        exit();
    }
}
