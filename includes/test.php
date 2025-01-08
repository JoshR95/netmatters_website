<?php
require_once 'database.php';  // Remove 'includes/' since they're in the same directory

// If we got this far without errors, we can look at our data
echo "<pre>";
print_r($newsItems);
echo "</pre>";