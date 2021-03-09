<?php
    session_start();
    require_once MODEL . 'Dashboard.php';
    require_once MODEL . 'Task.php';

    $task = new Task();
    $task->__set('idTodoUser', $_SESSION['id']);
    $task->__set('idTodoStatusPeding', '1');
    $task->__set('idTodoStatusComplete', '2');
    $task->__set('taskActive', '1');
    $task->__set('taskInactive', '0');

    $dashboard = new Dashboard(Connection::connect(), $task);
    $totalTask = $dashboard->totalTask();

    $staticDashboard = ['totalTask' => $totalTask['total']];
    echo json_encode($staticDashboard);