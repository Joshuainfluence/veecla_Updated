<?php
// HomeController.php

class HomeController {
    public function index() {
        // Include any necessary files or libraries

        // Fetch data from the database or perform any other necessary actions
        $pageTitle = "Home Page";
        $welcomeMessage = "Welcome to our website!";

        // Load the view file
        require_once __DIR__ . '/../index.php';
    }
}
?>