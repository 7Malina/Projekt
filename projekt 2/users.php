<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Autorzy:</title>
    <script src="app.js"></script>
    <link rel="stylesheet" href="css/style.css" />
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
      <div class="container-section">
        <div class="container-header">
          <h3><?php include('PHP_Files/user_counter.php');?></h3>
          <form action="PHP_Files/dodawanie.php" method="post">
            <input type="text" name="name" placeholder="Imię" class="name" />
            <input type="text" name="surname" placeholder="Nazwisko" class="surname" />
            <select name="position" id="">
              <option value="1">Programista</option>
              <option value="2">Automatyk</option>
              <option value="3">Analityk bisnesowy</option>
              <option value="4">Technik</option>
            </select>
            <input type="submit" name="save" value="&#xf00c;" class="option" />
            <input type="submit" name="clear" value="&#xf00d;" class="option" />
          </form>
        </div>
        <div class="users">
          <?php include('PHP_Files/users_display.php'); ?>
        </div>
        </div>
      <div class="search-section">
        <h2>Wpisz nazwisko do wyszukania</h2>
        <form action="" method="post" class="wyszukiwarka">
          <input type="text" name="search" id="search" class="search-user-input" placeholder="Wyszukaj uzytkownika" />
          <input type="submit" name="submit" value="&#xf002;" class="icon-button" />
        </form>

        <?php include('PHP_Files/user_search.php');?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/gsap.min.js"></script>
    <script src="js/gsap.min.js"></script>
      <script>
            function deleteRow(id) {
                if (confirm('Czy na pewno chcesz usunąć ten wiersz?')) {
                    let select = new XMLHttpRequest();
                    select.open('POST', 'PHP_Files/delete_row.php', true);
                    select.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                    select.onreadystatechange = function() {
                        if (select.readyState === 4 && select.status === 200) {
                            console.log(select.responseText);
                        }
                    };
                    select.send('id=' + id);
                }
                location.reload();
                
            }

</script>
  </body>
</html>
