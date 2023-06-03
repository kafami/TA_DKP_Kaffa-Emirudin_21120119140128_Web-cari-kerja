<?php
include("userService.php");
$user = new userService($_POST['email'], $_POST['password'],$_POST['username']);
if($get_user = $user->login()) {
 header("location:home.php");
} else {
 echo 'Invalid Login <br> username/password might be wrong';
}