<?php
session_start();
$server = "localhost";
$user = "yfan24";
$password = "E%aiQRN=";    
$db = 'yfan24_1';

// Creating connection
$conn = new mysqli($server, $user, $password, $db);

if (isset($_POST['Login'])){

    $uname = mysqli_real_escape_string($conn,$_POST['txt_uname']);
    $password = mysqli_real_escape_string($conn,$_POST['txt_pwd']);
    
    #echo $uname;
    #echo $password;
	
    if ($uname != "" && $password != ""){
        $sql_query = "select count(*) as cntUser from Account where UserID='$uname' and Password='$password'";
        $result = mysqli_query($conn,$sql_query);
        $row = mysqli_fetch_array($result);
        $count = $row['cntUser'];
	echo $count;
	
        if($count > 0){
            $_SESSION['uname'] = $uname;
            header('Location: items.php');
        }else{
            echo "Invalid username and password";
        }

    }

}

?>
