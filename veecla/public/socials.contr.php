<?php
require_once __DIR__ . "/../config/session.php";

class SocialContr extends Socials
{
    private $topic;
    private $link;

    // for the first image
    private $postImage;
    private $image_name; //the image name
    private $image_type; // the image type
    private $image_size; // the image size
    private $image_temp; //the temporary location where the uploaded image is stored
    private $uploads_folders = "./socialUploads/"; // the uploads folder
    private $upload_max_size = 2 * 1024 * 1024; // setting the max upload file size to 2MB

    //property to hold an array of allowed image types

    private $allowed_image_types = ["image/jpg", "image/jpeg", "image/png", "image/gif"];

    //property to store validation error
    //setting it to public to have access to it from the index file

    public $error;


    public function __construct($topic, $link, $files)
    {
        $this->topic = $topic;
        $this->link = $link;


        $this->image_name = $files['postImage']['name'] ?? '';
        $this->image_size = $files['postImage']['size'] ?? 0;
        $this->image_temp = $files['postImage']['tmp_name'] ?? '';
        $this->image_type = $files['postImage']['type'] ?? '';


        if ($this->emptyInput() == true) {
            $this->set_message("error", "Fields cannot be empty");
            header("location: ../admin/addSocial.php?emptyInput");
            exit();
        }
        if ($this->webValidate() == true) {
            $this->set_message("error", "Invalid Url");
            header("location: ../admin/addSocial.php?invalidurl");
            exit();
        }

        $this->isImage();

        $this->imageNameValidation();

        $this->sizeValidation();

        $this->checkFile();

        $this->newName();


        if ($this->error == null) {
            $this->moveFile();
        }

        $this->createSocials($this->topic, $this->link, $this->newName());
    }

    public function recordSocials()
    {
    }

    private function set_message($type, $message)
    {
        $_SESSION[$type] = $message;
    }

    protected function emptyInput()
    {
        if (empty($this->topic) || empty($this->link) || empty($this->image_name)) {
            return true;
        } else {
            return false;
        }
    }

    // function to validate the url for the link
    protected function webValidate()
    {
        if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $this->link)) {
            return true;
        }else{
            return false;
        }
    }

    private function isImage()
    {
        $finfo = finfo_open(FILEINFO_MIME_TYPE);

        $mime = finfo_file($finfo, $this->image_temp);
        if (!in_array($mime, $this->allowed_image_types)) {
            return $this->error = "Only [.jpg, .jpeg, .png, and .gif] files are allowed";
        }
        finfo_close($finfo);
    }


    private function imageNameValidation()
    {
        return $this->image_name = filter_var($this->image_name, FILTER_SANITIZE_STRING);
    }

    private function sizeValidation()
    {
        if ($this->image_size > $this->upload_max_size) {
            return $this->error = "File is too large";
        }
    }

    private function checkFile()
    {
        if (file_exists($this->uploads_folders . $this->newName())) {
            return $this->error = "File already exists in the folder";
        }
    }

    private function newName()
    {
        return "veecla" . md5($this->image_name);
    }


    private function moveFile()
    {

        // initially the #3 was $this->image_name, but the because it was appearing in the upload folder as the default image name and appeared in the database as the encrypted name, i have to change it here to the newNname,,,with the method created
        // i switched it back to image name because i am trying something
        if (!move_uploaded_file($this->image_temp, $this->uploads_folders . $this->newName())) {
            return $this->error = "There was an error, please try again";
        }
    }
}

class SocialDisplayContr extends Socials
{
    private $id;

    public function __construct($id)
    {
        $this->id = $id;
    }

    public function displaySocials()
    {
        return $this->socialsDisplay($this->id);
    }
}
