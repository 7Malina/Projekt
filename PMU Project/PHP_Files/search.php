<?php
$con = mysqli_connect('localhost', 'root', '', 'projekt');

$searchInput = @$_POST['search'];
$num = 0;

if (empty($searchInput)) {
} else {
    if (isset($_POST['submit'])) {
        $query = "SELECT id,imie,nazwisko FROM pracownicy WHERE nazwisko LIKE '%$searchInput%'";
        $result = $con->query($query);

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $num += 1;
                echo "<div class='search-user-section'>
                ".$num. ". ". $row['imie'] . " " . $row['nazwisko'] ."
                
                 <form action='' method='post'>
                 <input type='hidden' name='selected-id' value='" . $row['id'] . "'>
                 
                 <input type='submit' name='select-submit' value='Wybierz' onclick=\"transferTask\" class='select-btn'>
                 </form>
                 
                </div>";
            }
        } else {
            echo "<div class='span'>Brak wyników.</div>";
        }
    } else {
    }
}


if (isset($_POST['select-submit'])) {
   $selectedId = @$_POST['selected-id'];
   $query2 = "SELECT pracownicy.imie, pracownicy.nazwisko, status_zadania.zadanie_id, pracownicy.id, COUNT(zadania.id) AS lz
   FROM pracownicy JOIN status_zadania ON pracownicy.id = $selectedId JOIN zadania 
   ON zadania.zadania_status = status_zadania.id_status WHERE zadania.id = $selectedId";

   $result2 = mysqli_query($con, $query2);

   if ($result2 && mysqli_num_rows($result2) > 0) {
       echo "<div class='search-user-section'>";
       $row2 = mysqli_fetch_assoc($result2);
        echo " 
        <h5>Wybrany pracownik to:</h5>
        <p class='user-name'>".$row2['imie']." ".$row2['nazwisko']."</p>
        <div class='kox'>
            <div class='search-user'>
            <h3>ID użytkownika: </h3>
            <p>".$row2['id']."</p>
            </div>
            <div class='search-user'>
            <h3>Ilość zadań: </h3>
            <p>".$row2['lz']."</p>
            </div>
        </div>


        ";
        echo "</div>";
   } 
   else {
    }
}

$con->close();
?>