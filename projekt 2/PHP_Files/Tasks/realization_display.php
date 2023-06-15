<?php
ob_start();
$con = mysqli_connect('localhost', 'root', '', 'projekt');
if (isset($_GET['user_id'])) {
    $userId = $_GET['user_id'];
    $question = "SELECT imie, nazwisko FROM pracownicy WHERE id=$userId";
    $equalisaion = $con->query($question);


    $query = "SELECT zadania.id_zadania, pracownicy.id, pracownicy.imie, pracownicy.nazwisko, status_zadania.zadanie_id, zadania.tresc_zadania, zadania.zaawansowanie 
    FROM zadania JOIN status_zadania ON  status_zadania.id_status=zadania.zadania_status  JOIN pracownicy 
    ON zadania.id = pracownicy.id WHERE zadania.zadania_status = 3 AND pracownicy.id = $userId";
    $result = $con->query($query);

$uniqueUserIds = []; 

while ($row = $result->fetch_array()) {
    $id = $row['id'];

    if (!in_array($id, $uniqueUserIds)) {
        $uniqueUserIds[] = $id; 
    }
}


foreach ($uniqueUserIds as $userId) {


    mysqli_data_seek($result, 0); 

    while ($row = $result->fetch_array()) {
        $id = $row['id'];
        $ZadanieID = $row['id_zadania'];
        $imie = $row['imie'];
        $nazwisko = $row['nazwisko'];
        $tresc = $row['tresc_zadania'];
        $statusId = $row['zadanie_id'];
        $zaawansowanie = $row['zaawansowanie'];
        $idZadania = $row['id_zadania'];

        if ($id == $userId) {
            $newId = $id;
            $newidZadania = $idZadania;
            echo"
            <div class='ogien'>
            <h1>".$idZadania.". ".$tresc."</h1>
                <div class='delete-button'>
                <form action='PHP_Files/save_button.php' method='post'>
                <h1>Zaawansowanie</h1>
                    <span>
                        <input type='range' name='zaawansowanie' id='' min='0' max='100' step='10' class='range-input' value='" . $zaawansowanie . "'>
                        <p class='range-value'></p>
                    </span>
                    <input type='hidden' name='id_zadania' value='" . $idZadania . "'>
                    <input type='submit' value='&#xf00c;' name='zapisz'>
                    <input type='hidden' name='user_id' value='".$userId."'>
                  </form>
                  <div class='zadania-essa'>
                  </div>
                  <button class='delete-button' onclick=\"deleteTask($ZadanieID)\">&#xf1f8;</button>
                    <button class='transfer-btn' onclick=\"createFunction()\">&#xf2f6;</button>
                    </div>
                </div>";
    
        }
    }
}

}
ob_end_flush();
$con->close();
?>