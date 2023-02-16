<head>
    <meta charset="UTF-8">
    <title>Главная</title>
</head>
<body>

<?php include "menu.php" ?>

<div class="container text-center">
    <div class="row">
        <form  action ='?controller=tasks&action=add' method="post" class="sign-in-form mt-5 mt-md-5 col-lg-4 col-md-5 col-sm-8">
            <label for="taskName" class="visually-hidden">Введите</label>
            <input type="text"  name="taskName" class="form-control mt-3" placeholder="Имя пользователя" required="" autofocus="">
            <button class="w-75 btn btn-lg btn-primary mt-1" type="submit">Войти</button>
        </form>
    </div>
</div>
 
<?php foreach ($tasks as $task):?>
    <div>
        <?=$task->getDescription()?>
    </div>
<?php endforeach;?>


</body>