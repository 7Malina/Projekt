<?php
    $con = mysqli_connect('localhost', 'root','',"projekt");

    if (mysqli_connect_errno()) {
        echo "Blad połączenia z bazą danych: " . mysqli_connect_error();
    }
    $name = $_POST['name'];
    $surname =$_POST['surname'];
    $position = $_POST['position'];

    
    if($name == NULL || $surname == NULL || $position == NULL)
    {
        echo "Wypełnij wszystkie pola poprawnie";
    }
    else
    {
        if(isset($_POST['save']))
        {
            $query = "INSERT INTO pracownicy(imie,nazwisko,stanowisko) VALUES ('$name','$surname','$position')";
            $result = $con->query($query);
            
        if ($result) {

            $sortQuery = "SELECT id FROM pracownicy ORDER BY id ASC";
            $sortResult = $con->query($sortQuery);

            // $ids = array();

            // while ($row = $sortResult->fetch_assoc()) {
            //     $ids[] = $row['id'];
            // }

            // for ($i = 0; $i < count($ids); $i++) {
            //     $newId = $i + 1;
            //     $idToUpdate = $ids[$i];

            //     $updateQuery = "UPDATE pracownicy SET id = $newId WHERE id = $idToUpdate";
            //     $con->query($updateQuery);
            // }

            echo "Użytkownik został pomyślnie dodany. Sortowanie ID użytkowników zostało zakończone.";
        } else {
            echo "Wystąpił błąd podczas dodawania użytkownika.";
        }
        }
        elseif(isset($_POST['clear'])){
            $name = "";
            $surname = "";
            $position = "";
        }
    }
    header('location: ../users.php');

$con->close();
?>