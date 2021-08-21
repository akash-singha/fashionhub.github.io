<?php

require  "./includes/connection.php";

  $oldpassword=$_POST['oldpassword'];
  $oldpassword_encrypt= md5($oldpassword);
  $newpassword=$_POST['newpassword'];
  //echo $newpassword;
  $retypenewpassword=$_POST['retypenewpassword'];
  //echo $retypenewpassword;
  $select_query="SELECT password from users where password='$oldpassword_encrypt';";
  $select_query_res= mysqli_query($con, $select_query) or die(mysqli_error($con));
  if(mysqli_num_rows($select_query_res)==0){
      header('location:settings.php?password_error=enter correct old password');
      exit;
  }
  else{
      if(strlen($newpassword)<3){
            header('location:settings.php?password_error=enter password with atleast 4 characters');
            exit;
      }
      else if(strcmp($newpassword,$retypenewpassword)==0){
         $newpassword_encrypt=md5($newpassword);
         $update_query="UPDATE users SET password='$newpassword_encrypt' WHERE password='$oldpassword_encrypt';";
         $update_query_res= mysqli_query($con, $update_query) or die(mysqli_error($con));
         header('location:settings.php?password_error=password updated successfully');
         exit;
      }
      else{
         header('location:settings.php?password_error=entered new password and retyped password do not match');
         exit;
      }
  }
?>
