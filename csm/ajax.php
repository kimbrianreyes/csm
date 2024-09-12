<?php
include 'dbconfig.php';
include 'User.php';

$user = new User($conn);

// register
if (isset($_POST['action']) && $_POST['action'] == 'register') {
    $name = $_POST['name'];
    $username = $_POST['username'];
    $course = $_POST['course'];
    $id_number = $_POST['id_number'];
    $password = $_POST['password'];
    $security_question = $_POST['security_question'];

    error_log("Registering user: Name: $name, Username: $username, Course: $course, ID Number: $id_number, Security Question: $security_question");

    if ($user->register($name, $username, $course, $id_number, $password, $security_question)) {
        echo json_encode(['status' => 'success', 'message' => 'Registration successful!']);
    } else {
        error_log("Registration failed for Username: $username");
        echo json_encode(['status' => 'error', 'message' => 'Error in registration!']);
    }
} else {
    error_log("No action set or action is not 'register'.");
}

// Login Request
if (isset($_POST['action']) && $_POST['action'] == 'login') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $user_data = $user->login($username, $password);
    if ($user_data) {
        session_start();
        $_SESSION['user'] = $user_data;
        echo json_encode(['status' => 'success', 'message' => 'Login successful!']);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Invalid username or password!']);
    }
}
?>