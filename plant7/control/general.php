<?php

$switch = $_POST['switch'];
switch ($switch) {
    case 1: login();
        break;
    case 2: changePassword();
        break;
}

function login() {
    $username = $_POST['username'];
    $password = $_POST['password'];
    include '../model/general.php';
    $obj = new General();
    $result = $obj->login($username, $password);
    if (mysql_num_rows($result) == 1) {
        session_start();
        $array = mysql_fetch_array($result);
        $_SESSION['username'] = $array['username'];
        $_SESSION['plant_no'] = $array['plant_no'];
        $_SESSION['user_level'] = $array['user_level'];
        if ($_SESSION['user_level'] == 'other') {
            header("location:../view/usermenu.php");
        } else {
            header("location:../view/menu.php");            
        }
    } else {
        header("location:../view/index.php?err=1");
    }
}

function changePassword(){
    $username = $_POST['username'];
    $oldpwd = $_POST['oldpw'];
    include '../model/general.php';
    $obj = new General();
    $result = $obj ->login($username, $oldpwd);
    if(mysql_num_rows($result) == 0){
        header("location:../view/changepassword.php?err=1");
    }else{
        $newpwd = $_POST['newpw'];
        $result1 = $obj ->changePwd($username, $newpwd);
        header("location:../view/changepassword.php?suc=1");        
    }
}

?>