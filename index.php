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
        echo'<p style = "color:green">you are now loggedout</p>';
        unset($_GET);
    }
}
if(isset($_SESSION["user"]))
{?>
    <a href="dashboard.php">Go to dashboard</a>|
    <form>
        <button href="control.proc.logout.php">Logout</a>
</form>
<?php
}
include_once('lib/footer.php');?>