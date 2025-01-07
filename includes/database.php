<?php  // Opens PHP code block

// when connecting project to a database, remember the project has to be in xampps htdocs folder if using XAMPP to work,
// we can create a symbolic link to our original project so github still links with code like this run in command prompt - 
// mklink /D "C:\xampp\htdocs\netmatters_website" "C:\Nettmaters_main\assessments\websiteNew"  
//                   htdocs location              original project location linked to github    - IMPORTANT - has to be ran as adiminstrator

// 1. Database Configuration
$host = 'localhost';      // Server where database is hosted (usually localhost for local development)
$dbname = 'netmatters_website';  // Name of your database
$username = 'root';      // Database username (root is default for XAMPP)
$password = '';          // Database password (blank is default for XAMPP)

// 2. Connection Block
try {  // Start of try block - attempts to execute the code inside
    
    // 3. Create Database Connection
    $pdo = new PDO(
        "mysql:host=$host;dbname=$dbname;charset=utf8mb4",  // Connection string (where and what database)
        $username,  // Username for database
        $password,  // Password for database
        [   // Array of PDO options
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,        // Enables error reporting
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,   // Returns data as associative array
            PDO::ATTR_EMULATE_PREPARES => false                 // Uses real prepared statements
        ]
    );

    echo "Connected successfully";  // Test message to confirm connection works
    
    // 4. Database Query
    $stmt = $pdo->query("SELECT * FROM news_articles");  // Prepare and execute query
    $newsItems = $stmt->fetchAll();  // Get all results as an array
    
// 5. Error Handling
} catch (PDOException $e) {  // Catches any database errors
    die("Connection failed: " . $e->getMessage());  // Stops execution and shows error message
}


 