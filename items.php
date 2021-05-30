<?php
$server = "localhost";
$user = "yfan24";
$password = "E%aiQRN=";                                                                                                                                                                                               $db = 'siyer9_1';

#print "Testing connection with ".$db;

// Creating connection
$conn = new mysqli($server, $user, $password, $db);

$sql = "SELECT UserID, ItemDescription, Availability, ListingPrice FROM Item";
$result = mysqli_query($conn, $sql); // First parameter is just return of "mysqli_connect()" function
echo "<br>";

echo "<center> <h1> EasyMarket </h1></center>";
echo "Need to list an Item?" . "<a href='list.html'> Click Here </a>";

echo  "<br>";
echo  "<br>";


echo "<table border='1'>";

echo "<tr>";

echo "<td colspan = 6, style='text-align:center'>" . "Items" . "</td>";

echo "</tr>";

echo "<tr>";
echo "<td>" . "UserID" .  "</td>";
echo "<td>" . "ItemDescription" .  "</td>";
echo "<td>" . "Availability" .  "</td>";
echo "<td>" . "ListingPrice" .  "</td>";
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
