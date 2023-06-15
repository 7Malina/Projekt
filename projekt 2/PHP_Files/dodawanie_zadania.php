 <?php
$con = mysqli_connect('localhost', 'root', '', 'projekt');

if (mysqli_connect_errno()) {
    echo "Błąd połączenia z bazą danych: " . mysqli_connect_error();
}

$tresc = @$_POST['zadanie'];
$button = @$_POST['zadanie-submit'];
$userId = @$_POST['user_id'];

    if (isset($_POST['zadanie-submit'])) {
        $query = "INSERT INTO `zadania` (`id`, `tresc_zadania`, `zadania_status`, `zaawansowanie`) VALUES ('$userId', '$tresc', '1', '0')";
        $result = $con->query($query);
        
    }

header("Location: ../tasks.php?user_id='$userId'");
$con->close();
?> 
