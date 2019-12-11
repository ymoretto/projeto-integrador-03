
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Colaki</title>
    <link rel="shortcut icon" href="images/colaki-logo-icone-verde.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
      integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Chilanka|Open+Sans&display=swap" rel="stylesheet">
    <link href="http://code.ionicframework.com/ionicons/1.5.2/css/ionicons.min.css" rel="stylesheet">
    <script src="//code.jquery.com/jquery-2.1.0.min.js" type="text/javascript"></script>
<link rel="stylesheet" href="css/login.css">
<header>
<?php require_once("header1.php");?>
    <!-- <div class="d-flex justify-content-center" id="hlogin1">
        <img src="images\Colaki-logo(3).png" alt="" id="hlogin">
    </div> -->
</header>
<div class="container-fluid">
    <section class="row">
        <div class=" col-sm-6 col-md-6 m-0 p-0">
            <section class="casas-login"></section>
            <!-- <img src="images/apartamentos.jpg" class="" > -->
        </div>
        <div class=" col-sm-6 col-md-6 m-0 p-0" id="log1">
            <div class="logon mb-5">
                <h1 class="h4">Faça seu login</h1>
                <form action="" method="get">
                    <label for="user">
                        Username ou email <br>
                        <input type="text" id="user" placeholder="  ">
                    </label><br>
                    <label for="password">
                        senha <br>
                        <input type="text" id="password" placeholder=" ">
                        <p><a href="#">Esqueci minha senha</a></p>
                    </label>
                    <div class="container" id="botoes">
                    <button id="LoginBotao" class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
                    </div><br>
                    <div class="container" id="botoes">
                    <button id="CadastroBotao" class="btn btn-lg btn-success btn-block" type="confirm">Cadastrar</button>
                    </div>
                    <h5>Ou entre com:</h5>
                </form>
                <span class="logon-with">
                    <img src="images/google.svg">
                    <img src="images/facebook.svg">
                </span>
            </div>
        </div>

    </section>
</div>



<?php require_once("footer.php");?>