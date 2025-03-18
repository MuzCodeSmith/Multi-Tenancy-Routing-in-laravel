<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    * {box-sizing: border-box}

    .form-box{
        display:flex;
        flex-direction:column;
        justify-content:center;
        align-items:center;
        height:97vh;
    }

    /* Add padding to containers */
    .container {
    padding: 16px;
    width: 35%;
    margin-inline: auto;
    }

    /* Full-width input fields */
    input[type=text], input[type=password] {
    width: 100%;
    padding: 15px;
    margin: 5px 0 15px 0;
    display: inline-block;
    border: none;
    background: #f1f1f1;
    }

    input[type=text]:focus, input[type=password]:focus {
    background-color: #ddd;
    outline: none;
    }

    /* Overwrite default styles of hr */
    hr {
    border: 1px solid #f1f1f1;
    margin-bottom: 25px;
    }

    /* Set a style for the submit/register button */
    .registerbtn {
    background-color: #04AA6D;
    color: white;
    padding: 16px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;
    }

    .registerbtn:hover {
    opacity:1;
    }

    /* Add a blue text color to links */
    a{
    color: dodgerblue;
    }
    .error{
        color:red;
    }

    /* Set a grey background color and center the text of the "sign in" section */
    .signin {
    background-color: #f1f1f1;
    text-align: center;
    }
</style>
<body>
<form action="" method="POST" class="form-box">
    <?php echo csrf_field(); ?>
  <div class="container">
  <?php if($errors): ?>
        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div><?php echo e($error); ?></div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>
    <h1>Teacher Login</h1>
    <p>Please fill this form to Login into your account.</p>
    <hr>
    
    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" value="<?php echo e(old('email')); ?>" name="email" id="email" >
    <?php if($errors->has('email')): ?>
    <span class="error"><?php echo e($errors->first('email')); ?></span>
    <br>
    <br>
    <?php endif; ?>


    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" value="<?php echo e(old('password')); ?>"  name="password" id="password" >
    <?php if($errors->has('password')): ?>
    <span class="error"><?php echo e($errors->first('password')); ?></span>
    <br>
    <br>
    <?php endif; ?>

    <button type="submit" class="registerbtn">Login</button>
  </div>

  <div class="container signin">
    <p>Dont have an account? <a href="<?php echo e(route('teacher.register')); ?>">Register</a>.</p>
  </div>
</form>
</body>
</html><?php /**PATH D:\xampp\htdocs\auth-app\resources\views/Teacher/teacher-login.blade.php ENDPATH**/ ?>