<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<link href="<?php echo e(asset('/css/app.css')); ?>" rel="stylesheet">

<body>
   <div class="container">
        <?php echo $__env->yieldContent('content'); ?>
   </div>

<script src="<?php echo e(asset('/js/jquery.js')); ?>"></script>
<script src="<?php echo e(asset('/js/app.js')); ?>"></script>
<script src="<?php echo e(asset('/js/bootstrap.js')); ?>"></script>
</body>
</html>
<?php /**PATH /media/zilong/SYSTEM/Users/Tiger/Documents/Backup linux/Desktop/Laravel-app/blog5.8-app/resources/views/layouts/master.blade.php ENDPATH**/ ?>