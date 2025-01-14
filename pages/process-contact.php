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

    // Basic server-side validation
    if (empty($name) || empty($email) || empty($phone) || empty($message)) {
        echo json_encode(['success' => false]);
        exit;
    }

    // Validate email format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo json_encode(['success' => false]);
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