<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Main page !!!</h1>
<?php $__env->startSection('sidebar'); ?>
    This is the master sidebar.
<?php echo $__env->yieldSection(); ?>

<div class="container">
    <?php echo $__env->yieldContent('content'); ?>
</div>
Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab consequuntur dolore eos magni, minus mollitia quaerat quis recusandae vero? Cum eius et modi. Aperiam distinctio facilis ipsum iusto magnam nemo.
</body>
</html>