<?php
require_once '../Model/Task.php';

$tasks = [];

function get_tasks() {
    global $tasks;
    return $tasks;
}

function add_task($title) {
    global $tasks;
    $newId = count($tasks) + 1;
    $tasks[] = new Task($newId, $title);
}

function edit_task($taskId) {
    global $tasks;
    foreach ($tasks as $task) {
        if ($task->getId() == $taskId) {
            $task->setTitle($_POST['newTitle']);
        }
    }
}

function delete_task($taskId) {
    global $tasks;
    foreach ($tasks as $key => $task) {
        if ($task->getId() == $taskId) {
            unset($tasks[$key]);
        }
    }
}