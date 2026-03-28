<?php
require_once __DIR__ . '/../models/Task.php';

class TaskController {
    private $taskModel;

    public function __construct() {
        $this->taskModel = new Task();
    }

    public function index() {
        $tasks = $this->taskModel->getAllTasks();
        require_once __DIR__ . '/../views/tasks/index.php';
    }

    public function create() {
        $users = $this->taskModel->getAllUsers();
        require_once __DIR__ . '/../views/tasks/create.php';
    }

    public function store() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $title = $_POST['title'];
            $description = $_POST['description'];
            $user_id = $_POST['user_id'];

            $this->taskModel->addTask($title, $description, $user_id);
            header("Location: index.php");
            exit;
        }
    }

    public function edit() {
        $id = $_GET['id'];
        $task = $this->taskModel->getTaskById($id);
        $users = $this->taskModel->getAllUsers();
        require_once __DIR__ . '/../views/tasks/edit.php';
    }

    public function update() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = $_POST['id'];
            $title = $_POST['title'];
            $description = $_POST['description'];
            $user_id = $_POST['user_id'];

            $this->taskModel->updateTask($id, $title, $description, $user_id);
            header("Location: index.php");
            exit;
        }
    }

    public function delete() {
        $id = $_GET['id'];
        $this->taskModel->deleteTask($id);
        header("Location: index.php");
        exit;
    }
}
?>