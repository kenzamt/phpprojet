<?php
require_once '../Model/Task.php';
require_once 'data.php';
require_once 'view.php';

// Gérer les actions (ajouter, éditer, supprimer)
if (isset($_GET['action'])) {
    $action = $_GET['action'];
    if ($action === 'add' && isset($_POST['newTask'])) {
        $title = $_POST['newTask'];
        add_task($title);
    } elseif ($action === 'edit' && isset($_GET['id'])) {
        $taskId = $_GET['id'];
        edit_task($taskId);
    } elseif ($action === 'delete' && isset($_GET['id'])) {
        $taskId = $_GET['id'];
        delete_task($taskId);
    }
}

$tasks = get_tasks();
display_tasks_view($tasks);