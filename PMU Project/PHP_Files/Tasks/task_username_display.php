<?php
$con = mysqli_connect('localhost', 'root', '', 'projekt');
if (isset($_GET['user_id'])) {
    $userId = $_GET['user_id'];
    $question = "SELECT imie, nazwisko FROM pracownicy WHERE id=$userId";
    $equalisaion = $con->query($question);
    while($nameRow = $equalisaion->fetch_array())
    {
        echo $nameRow['imie']." ".$nameRow['nazwisko'];
    }
}
$con->close();
?>