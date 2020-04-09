<?php include_once('lib/header.php');
session_start();?>
<p><?php echo "Welcome "." ".$_SESSION['userf']." ".$_SESSION['userl'];?></p>

<p>first name :<?php echo $_SESSION['userf']?></p>
<p>last name :<?php echo $_SESSION['userl']?></p>

<p>designation: <?php echo $_SESSION['des']?></p>
<p>gender: <?php echo $_SESSION['gender']?></p>

<?php include_once('lib/footerout.php');?>