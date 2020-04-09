<?php
    // if( isset($_POST["submit"])){
    session_start();
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $email = $_POST["email"];
    $des = $_POST["des"];
    $pword = $_POST["pword"];
    $pword2 = $_POST["pword2"];
    $uname = $_POST["uname"];

    

    // no need for this first check, since i used *required* in my form; except to fulfil all righteousness 
    if(empty($fname)||empty($lname) ||empty($email) ||empty($des)||empty($pword) ||empty($pword2) ||empty($uname)||($des =="select")||($gen == "select")){
        header('Location:../register.php?error=emptyfields&uname='.$uname."&fname=".$fname."&lname=".$lname."&email=".$email."&des=".$des);
        exit();
    }elseif($pword !== $pword2){
        header('Location:../register.php?error=password_missmatch&uname='.$uname."&fname=".$fname."&lname=".$lname."&email=".$email."&des=".$des);
        exit();
    }elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        header('Location:../register.php?error=invalid_email&uname='.$uname."&fname=".$fname."&lname=".$lname."&des=".$des);
        exit();
    }elseif(!preg_match('/^[a-zA-Z0-9]*$/', $uname)){
        header('Location:../register.php?error=invalid_entry&fname'.$fname."&lname".$lname."&des".$des);
        exit();
    }elseif(!preg_match('/^[a-zA-Z0-9]*$/', $fname)){
        header('Location:../register.php?error=invalid_entry&uname'.$uname."&lname".$lname."&des".$des);
        exit();
    }elseif(!preg_match('/^[a-zA-Z0-9]*$/', $lname)){
        header('Location:../register.php?error=invalid_entry&fname'.$fname."&uname".$uname."&des".$des);
        exit();
    }else{
        $users = scandir("../db/users");
        $totalusers = count($users);
        for($i=0;$i < $totalusers;$i++){
            $current == $totalusers[$i];
            if( $current == $email.".json"){
                header('Location:../register.php?error=username_taken&fname'.$fname."&lname".$lname."&des".$des);
                exit();
            }
        }
    
    $newuser = $totalusers;
    $userdata = [
        'id'=> $newuser,
        "first_name"=>$fname,
        "last_name"=>$lname,
        "mail"=>$email,
        "passsword"=>$pword,
        "designation"=>$des,
        "username"=>$uname
    ];
    $_SESSION["usr"] = $uname;

    file_put_contents("../db/users/".$email.".json", json_encode($userdata));
    header("Location:../index.php?message=registered");
    


    }
// }