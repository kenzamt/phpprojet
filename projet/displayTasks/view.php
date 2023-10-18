<?php
function display_tasks_view(array $tasks) {
    echo '<html>';
    echo '<head>';
    echo '<title>Ma To-Do List</title>';
    echo '<link rel="stylesheet" type="text/css" href="style.css">';
    echo '</head>';
    echo '<body>';
    echo '<h1>Ma To-Do List</h1>';
    echo '<ul>';
    foreach ($tasks as $task) {
        echo '<li>' . $task->getTitle() . ' - <a href="controller.php?action=edit&id=' . $task->getId() . '">Éditer</a> | <a href="controller.php?action=delete&id=' . $task->getId() . '">Supprimer</a></li>';
    }
    echo '</ul>';
    echo '<form method="post" action="controller.php?action=add">';
    echo '<input type="text" name="newTask" placeholder="Ajouter une nouvelle tâche" required>';
    echo '<button type="submit">Ajouter</button>';
    echo '</form>';
    echo '</body>';
    echo '</html>';
}