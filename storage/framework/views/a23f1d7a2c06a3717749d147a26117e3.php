<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    Sayın <?php echo e($name); ?>,<br>
    
    guvenliktablelalari.com  kaydınızı tamamlamak için aşağıdaki linke tıklayınız :
 
  <a href="<?php echo e($link); ?>" target="_blank"><?php echo e($link); ?></a>  
</body>
</html><?php /**PATH /home/vagrant/code/caleg/resources/views/emails/user_created.blade.php ENDPATH**/ ?>