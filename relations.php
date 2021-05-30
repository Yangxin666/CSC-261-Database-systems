<?php
$server = "localhost";
$user = "yfan24";
$password = "E%aiQRN=";                                                                                                                                                                                              $db = 'siyer9_1';

#print "Testing connection with ".$db;

// Creating connection
$conn = new mysqli($server, $user, $password, $db);

$sql = "SELECT * FROM User";
$result = mysqli_query($conn, $sql); // First parameter is just return of "mysqli_connect()" function
echo "<br>";
echo "<table border='1'>";

echo "<tr>";

echo "<td colspan = 6, style='text-align:center'>" . "User" . "</td>";

echo "</tr>";

echo "<tr>";
echo "<td>" . "UserID" .  "</td>";
echo "<td>" . "Name" .  "</td>";
echo "<td>" . "Phone_num " .  "</td>";
echo "<td>" . "Address" .  "</td>";
echo "<td>" . "Total_Rating" .  "</td>";
echo "<td>" . "Num_Rating" .  "</td>";
echo "</tr>";

while ($row = mysqli_fetch_assoc($result)) { // Important line !!! Check summary get row on array ..
    

	
    echo "<tr>";
    foreach ($row as $field => $value) { // I you want you can right this line like this: foreach($row as $value) {
        echo "<td>" . $value . "</td>"; // I just did not use "htmlspecialchars()" function. 
    }
    echo "</tr>";
}
echo "</table>";





$sql = "SELECT * FROM Account";
$result = mysqli_query($conn, $sql); // First parameter is just return of "mysqli_connect()" function
echo "<br>";
echo "<table border='1'>";

echo "<tr>";

echo "<td colspan = 4, style='text-align:center'>" . "Account" . "</td>";

echo "</tr>";

echo "<tr>";
echo "<td>" . "UserID" .  "</td>";
echo "<td>" . "Password" .  "</td>";
echo "<td>" . "Forgetme " .  "</td>";
echo "<td>" . "CreationDate" .  "</td>";

echo "</tr>";

while ($row = mysqli_fetch_assoc($result)) { // Important line !!! Check summary get row on array ..



    echo "<tr>";
    foreach ($row as $field => $value) { // I you want you can right this line like this: foreach($row as $value) {
        echo "<td>" . $value . "</td>"; // I just did not use "htmlspecialchars()" function.
    }
    echo "</tr>";
}
echo "</table>";


$sql = "SELECT * FROM Item";
$result = mysqli_query($conn, $sql); // First parameter is just return of "mysqli_connect()" function
echo "<br>";
echo "<table border='1'>";

echo "<tr>";

echo "<td colspan = 7, style='text-align:center'>" . "Item" . "</td>";

echo "</tr>";

echo "<tr>";
echo "<td>" . "ItemID" .  "</td>";
echo "<td>" . "UserID" .  "</td>";
echo "<td>" . "ListingPrice " .  "</td>";
echo "<td>" . "ListingDate" .  "</td>";
echo "<td>" . "ItemDescription" .  "</td>";
echo "<td>" . "Availability" .  "</td>";
echo "<td>" . "Quantity" .  "</td>"; 
echo "</tr>";

while ($row = mysqli_fetch_assoc($result)) { // Important line !!! Check summary get row on array ..



    echo "<tr>";
    foreach ($row as $field => $value) { // I you want you can right this line like this: foreach($row as $value) {
        echo "<td>" . $value . "</td>"; // I just did not use "htmlspecialchars()" function.
    }
    echo "</tr>";
}
echo "</table>";



$sql = "SELECT * FROM Item_Purchases";
$result = mysqli_query($conn, $sql); // First parameter is just return of "mysqli_connect()" function
echo "<br>";
echo "<table border='1'>";

echo "<tr>";

echo "<td colspan = 4, style='text-align:center'>" . "Items Purchased" . "</td>";

echo "</tr>";

echo "<tr>";
echo "<td>" . "ItemID" .  "</td>";
echo "<td>" . "UserID" .  "</td>";
echo "<td>" . "PurhaseDate " .  "</td>";
echo "<td>" . "PurchasePrice" .  "</td>";
echo "</tr>";

while ($row = mysqli_fetch_assoc($result)) { // Important line !!! Check summary get row on array ..



    echo "<tr>";
    foreach ($row as $field => $value) { // I you want you can right this line like this: foreach($row as $value) {
        echo "<td>" . $value . "</td>"; // I just did not use "htmlspecialchars()" function.
    }
    echo "</tr>";
}
echo "</table>";








?>
