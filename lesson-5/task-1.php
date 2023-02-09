<?php


require_once './User.php';

class Task
{
    private User $user;
    private ?string $description;
    private DateTime $dateCreated;
    private DateTime $dateUpdated;
    private ?DateTime $dateDone;
    private int $priority;
    private bool $isDone;
    private array $comments;


    function __construct(User $user, string $description = null, int $priority = 0)
    {
        $this->user = $user;
        $this->description = $description;
        $this->dateCreated = new DateTime;
        $this->dateUpdated = new DateTime;
        $this->dateDone = null;
        $this->priority = $priority;
        $this->isDone = false;
        $this->comments = [];
    }

    function getDescription()
    {
        return $this->description;
    }

    function show(): array
    {
        return [
            'userName' => $this->user->getName(),
            'description' => $this->description,
            'dateCreated' => $this->dateCreated,
            'dateUpdated' => $this->dateUpdated,
            'dateDone' => $this->dateDone,
            'priority' => $this->priority,
            "isDone" => $this->isDone ? 'Done' : 'Not Done',
            "comments" => count($this->comments) ? $this->comments : 'no comments',
        ];

    }

    function showComments(): array
    {
        return $this->comments;
    }

    function setDescription(?string $description): string
    {
        $this->dateUpdated = new DateTime;
        return $this->description = $description;
    }

    function markAsDone(): bool {
        $this->dateDone = new DateTime;
        return $this->isDone = true;
    }

    function setAddComment(string $comment): void {
        array_push($this->comments, $comment);
    }

}

$user = new User('Sergey', 'sergey@mail.ru', 30);

$task = new Task($user,  1);
$taskAfter = new Task($user);

$taskAfter->setDescription();
$task->markAsDone();
