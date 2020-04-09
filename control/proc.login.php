<?php
    // if( isset($_POST["submit"])){
    session_start();
    $email = $_POST["email"];
    $pword = $_POST["pword"];
    
if(empty($email) ||empty($pword)){
        header('Location:../login.php?error=emptyfields');
        exit();
    }elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        header('Location:../login.php?error=invalid_email');
        exit();
    }else{
        $users = scandir("../db/users");
        //var_dump($users);
        $totalusers = count($users);
        for($i=2;$i < $totalusers;$i++){
            if($email.".json" == $users[$i]){
                $userobj = file_get_contents("../db/users/".$users[$i]);
                $userdeets = json_decode($userobj);
                $pwordchk = $userdeets->passsword;
                if($pword == $pwordchk){
                    //logged in
                    echo"got here";
                    $_SESSION["userf"] = $userdeets->first_name;
                    $_SESSION["userl"] = $userdeets->first_name;
                    $_SESSION["des"] = $userdeets->first_name;
                    $_SESSION["gender"] = $userdeets->first_name;
                    


                    header("Location:../index.php?message=logged_in");
                }else{
                    exit();
                }

            }else{
                //fail
                header("Location:../login.php?error=accessdenied");
            }
        }
    }