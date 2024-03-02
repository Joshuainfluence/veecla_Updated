<?php

class ProductContr extends Product
{
    private $product_name;
    private $product_description;
    private $product_price;
    private $product_unit;
    private $product_info;

    // for the first image
    private $product_image;
    private $image_name; //the image name
    private $image_type; // the image type
    private $image_size; // the image size
    private $image_temp; //the temporary location where the uploaded image is stored
    private $uploads_folders = "./uploads/"; // the uplodas folder
    private $upload_max_size = 2 * 1024 * 1024; // setting the max upload file size to 2MB


    // for the second image
    private $image_name2; //the image name
    private $image_type2; // the image type
    private $image_size2; // the image size
    private $image_temp2; //the temporary location where the uploaded image is stored
    private $uploads_folders2 = "./uploads/"; // the uplodas folder
    private $upload_max_size2 = 2 * 1024 * 1024; // setting the max upload file size to 2MB


    // for the third image
    private $image_name3; //the image name
    private $image_type3; // the image type
    private $image_size3; // the image size
    private $image_temp3; //the temporary location where the uploaded image is stored
    private $uploads_folders3 = "./uploads/"; // the uplodas folder
    private $upload_max_size3 = 2 * 1024 * 1024; // setting the max upload file size to 2MB



    //property to hold an array of allowed image types

    private $allowed_image_types = ["image/jpg", "image/jpeg", "image/png", "image/gif"];

    //property to store validation error
    //setting it to public to have access to it from the index file

    public $error;


    public function __construct($product_name, $product_description, $product_price, $product_unit, $product_info, $files, $files2, $files3)
    {
        $this->product_name = $product_name;
        $this->product_description = $product_description;
        $this->product_price = $product_price;
        $this->product_unit = $product_unit;
        $this->product_info = $product_info;
        // $this->product_image = $product_image;
        // $this->product_image = $product_image;

        // Use $files['product_image'] instead of $files['image']
        $this->image_name = $files['product_image']['name'] ?? '';
        $this->image_size = $files['product_image']['size'] ?? 0;
        $this->image_temp = $files['product_image']['tmp_name'] ?? '';
        $this->image_type = $files['product_image']['type'] ?? '';

        // for the second image
        $this->image_name2 = $files2['related_image']['name'] ?? '';
        $this->image_size2 = $files2['related_image']['size'] ?? 0;
        $this->image_temp2 = $files2['related_image']['tmp_name'] ?? '';
        $this->image_type2 = $files2['related_image']['type'] ?? '';

        // for the thirdimage

        $this->image_name3 = $files3['applied_image']['name'] ?? '';
        $this->image_size3 = $files3['applied_image']['size'] ?? 0;
        $this->image_temp3 = $files3['applied_image']['tmp_name'] ?? '';
        $this->image_type3 = $files3['applied_image']['type'] ?? '';

        // when the method returns true, then i t means that a field is empty, so the code will redirect us back to the addProducts page, with an error of empty field
        if ($this->emptyInput() == true) {
            header("location: addProducts.php?emptyInput");
            exit();
        }

        $this->isImage();
        $this->isImage2();
        $this->isImage3();
        $this->imageNameValidation();
        $this->imageNameValidation2();
        $this->imageNameValidation3();
        $this->sizeValidation();
        $this->sizeValidation2();
        $this->sizeValidation3();
        $this->checkFile();
        $this->checkFile2();
        $this->checkFile3();
        $this->newName();
        $this->newName2();
        $this->newName3();

        if ($this->error == null) {
            $this->moveFile();
        }
        if($this->error == null){
            $this->moveFile2();
        }
        if($this->error == null){
            $this->moveFile3();
        }

        
        $this->addProducts($this->product_name, $this->product_description, $this->product_price, $this->product_unit, $this->product_info, $this->newName(), $this->newName2(), $this->newName3());
        // header("location :addProducts.php?uploadsuccessful");
    }

    // public function displayProducts2(){
    //     $this->displayProducts();
    // }

    public function recordProduct()
    {
        //    
    }

    protected function emptyInput()
    {
        if (empty($this->product_name) || empty($this->product_description) || empty($this->product_price) || empty($this->product_unit)  || empty($this->product_info) || empty($this->newName()) || empty($this->newName2()) || empty($this->newName3())) {
            return true;
        } else {
            return false;
        }
    }

