<?php require_once("header.php");?>
<div class="container-fluid">
    <section class="row">
        <div class=" col-sm-6 col-md-6 m-0 p-0">
            <section class="casas-login"></section>
            <!-- <img src="images/apartamentos.jpg" class="" > -->
        </div>
        <div class=" col-sm-6 col-md-6 m-0 p-0">
            <div class="logon mb-5">
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
</div>



<?php require_once("footer.php");?>