<?php
$con = mysqli_connect('localhost', 'root', '', 'projekt');

if (isset($_POST['zapisz'])) {
    $userId = $_POST['user_id'];
    $rangeValue = $_POST['zaawansowanie'];
    $idZadania = $_POST['id_zadania'];

    // Zapytanie SQL do zapisania wartości w bazie danych
    $query = "UPDATE zadania
    SET
        zaawansowanie = $rangeValue
    WHERE id_zadania = $idZadania;
    ";
    
    $query .= "UPDATE zadania
    SET
        zadania_status = (
            SELECT CASE
                WHEN zadania.zaawansowanie = 0 THEN 1
                WHEN zadania.zaawansowanie BETWEEN 1 AND 20 THEN 2
                WHEN zadania.zaawansowanie BETWEEN 21 AND 99 THEN 3 
                WHEN zadania.zaawansowanie = 100 THEN 4
                ELSE status_zadania.id_status
            END AS new_status_id
            FROM status_zadania
            WHERE status_zadania.id_status = zadania.zadania_status
        )
    WHERE id_zadania = $idZadania;
    ";

    if ($con->multi_query($query)) {
        header("Location: ../tasks.php?user_id=$userId");
        exit;
    } else {
        echo "Błąd zapisu: " . $con->error();
    }
}

$con->close();
?>
