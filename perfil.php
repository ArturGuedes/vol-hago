<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,user-scalable=no">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="theme-color" content="#00b5ff">
    <title>Hago</title>
    <link href="https://fonts.googleapis.com/css?family=Comfortaa:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/perfil.css">
        <script type="text/javascript" src="config.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
</head>

<body onload="onlPerfil()">
    <section id="sidebar">
        <div class="logo"></div>
        <img src="assets/icons/perfil.png" class="Elipse-1">
        <ul>
            <li><img src="assets/icons/super.png" alt="" height="20"><label id="nome_log"></label>
            <img src="assets/icons/crow.png" height="20" style="" alt=""> 20</li>
            <li><a href=""><img src="assets/icons/icon%20perfil.png" alt=""> Perfil</a></li>
            <li><a href="time.php"><img src="assets/icons/icon%20home.png" alt=""> Início</a></li>
            <li><a href="#"><img src="assets/icons/icon%20beneficios.png" alt=""> Benefícios</a></li>
            <li><a href="#"><img src="assets/icons/icon%20ranking.png" alt=""> Ranking</a></li>
            <li><a href="#"><img src="assets/icons/icon%20sair.png" alt=""></a></li>
        </ul>
    </section>

    <section id="main">
        <div class="container">
            <div class="row">
                <div class="col-sm">
                    <div class="scard">
                        <div class="avatar"><img src="assets/icons/user.png" alt=""></div>
                        Nome<p><label id="nome_edit"></label>
                    </div>
                    <div class="scard">
                        <div class="avatar"><img src="assets/icons/agenda.png" alt=""></div>
                        Data de nascimento<p><label id="data_edit"></label>
                    </div>
                    <div class="scard">
                        <div class="avatar"><img src="assets/icons/edu.png" alt=""></div>
                        Escolaridade<p><label id="escolaridade_edit"></label>
                    </div>
                    <div class="scard">
                        <div class="avatar"><img src="assets/icons/local.png" alt=""></div>
                        Endereço<p><label id="endereco_edit"></label>
                    </div>
                    <div class="scard">
                        <div class="avatar"><img src="assets/icons/message.png" alt=""></div>
                        Email<p><label id="email_edit"></label>
                    </div>
                    <div class="scard">
                        <div class="avatar"><img src="assets/icons/lock.png" alt=""></div>
                        Senha<p><label id="senha_edit"></label>
                    </div>
                    <div class="scard">
                        <p><a href="#" class=" btn-primary">Editar</a></p>
                    </div>
                </div>
                <div class="col-sm">
                    <h1 style="margin-left: 12px">Histórico</h1>
                    <div class="card">
                        <p>Data<br>Nome</p>
                    </div>
                </div>
            </div>
        </div>

    </section>
</body>

</html>
