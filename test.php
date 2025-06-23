<?php
require_once '../includes/database.php';

header('Content-Type: application/json');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate inputs
    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $phone = trim($_POST['phone'] ?? '');
    $message = trim($_POST['message'] ?? '');
    $company = trim($_POST['company'] ?? '');
    $marketing = isset($_POST['marketing_preference']) ? 1 : 0;

    $errors = [];

    // Name validation
    if (empty($name)) {
        $errors['name'] = 'Name is required';
    }

    // Email validation with regex (matching JavaScript pattern)
    if (empty($email)) {
        $errors['email'] = 'Email is required';
    } else {
        $emailRegex = '/^[^\s@]+@[^\s@]+\.[^\s@]+$/';
        if (!preg_match($emailRegex, $email)) {
            $errors['email'] = 'Please enter a valid email';
        }
    }

    // Phone validation with regex (matching JavaScript pattern)
    if (empty($phone)) {
        $errors['phone'] = 'Phone number is required';
    } else {
        $phoneRegex = '/^(?:0|\+44)(?:\d\s?){9,10}$/';
        if (!preg_match($phoneRegex, $phone)) {
            $errors['phone'] = 'Please enter a valid UK phone number';
        }
    }

    // Message validation
    if (empty($message)) {
        $errors['message'] = 'Message is required';
    }

    // If there are validation errors, return them
    if (!empty($errors)) {
        echo json_encode([
            'success' => false, 
            'errors' => $errors
        ]);
        exit;
    }

    try {
        $sql = "INSERT INTO contact_submissions (name, company, email, phone, message, marketing_preference) 
                VALUES (:name, :company, :email, :phone, :message, :marketing)";
        
        $stmt = $pdo->prepare($sql);
        $result = $stmt->execute([
            'name' => $name,
            'company' => $company,
            'email' => $email,
            'phone' => $phone,
            'message' => $message,
            'marketing' => $marketing
        ]);

        echo json_encode(['success' => $result]);
        
    } catch (PDOException $e) {
        // Log error but don't show to user
        error_log("Contact form error: " . $e->getMessage());
        echo json_encode(['success' => false]);
    }
}