<?php
$con = mysqli_connect('localhost', 'root', '', 'projekt');

$query = "SELECT COUNT(id) AS user_counter FROM pracownicy";
$result = $con->query($query);

while($row = $result->fetch_array())
{
    echo "Users: ".$row['user_counter'];
}


$con->close();
?>