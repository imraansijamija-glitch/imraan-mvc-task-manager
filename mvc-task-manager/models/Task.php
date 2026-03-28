<?php
require_once __DIR__ . '/../config/Database.php';

class Task {
    private $conn;

    public function __construct() {
        $database = new Database();
        $this->conn = $database->connect();
    }

    public function getAllTasks() {
        $sql = "SELECT tasks.*, users.name AS user_name
                FROM tasks
                INNER JOIN users ON tasks.user_id = users.id
                ORDER BY tasks.id DESC";
        return $this->conn->query($sql);
    }

    public function getAllUsers() {
        $sql = "SELECT * FROM users ORDER BY name ASC";
        return $this->conn->query($sql);
    }

    public function addTask($title, $description, $user_id) {
        $title = $this->conn->real_escape_string($title);
        $description = $this->conn->real_escape_string($description);
        $user_id = (int)$user_id;

        $sql = "INSERT INTO tasks (title, description, user_id)
                VALUES ('$title', '$description', $user_id)";
        return $this->conn->query($sql);
    }

    public function getTaskById($id) {
        $id = (int)$id;
        $sql = "SELECT * FROM tasks WHERE id = $id";
        $result = $this->conn->query($sql);
        return $result->fetch_assoc();
    }

    public function updateTask($id, $title, $description, $user_id) {
        $id = (int)$id;
        $title = $this->conn->real_escape_string($title);
        $description = $this->conn->real_escape_string($description);
        $user_id = (int)$user_id;

        $sql = "UPDATE tasks
                SET title='$title', description='$description', user_id=$user_id
                WHERE id=$id";
        return $this->conn->query($sql);
    }

    public function deleteTask($id) {
        $id = (int)$id;
        $sql = "DELETE FROM tasks WHERE id = $id";
        return $this->conn->query($sql);
    }
}
?>