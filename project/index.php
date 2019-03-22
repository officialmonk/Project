<?php header("Content-Type: text/html; charset=UTF-8");
require_once "db.php"
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>site3</title>
    <link rel="stylesheet" href="bootstrap-4.3.0-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="custom.css">
</head>

<body>
   
    <header>
        <div class="desktop">

         <input type="text" class="form-control sign" id="name_desktop" placeholder="name" autocomplete="off" required>
            <input type="password" class="form-control sign" id="password_desktop" placeholder="password" required>
            <button class="btn btn-primary form signbtn" id="sign_desktop">Ввойти</button>

            <button class="btn btn-primary form registration">Регистрация</button>

        </div>
        <div class="mobile">
            <div class="burger" id="burg">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <div class="mobile_bar">
                <input type="text" class="form-control sign_mobile" id="name_mobile" placeholder="name" autocomplete="off">
                <input type="password" class="form-control sign_mobile" id="password_mobile" placeholder="password">
                <input class="btn btn-primary form sign_mobile signbtn" id="sign_mobile" type="button" value="Ввойти">
                <input class="btn btn-primary form registration sign_mobile" type="button" value="Регистрация">
            </div>
        </div>
        <div class="modal_registr">
            <div class="forma_registr">

                <input type="text" class="form-control registr" placeholder="number" id="number_sign" required>
                <input type="text" class="form-control registr" placeholder="name" id="name_sign" required>
                <input type="password" class="form-control registr" placeholder="password" id="password_sign" required>
                <input type="password" class="form-control registr" placeholder="repeat-password" id="password_repeat_sign" required>
                <input type="button" class="btn btn-primary form registr" id="registr" value="Регистрация">

                <button class="btn btn-primary form registr back">Назад</button>

            </div>
        </div>
    </header>
    <section id="info">
          <div class="head">
              <img src="robot_PNG101.png" alt="">
              <h1 id="information"></h1>
               <input type="button" class="btn btn-primary exit" id="exit" value="Выход">
          </div>
           </section>
    <footer>

    </footer>
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
    <script src="script.js"></script>

</body>

</html>
