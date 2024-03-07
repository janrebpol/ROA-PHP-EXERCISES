<?php

namespace src\Models;

class FileModel
{
    private $createdFile;

    public function __construct()
    {
        $this->createdFile = __DIR__ . '/../../Files/';
        if (!file_exists($this->createdFile)) {
            mkdir($this->createdFile, 0777, true);
        }
    }

    public function getStoragePath()
    {
        return $this->createdFile;
    }
    

    public function createFile($filename, $content)
    {
        file_put_contents($this->createdFile . $filename, $content);
    }

    public function readFile($filename)
    {
        $filePath = $this->createdFile . $filename;
        return file_exists($filePath) ? file_get_contents($filePath) : 'File not found.';
    }

    public function delete($filename)
    {
        $filePath = $this->createdFile . $filename;
        if (file_exists($filePath)) {
            unlink($filePath);
        } else {
            return 'File not found.';
        }
    }
}
