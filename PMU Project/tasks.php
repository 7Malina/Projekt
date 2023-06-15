<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    />
</head>
<body>
<div class="main-section">
      <input type="checkbox" id="active" class="input-hidden" />
      <div class="header-section">
        <label for="active" class="content zadania">
          <h4><i class="far fa-hamburger"></i></h4>
          <h4><i class="far fa-hamburger"></i></h4>
        </label>
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="https://www.google.com/intl/pl/gmail/about" target="_blank">Contact US</a></li>
          <li><a href="users.php">Users</a></li>
        </ul>
        <img src="new/new clouds/chmura1.png " class="chmura1" alt="" />
        <img src="new/new clouds/chmura2.png " class="chmura2" alt="" />
        <img src="new/new clouds/chmura3.png " class="chmura3" alt="" />
        <img src="new/new clouds/chmura4.png " class="chmura4" alt="" />
      </div>
  <div class="task-main-section">

    <div class="container-transfer">
    <h5>Zadania pracownika:<br>
      <?php include('PHP_Files/Tasks/task_username_display.php');?> 

    </h5>
          <form action="PHP_Files/Tasks/transfer_task.php" method="post" id='transfer_form'>
              <input type="hidden" name="user_id" value="<?php echo $userId; ?>">
          </form>
      </div>
    <div class="header-task-section">
      <p>Nie rozpoczęte</p>
      <p>Rozpoczęte</p>
      <p>W realizacji</p>
      <p>Zakończone</p>
    </div>
    <div class="task-main">
      <div class="users-blok-1">
        <?php include('PHP_Files/Tasks/notstarted_display.php'); ?>
      </div>
      <div class="users-blok-2">
      <?php include('PHP_Files/Tasks/started_display.php'); ?>
      </div>
      <div class="users-blok-3">
      <?php include('PHP_Files/Tasks/realization_display.php'); ?>
      </div>
      <div class="users-blok-4">
      <?php include('PHP_Files/Tasks/done_display.php'); ?>
      </div>
      
    </div>
  </div>

  <div class="add-task-section">
  <div class="search-area">
            <h2>Wpisz kogo chcesz wyszukać</h2>
            <form action="" method="post" id='form2' class="salto">
                <input type="text" name="search" id="search" placeholder="wyszukaj uzytkownika" >
                <input type="submit" value="&#xf002;" name='submit' class="icon-button" >
            </form>

            <?php include('PHP_Files/search.php'); ?>
</div>
<div class="add-task">
<h1>Treść zadania</h1>
                <form action="PHP_Files/dodawanie_zadania.php" method="post" class="mega-formularz">
                    <input type="text" name="zadanie" id="">
                    <input type="submit" value="&#xf00c;" name="zadanie-submit">
                    <input type="hidden" name="user_id" value="<?php echo $userId; ?>">
                </form>
</div>
  </div>
      
</div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/gsap.min.js"></script>
    <script src="js/gsap.min.js"></script>
    <script src="js/app.js"></script>
    <script src="app.js"></script>
</body>
</html>