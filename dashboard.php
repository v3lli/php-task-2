<?php include_once('lib/header.php');
session_start();?>
<p><?php echo 'Welcome'.$_SESSION['uname'];?></p>

<?php include_once('lib/footer.php');?>