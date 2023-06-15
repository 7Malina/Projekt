<?php

$id = $_POST['id_zadania'];

$con = mysqli_connect('localhost', 'root', '', 'projekt');

if (mysqli_connect_errno()) {
    echo "Błąd połączenia z bazą danych: " . mysqli_connect_error();
}

$query = "DELETE FROM zadania WHERE id_zadania = $id";
$result = $con->query($query);

if ($result) {
    echo "Wiersz został pomyślnie usunięty.";
} else {
    echo "Wystąpił błąd podczas usuwania wiersza.";
}

$con->close();
?>
