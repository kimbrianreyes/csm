<?php
class User {
    private $conn;

    public function __construct($db) {
        $this->conn = $db;
    }
    public function register($name, $username, $course, $id_number, $password, $security_question) {
        $hashedPassword = password_hash($password, PASSWORD_BCRYPT); // Use password_hash for better security
        $query = "INSERT INTO users (name, username, course, id_number, password, security_question) VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("ssssss", $name, $username, $course, $id_number, $hashedPassword, $security_question);
    
        if ($stmt->execute()) {
            return true;
        } else {
            error_log("Error executing query: " . $stmt->error);
            return false;
        }
    }
    
    public function login($username, $password) {
        $query = "SELECT * FROM users WHERE username = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();
    
        if ($result->num_rows > 0) {
            $user = $result->fetch_assoc();
            if (password_verify($password, $user['password'])) {
                return $user; 
            } else {
                return false;
            }
        } else {
            return false; 
        }
    }
}
?>
