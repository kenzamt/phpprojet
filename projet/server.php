<?php
function route_request() {
    $route = $_SERVER['REQUEST_URI'];

    if ($route === '/DisplayTasks') {
        require_once('./DisplayTasks/controller.php');
        return;
    }

    echo "<h1>404 NOT FOUND</h1>";
}

route_request();

route_request();