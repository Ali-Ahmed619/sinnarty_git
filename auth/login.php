<?php
session_start();
require_once __DIR__ . '/../config/db.php';

header('Content-Type: application/json');

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = trim($_POST["email"] ?? '');
    $password = trim($_POST["password"] ?? '');

    // Check if fields are empty
    if (empty($email) || empty($password)) {
        echo json_encode(["status" => "error", "message" => "Please fill in all fields."]);
        exit();
    }

    // Get user by email
    $stmt = $conn->prepare("SELECT * FROM Users WHERE Email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();

    $result = $stmt->get_result();

    if ($result->num_rows == 1) {

        $user = $result->fetch_assoc();

        // Verify password
        if (password_verify($password, $user["Password"])) {

            // Store session
            $_SESSION["UserID"] = $user["UserID"];
            $_SESSION["FullName"] = $user["FullName"];
            $_SESSION["Email"] = $user["Email"];
            $_SESSION["Role"] = $user["Role"];
            $_SESSION["ProfileImage"] = $user["ProfileImage"];

            // Determine redirect path
            $redirect = ($user["Role"] == "Admin") ? "pages/admin.php" : "pages/profile.php";
            
            echo json_encode(["status" => "success", "redirect" => $redirect]);
            exit();

        } else {
            echo json_encode(["status" => "error", "message" => "Incorrect password."]);
        }

    } else {
        echo json_encode(["status" => "error", "message" => "Email does not exist."]);
    }

    $stmt->close();
}

$conn->close();

?>