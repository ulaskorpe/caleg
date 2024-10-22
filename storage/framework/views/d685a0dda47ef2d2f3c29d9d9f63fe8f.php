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
    Yeni şifreniz :  <?php echo e($password); ?>, <br>
    guvenliktabelalari.com  giriş yapmak için için aşağıdaki linke tıklayınız :
 
  <a href="<?php echo e(url('/giris')); ?>" target="_blank"><?php echo e(url('/giris')); ?></a>  
</body>
</html><?php /**PATH /home/vagrant/code/caleg/resources/views/emails/forget_pw.blade.php ENDPATH**/ ?>