<?php
$con = mysqli_connect('localhost', 'root', '', 'projekt');

if (mysqli_connect_errno()) {
    echo "Błąd połączenia z bazą danych: " . mysqli_connect_error();
}

if(isset($_POST['zadanie']) && isset($_POST['user_id']))
{

    $tresc = $_POST['zadanie'];
    $userId = $_POST['user_id'];
    
    if (isset($_POST['zadanie-submit'])) {
        if(empty($tresc)){
            echo "Wypełnij pole poprawnie";
        } else {
            $tresc = mysqli_real_escape_string($con, $tresc);
            
            $query = "INSERT INTO zadania (id, tresc_zadania, zadania_status, zaawansowanie) VALUES ('$userId', '$tresc', 1, 0)";
            $result = $con->query($query);
            
            if ($result) {
                echo "Zadanie dodane pomyślnie";
            } else {
                echo "Błąd dodawania zadania: " . mysqli_error($con);
            }
        }
    }
}

header("Location: ../tasks.php?user_id=$userId");
$con->close();
?>
