<?php
$servername = "localhost"; // Имя сервера базы данных
$username = "root"; // Имя пользователя базы данных
$password = ""; // Пароль пользователя базы данных
$dbname = "theatro"; // Имя базы данных

// Создание подключения
$conn = new mysqli($servername, $username, $password, $dbname);

// Проверка соединения
if ($conn->connect_error) {
    die("Ошибка подключения к базе данных: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Получение значений полей формы
    $username = $_POST["username"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];

    // Выполнение запроса к базе данных
    $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Авторизация успешна
        echo "Успешная авторизация!";
    } else {
        // Авторизация не удалась
        echo "Неверное имя пользователя или пароль.";
    }
}
?>

<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <title>Травиата | Джузеппе Верди</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:400,500,600,700,800,900&display=swap"
          rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap" rel="stylesheet">


    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="css/form.css" type="text/css">
</head>

<body>
<!-- Page Preloder -->
<div id="preloder">
    <div class="loader"></div>
</div>

<!-- Header Section Begin -->
<header class="header-section">
    <div class="container">
        <div class="logo">
            <a href="./index.html">
                <img src="img/logo.png" alt="">
            </a>
        </div>
        <div class="nav-menu">
            <nav class="mainmenu mobile-menu">
                <ul>
                    <li class="active"><a href="./index.html">Главная</a></li>
                    <li><a href="./about-us.html">О нас</a></li>
                    <li><a href="./speaker.html">Программа</a>
                        <ul class="dropdown">
                            <li><a href="./traviata.html">La traviata, Giuseppe Verdi</a></li>
                            <li><a href="./toska.html">Tosca, Giacomo Puccini</a></li>
                            <li><a href="./aida.html">Aida, Giuseppe Verdi</a></li>
                            <li><a href="./butterfly.html">Madama Butterfly, Giacomo Puccini</a></li>
                        </ul>
                    </li>

                    <li><a href="./contact.html">Контакты</a></li>
                </ul>
            </nav>
            <a href="#" class="primary-btn top-btn"><i class="fa fa-ticket"></i>Войти</a>
        </div>
        <div id="mobile-menu-wrap"></div>
    </div>
</header>
<!-- Header End -->


<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>

<div class="container">
    <div class="frame">
        <div class="nav">
            <ul class="links">
                <li class="signin-active"><a class="btn">Войти</a></li>
                <li class="signup-inactive"><a class="btn">Регистрация </a></li>
            </ul>
        </div>
        <div ng-app ng-init="checked = false">
            <form class="form-signin" action="" method="post" name="form">
                <label for="username">Имя</label>
                <input class="form-styling" type="text" name="username" placeholder=""/>
                <label for="password">Пароль</label>
                <input class="form-styling" type="text" name="password" placeholder=""/>
                <input type="checkbox" id="checkbox"/>
                <div class="btn-animate">
                    <a class="btn-signin">Sign in</a>
                </div>
            </form>

            <form class="form-signup" action="" method="post" name="form">
                <label for="username">Имя</label>
                <input class="form-styling" type="text" name="username" placeholder=""/>

                <label for="password">Пароль</label>
                <input class="form-styling" type="text" name="password" placeholder=""/>
                <label for="confirmpassword">Повторите пароль</label>
                <input class="form-styling" type="text" name="cpassword" placeholder=""/>
                <a ng-click="checked = !checked" class="btn-signup">Войти</a>
            </form>

            <div  class="success">
                <svg width="270" height="270" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                     viewBox="0 0 60 60" id="check" ng-class="checked ? 'checked' : ''">
                    <path fill="#ffffff" d="M40.61,23.03L26.67,36.97L13.495,23.788c-1.146-1.147-1.359-2.936-0.504-4.314
                  c3.894-6.28,11.169-10.243,19.283-9.348c9.258,1.021,16.694,8.542,17.622,17.81c1.232,12.295-8.683,22.607-20.849,22.042
                  c-9.9-0.46-18.128-8.344-18.972-18.218c-0.292-3.416,0.276-6.673,1.51-9.578" />
                    <div class="successtext">
                        <p> Спасибо за регистрацию!</p>
                    </div>
            </div>
        </div>



        <div>
            <div class="cover-photo"></div>
            <div class="profile-photo"></div>
            <h1 class="welcome">Добро пожаловать!</h1>
            <a class="btn-goback" value="Refresh" onClick="history.go()">Вернуться</a>
        </div>
    </div>

    <a id="refresh" value="Refresh" onClick="history.go()">
        <svg class="refreshicon"   version="1.1" id="Capa_1"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
             width="25px" height="25px" viewBox="0 0 322.447 322.447" style="enable-background:new 0 0 322.447 322.447;"
             xml:space="preserve">
         <path  d="M321.832,230.327c-2.133-6.565-9.184-10.154-15.75-8.025l-16.254,5.281C299.785,206.991,305,184.347,305,161.224
                c0-84.089-68.41-152.5-152.5-152.5C68.411,8.724,0,77.135,0,161.224s68.411,152.5,152.5,152.5c6.903,0,12.5-5.597,12.5-12.5
                c0-6.902-5.597-12.5-12.5-12.5c-70.304,0-127.5-57.195-127.5-127.5c0-70.304,57.196-127.5,127.5-127.5
                c70.305,0,127.5,57.196,127.5,127.5c0,19.372-4.371,38.337-12.723,55.568l-5.553-17.096c-2.133-6.564-9.186-10.156-15.75-8.025
                c-6.566,2.134-10.16,9.186-8.027,15.751l14.74,45.368c1.715,5.283,6.615,8.642,11.885,8.642c1.279,0,2.582-0.198,3.865-0.614
                l45.369-14.738C320.371,243.946,323.965,236.895,321.832,230.327z"/>
    </svg>
    </a>
</div>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/angular.js/1.3.14/angular.min.js'></script>

<script src="js/formindex.js"></script>


<!-- Footer Section Begin -->
<footer class="footer-section">

    <div class="row">
        <div class="col-lg-12">
            <div class="footer-text">
                <div class="ft-logo">
                    <a href="#" class="footer-logo"><img src="img/footer-logo.png" alt=""></a>
                </div>
                <ul>
                    <li><a href="./index.html">Главная</a></li>
                    <li><a href="./about-us.html">О нас</a></li>
                    <li><a href="./contact.html">Контакты</a></li>
                </ul>
                <div class="copyright-text"></p></div>
                <div class="ft-social">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-instagram"></i></a>
                    <a href="#"><i class="fa fa-youtube-play"></i></a>
                </div>
            </div>
        </div>
    </div>

</footer>

<!-- Footer Section End -->

<!-- Js Plugins -->
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/jquery.countdown.min.js"></script>
<script src="js/jquery.slicknav.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/main.js"></script>
</body>

</html>