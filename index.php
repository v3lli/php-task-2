<?php include_once('lib/header.php');?>
<?php
session_start();
if(isset($_GET["message"]))
{
    if($_GET["message"] == "logged_in"){
        echo'<p style = "color:green">you are now logged in</p>';
        unset($_GET);
    }elseif($_GET["message"] == "registered"){
        echo'<p style = "color:green">you are now registered</p>';
        unset($_GET);
    }elseif($_GET["message"] == "loggedout"){
        echo'<p style = "color:green">you are now logged out</p>';
        unset($_GET);
    }
}
if(isset($_SESSION["userf"]))
{?>
    <a href="dashboard.php">Go to dashboard </a>|
    <a href="control/proc.logout.php">Log out</a>|
    
<?php
}
include_once('lib/footer.php');?>