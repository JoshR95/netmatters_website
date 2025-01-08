<?php
// 1. Include Configuration
require_once 'config.php';  // Loads environment variables and database constants from config.php

// 2. Database Connection Block
try {
    // 3. Create PDO Instance with Environment Variables
    $pdo = new PDO(
        "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=utf8mb4",  // Connection string using constants
        DB_USER,        // Username from .env
        DB_PASS,        // Password from .env
        [   // Array of PDO options for better security and functionality
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,        // Throws exceptions on errors instead of silent failures
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,   // Returns data as associative arrays (e.g., ['id' => 1] instead of [0 => 1])
            PDO::ATTR_EMULATE_PREPARES => false                 // Uses real prepared statements for better security against SQL injection
        ]
    );
    
    // 4. Database Query
    $stmt = $pdo->query("SELECT * FROM news_articles");  // Prepare and execute query to get all news articles
    $newsItems = $stmt->fetchAll();  // Fetch all rows into an array
    
// 5. Error Handling
} catch (PDOException $e) {  // Catches any database-related errors
    die("Connection failed: " . $e->getMessage());  // Stops execution and displays error message
}

// Note: The connection will automatically close when the script ends
// You can now use $newsItems array in your PHP code to display the news articles

 

// when connecting project to a database, remember the project has to be connect via the extension PHP server or in xampps htdocs folder if using XAMPP to work
// for XAMP  - 
    // we can create a symbolic link to our original project so github still links with code like this run in command prompt - 
    // mklink /D "C:\xampp\htdocs\netmatters_website" "C:\Nettmaters_main\assessments\websiteNew"  
    //                   htdocs location              original project location linked to github    - IMPORTANT - has to be ran as adiminstrator