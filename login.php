<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,user-scalable=no">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="theme-color" content="#00b5ff">

    <title>Login</title>
    <meta name="google-signin-scope" content="profile email">
    <meta name="google-signin-client_id" content="488940934747-j7tum80gtrvhihke44ncbl2f70cro21q.apps.googleusercontent.com">
    <script src="https://apis.google.com/js/platform.js" async defer></script>
    <script type="text/javascript" src="config.js"></script>
    <link rel="stylesheet" type="text/css" href="assets\css\estilo.css">
    <link rel="stylesheet" type="text/css" src="jquery.js">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Comfortaa:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</head>

<body>
    <div class="content">
        <div class="card">

            <div class="conteiner_perfil" id="icone">
                <img class="icone_perfil" src="assets/imgs/foto.png">
            </div>

            <div class="input-group mb-3">
                <input type="text" id="login_logon" class="form-control logon" placeholder="Login" aria-label="Username" aria-describedby="basic-addon1">
            </div>
            <div class="input-group mb-3">
                <input type="password" id="senha_logon" class="form-control logon" placeholder="Senha" aria-label="Username" aria-describedby="basic-addon1">
            </div>

            <button class="btnn" onclick="login()">Entrar</button>
            <br><br>
            <div id="cadastro" href="cadastro.php"></div>

            <div class="g-signin2" data-onsuccess="onSignIn" data-theme="dark" data-width="370" data-height="50" data-longtitle="true" data-lang="pt-BR">
            </div>
        </div>
    </div>



</body>

</html>
