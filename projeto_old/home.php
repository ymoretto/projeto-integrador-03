<?php 
include_once('header.php');
?>
<div id='banner'>
    <section class="container">
        <div class="jumbotron my-5">
            <h1 class="display-4">Olá, mundo!</h1>
            <p class="lead">Este é um simples componente jumbotron para chamar mais atenção a um determinado conteúdo ou
                informação.</p>
            <hr class="my-4">
            <p>Ele usa classes utilitárias para tipografia e espaçamento de conteúdo, dentro do maior container.</p>
            <a class="btn btn-primary btn-lg" href="#" role="button">Leia mais</a>
        </div>
    </section>
</div>
<section>
    <nav class="navbar navbar-light bg-light justify-content-center">
        <form class="form-inline">
            <input class="form-control mr-sm-2" type="search" placeholder="Pesquisar" aria-label="Pesquisar">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
        </form>
    </nav>
    <section>
        <section id="contato">
            <div class="container mt-5">
                <div class="row">
                    <div class="col">
                        <form>
                            <div class="form-group">
                                <label for="formGroupExampleInput">Nome</label>
                                <input type="text" class="form-control" id="formGroupExampleInput">
                            </div>
                            <div class="form-group">
                                <label for="nome">E-mail</label>
                                <input type="text" class="form-control" id="nome">
                            </div>
                            <div class="form-group">
                                <label for="mensagem">Mensagem</label>
                                <textarea name="mensagem" id="mensagem" class="form-control"></textarea>
                            </div>
                        </form>
                    </div>
                    <div class="col">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3656.051366938101!2d-46.67744548538287!3d-23.602490668996683!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce50ab7feb4519%3A0x739f0ddb0439cf94!2sDigital%20House%20S%C3%A3o%20Paulo!5e0!3m2!1spt-BR!2sbr!4v1569682036000!5m2!1spt-BR!2sbr"
                            width="100%" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                    </div>
                </div>
            </div>
        </section>
    </section>
</section>
<section class="container">
    <div class="container" id="divulgue">
        <div>
            <div id="serv"><img src="images/contato-por-telefone.png" alt="" width="70px"></div>
            <div>
                <p>Facilite o contato com o cliente.</p>
            </div>
        </div>
        <div>
            <div id="serv"><img src="images/dinheiro.png" alt="" width="70"></div>
            <div>
                <p>Divulgue valor de preços e serviços.</p>
            </div>
        </div>
        <div>
            <div id="serv"><img src="images/placeholder.png" alt="" width="70"></div>
            <div>
                <p>Localização.</p>
            </div>
        </div>
    </div>
    <div id="divul" class="pq1">
        <h2>Porque Colaki?</h2>
        <p>Impusione seu comércio ou serviços, atingirá pessoas próximas ou distante que possam se interessar pelo seu
            produto ou serviço. E isso de uma forma simples e rápida, já que a Colaki permite esse contato direto com o
            público a ser atingido conforme sua localização.</p>
    </div>
    <div id="divul">
        <h2>Vendas</h2>
        <p>Com o seu comércio se tornando visível no Colaki e atingindo potenciais clientes, o resultado mais provável é
            um maior número de vendas. De acordo com "Associação Brasileira de Comércio Eletrônico (ABComm)" estima-se
            que até o fim de 2019, o faturamento das vendas através o deste segmento seja de R$ 79,9 milhões, sendo que
            21% é por meio das redes sociais.</p>
    </div>
</section>













<?php include_once('footer.php'); ?>