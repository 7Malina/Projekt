<?php
$id = $_POST['id'];

$con = mysqli_connect('localhost', 'root', '', 'projekt');

if (mysqli_connect_errno()) {
    echo "Błąd połączenia z bazą danych: " . mysqli_connect_error();
}

$query = "DELETE FROM pracownicy WHERE id = $id";
$result = $con->query($query);

if ($result) {
    $getUsersQuery = "SELECT id FROM pracownicy";
    $getUsersResult = $con->query($getUsersQuery);

    $ids = array();

    while ($row = $getUsersResult->fetch_assoc()) {
        $ids[] = $row['id'];
    }

    sort($ids);

    for ($i = 0; $i < count($ids); $i++) {
        $newId = $i + 1;
        $idToUpdate = $ids[$i];

        $updateQuery = "UPDATE pracownicy SET id = $newId WHERE id = $idToUpdate";
        $con->query($updateQuery);
    }

    echo "Użytkownik o ID $id został pomyślnie usunięty. Sortowanie ID użytkowników zostało zakończone.";
} else {
    echo "Wystąpił błąd podczas usuwania użytkownika o ID $id.";
}

$con->close();
?>