<?php 

// checking is the form was submitted successfully
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    // fetching out the details from the form
   
    $name = htmlspecialchars($_POST['name'], ENT_QUOTES, 'UTF-8');
    $email = htmlspecialchars($_POST['email'], ENT_QUOTES, 'UTF-8');
    

    // including all necessary files
    require_once __DIR__. "/../config/dbh.php";
    require_once __DIR__. "/../config/session.php";
    require_once __DIR__. "/../public/signup.classes.php";
    require_once __DIR__. "/../public/signup.contr.php";

    // With the help of require_once we are able to get the signup controller class 
    // which is responsible for all form validation 
    $signup = new EmailSubcription($name, $email);

    // signUser is a method created in the controller class for final execution 
    // header("Location: ../sendEmail/send.php?error=none");
    // header("Location: ../sendEmail/send.php?error=none");
   
    $signup->subscribeEmail();

    header("location: ../thankYou.php?id=thankYou");
    
    
}