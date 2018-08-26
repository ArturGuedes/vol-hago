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

</head>

<body onload="exibir_time();">
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