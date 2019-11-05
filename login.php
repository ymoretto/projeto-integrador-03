<?php require_once("header.php");?>

<section class="row" id="section-casas-login">
    <div class="col-6 casas-login">
    </div>
    <div class="col-6">
        <div class="logon">
            <h1 class="h4">Faça seu login</h1>
            <form action="" method="get">
                <label for="user">
                    Username ou email <br>
                    <input type="text" id="user">
                </label><br>
                <label for="password">
                    senha <br>
                    <input type="text" id="password">
                    <p><a href="#">Esqueci minha senha</a></p>
                </label>
                <h5>Ou entre com:</h5>
            </form>
            <span class="logon-with">
                <img src="images/google.svg">
                <img src="images/facebook.svg">
            </span>
        </div>
    </div>

</section>

<?php require_once("footer.php");?>