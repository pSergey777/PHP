<?php
include_once "model/Task.php";
include_once "model/TaskProvider.php";
include_once "model/User.php";

session_start();
$pdo = require 'db.php';
$pageHeader = "Пользователи";


$username = null;
if (isset($_SESSION['user'])) {
    $username = $_SESSION['user']->getUsername();
} else {
    header("Location: /");
    die();
}
$taskProvider = new TaskProvider($pdo);


if (isset($_GET['action']) && $_GET['action'] === 'add') {
    $taskText = strip_tags($_POST['task']);
    $taskProvider->addTask(new Task($taskText));
    header("Location: /?controller=tasks");
    die();
}

if (isset($_GET['action']) && $_GET['action'] === 'done') {
    $id = $_GET['id'];  
    $taskProvider->completeTask($id);
    header("Location: /?controller=tasks");
    die();
}
$tasks = $taskProvider->getUndoneList();
$doneTasks = $taskProvider->getDoneList();

if (isset($_GET['action']) && $_GET['action'] === 'delete') {
    $id = $_GET['id'];    
    $taskProvider->deleteTask($id);
    header("Location: /?controller=tasks");
    die();
}

include "view/tasks.php";