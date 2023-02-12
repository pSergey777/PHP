<?php

require_once './index.php';
require_once './task-1.php';

class Comment {
    private User $author;
    private Task $task;
    private string $text;

    function __construct(User $user, Task $task, string $text)
    {
        $this-> author = $user ;
        $this-> task = $task ;
        $this-> text = $text;
    }

    function getComment ()
    {
        return $this -> text;
    }
}

class TaskService {
    static function addComment (User $user,Task $task, string $text ) {
        $comment = new Comment( $user, $task,  $text );
        $task-> setAddComment($comment -> getComment ());
        return $comment;
    }
}

$user = new User('Sergey', 'sergey@mail.ru', 30);
$task = new Task($user,  1);

TaskService::addComment($user, $task, 'first comment');
TaskService::addComment($user, $task, 'second comment');
TaskService::addComment($user, $task, 'third comment');
