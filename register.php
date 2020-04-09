<?php include_once('lib/header.php');
if(isset($_GET["error"]))
{
    if($_GET["error"] == "emptyfields"){
        echo'<p style = "color:red"> Please fill all fields</p>';
        unset($_GET);
    }elseif($_GET["error"] == "password_missmatch"){
        echo'<p style = "color:red"> Your passwords do not match yo! </p>';
        unset($_GET);
    }elseif($_GET["error"] == "invalid_email"){
        echo'<p style = "color:red">what kind of email is that?</p>';
        unset($_GET);
    }elseif($_GET["error"] == "invalid_entry"){
        echo'<p style = "color:red">No special characters abeg</p>';
        unset($_GET);
    }elseif($_GET["error"] == "username_taken"){
        echo'<p style = "color:red">There is someone already using that e-mail</p>';
        unset($_GET);
    }
}?>

<form method = "POST" action="control/proc.reg.php">

<p>
    <label for="fname">First Name</label>
    <input value = "<?php $_GET['fname']?>" type="text" name = "fname" placeholder = "First Name">
</p>

<p>
    <label for="lname">Last Name</label>
    <input value = "<?php $_GET['lname']?>" type="text" name = "lname" placeholder = "Last Name">
</p>

<p>
    <label for="email">E mail</label>
    <input value = "<?php $_GET['email']?>" type="text" name = "email" placeholder = "E-mail">
</p>

<p>
    <label for="pword">Password</label>
    <input  type="password" name = "pword" placeholder = "password">
</p>

<p>
    <label for="pword">Repeat Password</label>
    <input type="password" name = "pword2" placeholder = "password">
</p>

<p>
    <label for="des">Designation</label>
    <select value = "<?php $_GET['des']?>" name="des">
        <option value="select">Select Designation</option>
        <option value="mt">Medical Practicioner</option>
        <option value="patient">Patient</option>
        <option value="nurse">Nurse</option>
    </select>
</p>

<p>
    <label for="gen">Gender</label>
    <select name="gen" >
        <option value="select">Select Gender</option>    
        <option value="male">Male</option>
        <option value="female">female</option>
    </select>
</p>
<p>
    <button type = "submit">Register</button>
</p>
</form>
<?php include_once('lib/footer.php');?>

