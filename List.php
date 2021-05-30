<?php
$server = "localhost";
$user = "yfan24";
$password = "E%aiQRN=";    
$db = 'yfan24_1';

// Creating connection
$conn = new mysqli($server, $user, $password, $db);


if (isset($_POST['List'])){

    $description = mysqli_real_escape_string($conn,$_POST['Description']);
    $price = mysqli_real_escape_string($conn,$_POST['Price']);
    $quantity = mysqli_real_escape_string($conn,$_POST['Quantity']);
    $uname = mysqli_real_escape_string($conn,$_POST['uname']);
    $randnum = rand(1111111111,9999999999);
    #echo $uname;
    #echo $uname;
    #echo $password;
 #   echo $uname;
    $listdate = date('Y-m-d');
    echo $listdate;
    $sql_query = "Insert INTO Item values ( '$randnum','$uname','$price', '$listdate' , '$description','$quantity', '$quantity')";
    $result = mysqli_query($conn,$sql_query);

    header('Location: items.php');
      
}

    

?>
