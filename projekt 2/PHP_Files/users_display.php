<?php
        $con = mysqli_connect('localhost', 'root', '', 'projekt');
        $query = "SELECT count, EndZadania,
        CASE
            WHEN count = EndZadania AND count > 0 AND EndZadania > 0 THEN 4
            WHEN count = 0 AND EndZadania = 0 THEN 1
            WHEN EndZadania = 0 THEN 1
            ELSE 2
        END AS img, id, imie, nazwisko, stanowisko_pracy
    FROM
        (SELECT 
            COUNT(zadania.id) AS count,
            COUNT(CASE WHEN zadania.zadania_status = 4 THEN 1 END) AS EndZadania,
            pracownicy.id, pracownicy.imie, pracownicy.nazwisko, stanowisko.stanowisko_pracy
        FROM
            pracownicy
        JOIN stanowisko ON pracownicy.stanowisko = stanowisko.id_stanowisko
        LEFT JOIN zadania ON pracownicy.id = zadania.id
        JOIN status_zadania ON status_zadania.img = 1
        GROUP BY
            pracownicy.id, pracownicy.imie, pracownicy.nazwisko, stanowisko.stanowisko_pracy) AS subquery;
        ";
        $result = $con->query($query);
        while($row = $result->fetch_array()){
            $imie = $row['imie'];
            $nazwisko = $row['nazwisko'];
            $stanowisko = $row['stanowisko_pracy'];
            $id = $row['id'];
            $taskCount = $row['count'];
            $taskDone = $row['EndZadania'];
            $image = $row['img'];
            echo "
            <div class='users-blok'>
              <div class='user-zadania'>
                <p>[".$taskDone." / ".$taskCount."]</p>
                <i class='fa-solid fa-trash' class='delete-button' onclick=\"deleteRow($id)\"></i>
              </div>
              <img src='images/mrbombastic/".$image.".png'>
              <h4>".$imie." ".$nazwisko."</h4>
              <p class='stanowisko-p'>Stanowisko: ".$stanowisko."</p>
              <button><a href='tasks.php?user_id=".$id."'>zadania</a></button>            
              </div>
    ";
        }
$con->close();
?>