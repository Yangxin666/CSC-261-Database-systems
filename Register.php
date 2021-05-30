<?php
$server = "localhost";
$user = "yfan24";
$password = "E%aiQRN=";    
$db = 'yfan24_1';

// Creating connection
$conn = new mysqli($server, $user, $password, $db);


if (isset($_POST['Register'])){

    $uname = mysqli_real_escape_string($conn,$_POST['txt_uname']);
    $name = mysqli_real_escape_string($conn,$_POST['name']);
    $password = mysqli_real_escape_string($conn,$_POST['txt_pwd']);
    $Phone = mysqli_real_escape_string($conn,$_POST['phone']);
    $Address = mysqli_real_escape_string($conn,$_POST['address']);
    $Forgetme = mysqli_real_escape_string($conn,$_POST['forgetme']);
    

    #echo $uname;
    #echo $password;
    $sql_query = "Insert INTO User values ('$uname','$name', '$Phone','$Address', 0, 0)";
    $result = mysqli_query($conn,$sql_query);

    $sql_query = "Insert INTO Account values ('$uname','$password', '$Forgetme', date('Y-m-d'))";
    $result = mysqli_query($conn,$sql_query);
     header('Location: Welcome.html');
      
}

    

?>
