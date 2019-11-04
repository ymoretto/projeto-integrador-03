<!doctype html>
<html lang="pt-br">
  <head>
    <title>Novo Visitante</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="css/style-cadastro-usuario.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
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
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>