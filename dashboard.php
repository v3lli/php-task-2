<?php include_once('lib/header.php');
session_start();?>
<p><?php echo "Welcome"." ".$_SESSION['userf']." ".$_SESSION['userl'];?></p>


<p>designation: <?php echo $_SESSION['des']?></p>
<p>gender: <?php echo $_SESSION['gender']?></p>
<p>designation: <?php echo $_SESSION['des']?></p>

<a href="control/proc.logout.php">Log out</a>
<?php include_once('lib/footer.php');?>