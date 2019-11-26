<!doctype html>
<html lang="pt-br">
  <head>
    <title>Cadastro</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="css/style-cadastro-comerciante.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <?php include('header.php') ?>
      <section>
      <div class="row no-gutters">
        <div class="col-md-3 no-gutters">
          <div class="picture-side d-flex">
          </div>
        </div>
          
        <div class="col-md-9 no-gutters">
          <div class="content-side d-flex">
            <div class="content">
                <h2><strong>Sobre Você</strong></h2>
                <div class="row">
                  <div class="col-md-4">
                    <img class="avatar" src="images/undraw-female-avatar.svg" alt="Avatar">
                  </div>
                  <div class="col-md-8">
                    <form action="" method="POST">
                      <div class="form-row">
                        <div class="form-group col-md-6">
                          <input type="text" class="my-input" id="nome" placeholder="Nome">
                        </div>
                        <div class="form-group col-md-6">
                          <input type="text" class="my-input" id="sobrenome" placeholder="Sobrenome">
                        </div>
                      </div>
                      <div class="form-group">
                        <input type="email" class="my-input" id="email" placeholder="E-Mail">
                      </div>
                      <div class="form-row">
                        <div class="form-group col-md-6">
                          <input type="password" class="my-input" id="password" placeholder="Senha">
                        </div>
                        <div class="form-group col-md-6">
                          <input type="password" class="my-input" id="confirmar-senha" placeholder="Confirmar Senha">
                        </div>
                      </div>
                      <div class="form-row">
                        <div class="form-group termos-de-uso">
                          <input type="radio" id="termos">
                          <label for="termos">Eu concordo com os Termos de Uso</label>
                        </div>
                      </div>
                      <button type="submit" class="button"><b>Cadastrar</b></button>
                    </form>
                  </div>
                  <div>
                    <div class="row">
                      <p>Ou se cadastrar com:</p><br>
                    </div>
                    <div class="row icon-placeholder">
                      <div class="col-md-6">
                        <img class="icon" src="images/facebook.svg" alt="Facebook">
                      </div>
                      <div class="col-md-6">
                        <img class="icon" src="images/google.svg" alt="Google">
                      </div>
                    </div>
                  </div>
                </div>
              </div>       
            </div>
          </div>
        </div>
      </div>
    </section>
    <div class="container" id="divulgue">
        <div><div id="serv"><img src="images/contato-por-telefone.png" alt="" width="70"></div><div><p>Facilite o contato com o cliente.</p></div></div>
        <div><div id="serv"><img src="images/dinheiro.png" alt="" width="70"></div><div><p>Divulgue valor de preços e serviços.</p></div></div>
        <div><div id="serv"><img src="images/placeholder.png" alt="" width="70"></div><div><p>Localização.</p></div></div>
    </div>
    <div id="divul" class="pq1">
    <h2>Porque Colaki?</h2>
    <p>Impusione seu comércio ou serviços, atingirá pessoas próximas ou distante que possam se interessar pelo seu produto ou serviço. E isso de uma forma simples e rápida, já que a Colaki permite esse contato direto com o público a ser atingido conforme sua localização.</p>
    </div>
    <div id="divul">
    <h2>Vendas</h2>
    <p>Com o seu comércio se tornando visível no Colaki e atingindo potenciais clientes, o resultado mais provável é um maior número de vendas. De acordo com "Associação Brasileira de Comércio Eletrônico (ABComm)" estima-se que até o fim de 2019, o faturamento das vendas através o deste segmento seja de R$ 79,9 milhões, sendo que 21% é por meio das redes sociais.</p>
    </div>
    
    <?php include('footer.php')?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>