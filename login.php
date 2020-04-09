<?php include_once('lib/header.php');
if(isset($_GET["error"])){
    if($_GET["error"] == "accessdenied"){
        echo'<p style = "color:red">Incorrect Details bro</p>';
        unset($_GET);
    }elseif($_GET["error"] == "invalid_email"){
        echo'<p style = "color:red">Email EEE MAAAILL stop typing nonsense!</p>';
        unset($_GET);
    }elseif($_GET["error"] == "emptyfields"){
        echo'<p style = "color:red">please fill in all fields</p>';
        unset($_GET);
    }
}
?>
<form method = "POST" action="control/proc.login.php">
<p>
    <label for="email">E mail</label>
    <input type="text" name = "email" placeholder = "E-mail">
</p>

<p>
    <label for="pword">Password</label>
    <input  type="password" name = "pword" placeholder = "password">
</p>

<p>
    <button type = "submit">login</button>
</p>
</form>
<?php include_once('lib/footer.php');?>
