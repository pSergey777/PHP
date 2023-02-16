<?php

?>
<head>
    <meta charset="UTF-8">
    <title>Главная</title>
</head>
<body>
<h1><?= $pageHeader ?></h1>

<?php if (is_null($username)): ?>
    <a href="/?controller=security">Войти</a>
<?php else: ?>
    <?= $username ?> <a href="/?controller=security&action=logout">Выйти</a>
    <a href="/">Главная</a>

<?php endif; ?><br><br>
<form action="/?controller=tasks&action=add" method="post">
    <input type="text" name="task" placeholder="Введите имя пользователя">
    <input type="submit" value="Добавить">
</form>
        <h2>Авторизованные пользователи:</h2>
<?php foreach ($tasks as $task): ?>
    <div>
        <?=$task->getDescription()?>
        <a href="/?controller=tasks&action=done&id=<?=$task->getId()?>">[Done]</a>
        <a href="/?controller=tasks&action=delete&id=<?=$task->getId()?>">[Delete]</a>
    </div>
<?php endforeach; ?>
        <h2>Пользователи завершившие авторизацию: </h2>
<?php foreach ($doneTasks as $task): ?>
    <div>
        <?=$task->getDescription()?>
        <a href="/?controller=tasks&action=delete&id=<?=$task->getId()?>">[Delete]</a>
    </div>
<?php endforeach; ?>


</body>
