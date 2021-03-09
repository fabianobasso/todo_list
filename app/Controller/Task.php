<?php

    if(!empty($_POST['task']) && !trim($_POST['task']) == ''){
        require_once MODEL . 'Task.php';
        require_once MODEL . 'TaskOperation.php';

        $task = new Task();
        $task->__set('task', trim($_POST['task']));
        $task->__set('idTodoUser', $_POST['idUser']);

        $taskOperation = new TaskOperation(Connection::connect(), $task);
        
        $rowAffected = $taskOperation->createTask();

        if($rowAffected > 0){
            echo convertJson('insert', true);
        }else{
            echo convertJson('insert', false);
        }
    }else{
        echo convertJson('task', false);
    }
    