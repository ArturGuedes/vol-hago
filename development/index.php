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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/css/index.css">
</head>

<body>

    <div class="topnav">
        <div id="myLinks">
            <a href="#home" class="active">Home</a>
            <!-- Navigation links (hidden by default) -->
            <a href="#como-funciona">Como Funciona</a>
            <a href="#quem-e">Quem é hago?</a>
            <a href="#parceiros">Parceiros</a>
        </div>
        <!-- "Hamburger menu" / "Bar icon" to toggle the navigation links -->
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
          </a>
    </div>

    <a href="#home" id="myBtn"><img src="assets/arrow-up-solid.svg" style="width:30px; height: 30px;"/></a>


    <div id="topbar">
        <div class="row float-right">
            <div class="col vert">
                <p><a href="#home" class="active">Home</a></p>
            </div>
            <div class="col vert">
                <p><a href="#como-funciona">Como Funciona</a></p>
            </div>
            <div class="col vert">
                <a href="#quem-e">
                    <p>Quem é hago?</p>
                </a>
            </div>
            <div class="col vert">
                <a href="#parceiros">
                    <p>Parceiros</p>
                </a>
            </div>
        </div>
    </div>
    <section id="home">
        <div class="container">
            <div id="logo"><img src="assets/imgs/logo-home.png" alt=""></div>
            <a href="login.php" class="btn-primary">Acesse</a>
        </div>
    </section>
    <section id="como-funciona">
        <div class="container-fluid max-height">
            <div class="row">
                <h2 class="padding-top responsive-title separate">Como funciona</h2>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-sm responsive"><img src="assets/imgs/1.png" alt="" class="width"></div>
                    <div class="col-sm responsive"><img src="assets/imgs/2.png" alt="" class="width"></div>
                    <div class="col-sm responsive"><img src="assets/imgs/3.png" alt="" class="width"></div>
                    <div class="col-sm responsive"><img src="assets/imgs/4.png" alt="" class="width"></div>
                </div>
            </div>
        </div>
    </section>
    <section id="quem-e">
        <div class="container max-height2">
            <div class="row padding-top separate">
                <h2>Quem é hago?</h2>
            </div>
            <div class="row padding-sides">
                <p>
                    <span>Hago significa Humano em Ação, é um acrônimo das palavras Homa e Ago, provenientes do Esperanto. E identifica aqueles humanos que nunca desistem de fazer deste mundo um lugar melhor!<br><br>
                Super Hago é aquele que se destaca, é o Hago herói, que além de melhorar a si mesmo, melhora outros Hagos e o mundo por onde passa.
                Não basta ser Hago, temos que ser Super Hago!</span>
                </p>
            </div>
        </div>
    </section>
    <section id="parceiros">
        <div class="container max-height padding-top">
            <div class="row separate">
                <h2>Parceiros</h2>
            </div>
            <div class="row center">
                <div class="col"><a href="ttps://niteroi.rj.gov.br"><img src="assets/logos/niteroi%20c.png" style="background: white;" alt=""></a></div>
                <div class="col"><a href="https://hacknit.com.br"><img src="assets/logos/hacknit%20c.png" alt=""></a></div>
            </div>
        </div>
    </section>

    <section id="footer">
        <div class="container padding-top footer">
            <div class="row separate"><img src="assets/imgs/logo%20branca.png" class="responsive-img" /></div>
            <div class="row">
                <div class="col-6">
                    <p>Nossa plataforma foi criado com o intuito de ajudar a todos aqueles que organizam e os que fazem o trabalho voluntário, entendemos que é uma tarefa de muita responsabilidade e pouca visibilidade, portanto queremos tentar mudar um pouco essa situação.</p>
                </div>
                <div class="col-md">
                    <ul class="menu-footer">
                        <p>Menu</p>
                        <li><a href="login.php">Acessar plataforma</a></li>
                        <li><a href="#como-funciona">Como Funciona</a></li>
                        <li><a href="#quem-e">Quem é Hago?</a></li>
                        <li><a href="#parceiros">Parceiros</a></li>
                    </ul>
                </div>
            </div>
            <div class="row center">
                <div class="col- padding-sides"><a href="#home"><img src="assets/logos/icon%20face.png" href="#home" alt=""></a>
                </div>
                <div class="col-"><a href="#home"><img src="assets/logos/icon%20insta.png" href="#home" alt=""></a>
                </div>
                <div class="col- padding-sides"><a href="#home"><img src="assets/logos/icon%20tt.png" alt=""></a></div>
            </div>
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>

    <script>
        // Select all links with hashes
        $('a[href*="#"]')
            // Remove links that don't actually link to anything
            .not('[href="#"]')
            .not('[href="#0"]')
            .click(function(event) {
                // On-page links
                if (
                    location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') &&
                    location.hostname == this.hostname
                ) {
                    // Figure out element to scroll to
                    var target = $(this.hash);
                    target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                    // Does a scroll target exist?
                    if (target.length) {
                        // Only prevent default if animation is actually gonna happen
                        event.preventDefault();
                        $('html, body').animate({
                            scrollTop: target.offset().top
                        }, 1000, function() {
                            // Callback after animation
                            // Must change focus!
                            var $target = $(target);
                            $target.focus();
                            if ($target.is(":focus")) { // Checking if the target was focused
                                return false;
                            } else {
                                $target.attr('tabindex', '-1'); // Adding tabindex for elements not focusable
                                $target.focus(); // Set focus again
                            };
                        });
                    }
                }
            });
    </script>
    <script>
        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function() {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.getElementById("myBtn").style.visibility = "visible";
                document.getElementById("myBtn").style.opacity = "1";
            } else {
                document.getElementById("myBtn").style.visibility = "hidden";
                document.getElementById("myBtn").style.opacity = "0";
            }
        }
    </script>
    <script>
        function myFunction() {
            var x = document.getElementById("myLinks");
            if (x.style.maxHeight === "200px") {
                x.style.maxHeight = "0px";
            } else {
                x.style.maxHeight = "200px";
            }
        }
    </script>
</body>
</html>