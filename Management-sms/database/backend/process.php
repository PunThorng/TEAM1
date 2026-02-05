<?php
declare(strict_types=1);
require_once "db_connect.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $full_name = trim($_POST["full_name"]);
    $username  = trim($_POST["username"]);
    $email     = trim($_POST["email"]);
    $phone     = trim($_POST["phone"]);
    $password  = password_hash($_POST["password"], PASSWORD_DEFAULT);

    // --- FIX START: Check for duplicate username ---
    $check_sql = "SELECT username FROM users WHERE username = ?";
    $check_stmt = $conn->prepare($check_sql);
    $check_stmt->bind_param("s", $username);
    $check_stmt->execute();
    $check_stmt->store_result();

    if ($check_stmt->num_rows > 0) {
        // Redirect back with an error if username exists
        header("Location: ../../pages/index.php?error=Username already taken");
        exit();
    }
    $check_stmt->close();
    // --- FIX END ---

    $sql = "INSERT INTO users (full_name, username, email, phone, password) 
            VALUES (?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssss", $full_name, $username, $email, $phone, $password);

    if ($stmt->execute()) {
        echo "<script>
                alert('Registration Successful!');
                window.location.href='../../include/dashboard.php';
              </script>";
        exit();
       
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>