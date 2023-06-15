<?php
$con = mysqli_connect('localhost', 'root', '', 'projekt');


if (mysqli_connect_errno()) {
    echo "Błąd połączenia z bazą danych: " . mysqli_connect_error();
}
$userID = $_POST['id_user'];
$taskID = $_POST['task_id'];
$userId = @$_POST['user_id'];

if(isset($_POST['transfer-submit']))
{
    if($userID == NULL || $taskID == NULL)
    {
        echo "Błąd z polami";
    }
    else
    {
        $query = "UPDATE zadania SET id = $userID WHERE id_zadania = $taskID";
        $result = $con->query($query);
    }
}

header("Location: ../../tasks.php?user_id='$userId'");
$con->close();
?>