    // we need a function to perform two things
    // first the method will check if the uploaded file is an image
    // second the method will validate if the uploaded file type is inclueded in the $allowed_image_types array

    private function isImage()
    {
        $finfo = finfo_open(FILEINFO_MIME_TYPE);

        $mime = finfo_file($finfo, $this->image_temp);
        if (!in_array($mime, $this->allowed_image_types)) {
            return $this->error = "Only [.jpg, .jpeg, .png, and .gif] files are allowed";
        }
        finfo_close($finfo);
    }


    private function isImage2()
    {
        $finfo = finfo_open(FILEINFO_MIME_TYPE);

        $mime = finfo_file($finfo, $this->image_temp2);
        if (!in_array($mime, $this->allowed_image_types)) {
            return $this->error = "Only [.jpg, .jpeg, .png, and .gif] files are allowed";
        }
        finfo_close($finfo);
    }

    private function isImage3()
    {
        $finfo = finfo_open(FILEINFO_MIME_TYPE);

        $mime = finfo_file($finfo, $this->image_temp3);
        if (!in_array($mime, $this->allowed_image_types)) {
            return $this->error = "Only [.jpg, .jpeg, .png, and .gif] files are allowed";
        }
        finfo_close($finfo);
    }

    // we need a method to validate the image's name
    //  the method will return the sanitized image name, so we are sure that it is save to store the name in the database

    private function imageNameValidation()
    {
        return $this->image_name = filter_var($this->image_name, FILTER_SANITIZE_STRING);
       
    }
    private function imageNameValidation2()
    {
        return $this->image_name2 = filter_var($this->image_name2, FILTER_SANITIZE_STRING);
       
    }
    private function imageNameValidation3()
    {
        return $this->image_name3 = filter_var($this->image_name3, FILTER_SANITIZE_STRING);
       
    }





    // we need a method to validate the max upload size
    // the method will return an error if the file's size exceeds the 2MB limit

    private function sizeValidation()
    {
        if ($this->image_size > $this->upload_max_size) {
            return $this->error = "File is too large";
        }
       
      
    }

    private function sizeValidation2(){
        if ($this->image_size2 > $this->upload_max_size2) {
            return $this->error = "File is too large";
        }
    }

    private function sizeValidation3(){
        if ($this->image_size3 > $this->upload_max_size3) {
            return $this->error = "File is too large";
        }
    }

    // we need to check if the file already exists in the folder
    // the method will return an error if the file exists

    private function checkFile()
    {
        if (file_exists($this->uploads_folders . $this->newName())) {
            return $this->error = "File already exists in the folder";
        }
       
        
    }

    private function checkFile2(){
        if (file_exists($this->uploads_folders2 . $this->newName2())) {
            return $this->error = "File already exists in the folder";
        }
    }

    private function checkFile3(){
        if (file_exists($this->uploads_folders3 . $this->newName3())) {
            return $this->error = "File already exists in the folder";
        }
    }
    // we will move the file from our temporary storage to the uploads folder
    // when we're uploading a file, php is storing that file to a temporary location in the server. Then we have to move the file to our uploads folder



    private function newName()
    {
        return "veecla" . md5($this->image_name);
    }
    private function newName2()
    {
        return "veecla" . md5($this->image_name2);
    }
    private function newName3()
    {
        return "veecla" . md5($this->image_name3);
    }




    private function moveFile()
    {

        // initially the #3 was $this->image_name, but the because it was appearing in the upload folder as the default image name and appeared in the database as the encrypted name, i have to change it here to the newNname,,,with the method created
        // i switched it back to image name because i am trying something
        if (!move_uploaded_file($this->image_temp, $this->uploads_folders . $this->newName())) {
            return $this->error = "There was an error, please try again";
        }
       
        
    }

    private function moveFile2(){
        if (!move_uploaded_file($this->image_temp2, $this->uploads_folders2 . $this->newName2())) {
            return $this->error = "There was an error, please try again";
        }
    }
    private function moveFile3(){
        if (!move_uploaded_file($this->image_temp3, $this->uploads_folders3 . $this->newName3())) {
            return $this->error = "There was an error, please try again";
        }
    }
}
