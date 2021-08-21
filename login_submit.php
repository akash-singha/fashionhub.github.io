<?php

require_once("includes/connection.php");

$email=$_POST['email'];
$passwd=$_POST['password'];
$select_query="SELECT email FROM users WHERE email='$email';";
$select_query_res= mysqli_query($con, $select_query) or die(mysqli_error($con));
if(mysqli_num_rows($select_query_res)){
    $encrypt_passwd=md5($passwd);
    $select_query2="SELECT password FROM users WHERE email='$email'";
    $select_query_res2= mysqli_query($con, $select_query2) or die(mysqli_error($con));
    $passwd= mysqli_fetch_array($select_query_res2);
    $passwd_data=$passwd['password'];
   // echo $select_query_res2;
   // echo $encrypt_passwd;
    if(!($encrypt_passwd==$passwd_data)){
        echo '<script type="text/javascript">alert("incorrect password");</script>';
        echo '<script>location.href="index.php";</script>';
             //header('location:loginmodal?password_error=incorrect password');exit;
    }
    else{
    $_SESSION['email']=$email;
    //echo $_SESSION['email'];
    //$_SESSION['id']=mysqli_insert_id($con);
    $sel_q="SELECT id FROM users WHERE email='$email';";
    $sel_q_res= mysqli_query($con, $sel_q) or die(mysqli_error($con));
    $id= mysqli_fetch_array($sel_q_res);
    $_SESSION['id']=$id['id'];
    if(isset($_SESSION['email'])){
       // echo $_SESSION['id'];
        header('location:home.php');
    }
    else{
        echo "Not set";
    }
    }
}
else{
    echo '<script type="text/javascript">alert("incorrect email");</script>';
    echo '<script>location.href="index.php";</script>';
    // header('location:#loginmodal?email_error=email does not exist');exit;
    //echo "<div class='login-modal'>Email does not exist.<br/></div>";
}
?>