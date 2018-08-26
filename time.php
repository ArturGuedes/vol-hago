<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,user-scalable=no">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="theme-color" content="#00b5ff">
    <title>Hago</title>
    <link href="https://fonts.googleapis.com/css?family=Comfortaa:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/time.css">   
    <script type="text/javascript" src="config.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="aux_js.js" charset="UTF-8"></script>
  <style>
        * {
            margin: 0;
            border: 0;
            padding: 0;
        }

        #sidebar {
            width: 200px;
            height: 100vh;
            background-image: linear-gradient( #008cb2, #29b4ff);
            position: fixed;
            border-bottom-right-radius: 100px;
            z-index: 999;
            overflow-y: auto;
        }

        #sidebar * {
            margin: auto;
        }

        .logo {
            width: 100%;
            height: 80px;
            margin: 15 0;
            display: block;
            top: 25px;
            position: absolute;
            background-image: url(assets/imgs/logo-icon.png);
            background-position: center;
            background-size: contain;
            background-repeat: no-repeat;
        }

        ul {
            position: absolute;
            width: 100%;
            top: 300px;
        }

        li img {
            width: 30px;
            margin-top: 10px;
            vertical-align: middle;
        }

        li {
            padding-left: 25px;
            padding-bottom: 25px;
            cursor: pointer;
            color: white;
        }

        #main {
            width: calc(100% - 200px);
            position: absolute;
            left: 200px;
        }

        #main .container {
            max-width: 960px;
            margin: auto;
            box-sizing: border-box;
        }

        #main .container * {}

        .Elipse-1 {
            position: absolute;
            top: 150px;
            left: 40px;
            width: 100px;
            height: 118px;
            object-fit: contain;
        }

        .card {
            margin: 15px;
            min-height: 50px;
            border-radius: 10px;
            box-shadow: 0 0 14.6px 1.4px rgba(0, 0, 0, 0.41);
            background-color: #f9f9f9;
            border: solid 1px #ffffff;
            padding: 15px;
        }

        .avatar {
            width: 50px;
            height: 50px;
            background: black;
            border-radius: 100%;
            float: left;
            margin-right: 20px;
        }

        .big {
            box-sizing: border-box;
            display: block;
            overflow: auto;
        }

        .big img {
            width: 300px;
            float: left;
            margin-right: 9px;
        }

        .big div {
            padding-left: 9px;
            display: block;
        }

        .big div div {}

        .big div div img {
            height: 20px;
            width: auto;
        }
    </style>
</head>

<body onload="exibir_time(); ag();">
    <section id="sidebar">
        <div class="logo"></div>
        <img src="assets/icons/perfil.png" class="Elipse-1">
        <ul>
            <li><img src="assets/icons/super.png" alt="" height="20">
            <label id="nome_log"></label>
            <br>
            <img src="assets/icons/crow.png" height="20" style="" alt=""> 20</li>
            <li><a id="perfil" href="perfil.php"><img src="assets/icons/icon%20perfil.png" alt=""> Perfil</a></li>
            <li><a href="time.php"><img src="assets/icons/icon%20home.png" alt=""> Início</a></li>
            <li><a href="#"><img src="assets/icons/icon%20beneficios.png" alt=""> Benefícios</a></li>
            <li><a href="#"><img src="assets/icons/icon%20ranking.png" alt=""> Ranking</a></li>
            <li><a href="#"><img src="assets/icons/icon%20sair.png" alt="" onclick="sair()"></a></li>
        </ul>
    </section>

    <section id="main">
        <div class="container">
            <div class="card">
                <div class="avatar"></div>
                <p>Data<br>Nome</p>
            </div>
            <div class="card big">
                <img src="assets/imgs/limpeza_das_praias.jpg" alt="">
                <div>
                    <h2>Titulo</h2>
                    <p>Descrição</p>
                    <br>
                    <div>
                        <img src="assets/icons/facebook-placeholder-for-locate-places-on-maps.png" alt="">Endereço
                    </div>
                    <br>
                    <div>
                        <img src="assets/icons/calendar-with-a-clock-time-tools.png" alt="">Data
                    </div>
                    <br>
                    <div>
                        <img src="assets/icons/multiple-users-silhouette.png" alt="">@Ajuda Niterói
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="avatar"></div>
                <p>Data<br>Nome</p>
            </div>
            <div class="card">
                <div class="avatar"></div>
                <p>Data<br>Nome</p>
            </div>
        </div>
    </section>
</body>
</html>