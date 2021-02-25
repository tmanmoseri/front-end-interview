<!--<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>Log In</h2>

    <form method="POST" action="/login">
        <?php echo e(csrf_field()); ?>

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email">
        </div>

        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>

        <div class="form-group">
            <button style="cursor:pointer" type="submit" class="btn btn-primary">Login</button>
        </div>

    </form>

    <a href="/register">Register</a>
</body>
</html>
-->


<?php $__env->startSection('body'); ?>
<div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
            <br /><br /><br />
               <?php $__env->startSection('login_panel_title','Please Sign In'); ?>
               <?php $__env->startSection('login_panel_body'); ?>

               <h2>Log In</h2>

               <form method="POST" action="/login">
                   <?php echo e(csrf_field()); ?>

                   <div class="form-group">
                       <label for="email">Email:</label>
                       <input type="email" class="form-control" id="email" name="email">
                   </div>

                   <div class="form-group">
                       <label for="password">Password:</label>
                       <input type="password" class="form-control" id="password" name="password">
                   </div>

                   <div class="form-group">
                       <button style="cursor:pointer" type="submit" class="btn btn-primary">Login</button>
                   </div>

               </form>

               <a href="/register">Register</a>

                <?php $__env->stopSection(); ?>
                <?php echo $__env->make('widgets.panel', array('as'=>'login', 'header'=>true), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.plane', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>