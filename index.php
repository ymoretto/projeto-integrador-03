<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style_home.css">
    <title>Colaki</title>
</head>
<body>
    
    <header> 
        <!-- Fiz esse header apenas para marcar o espaço em que vai entrar o header.php -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <a class="navbar-brand" href="#">Header</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
              <div class="navbar-nav">
                <a class="nav-item nav-link active" href="#">Apenas <span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link" href="#">Um</a>
                <a class="nav-item nav-link" href="#">Temporário</a>
                <a class="nav-item nav-link disabled" href="#">Disabled</a>
              </div>
            </div>
        </nav>
    </header>

<!-- Código realmente começa aqui -->

<div class="main_img">
    <h1>Transforme seu bairro</h1>
</div>

<div class="line"> </div>

<section id="sobre_nos">
    <h2 class="subtitle">O que é Colaki?</h2>
    <div class="container">
        <div class="row">
            <div class="card-deck">
                <!-- card 1 -->
              <div class="card">
                <img class="card-img-top" src="images/undraw_a_day_at_the_park_owg1.svg" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
              </div>
              <!-- card 2 -->
              <div class="card">
                <img class="card-img-top" src="images/undraw_business_shop_qw5t.svg" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                </div>
              </div>
              <!-- card 3 -->
              <div class="card">
                <img class="card-img-top" src="images/undraw_composition_oskp.svg" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                </div>
              </div>
            </div>
        </div>
    </div>
</section>


<section id="contato">
  <h2 class="subtitle">Entre em contato!</h2>

  <div class="container">
  <form>
    <div class="form-group">
      <label for="exampleFormControlInput1">Email address</label>
      <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
    </div>
    <div class="form-group">
      <label for="exampleFormControlSelect1">Example select</label>
      <select class="form-control" id="exampleFormControlSelect1">
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
      </select>
    </div>
    <div class="form-group">
      <label for="exampleFormControlSelect2">Example multiple select</label>
      <select multiple class="form-control" id="exampleFormControlSelect2">
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
      </select>
    </div>
    <div class="form-group">
      <label for="exampleFormControlTextarea1">Example textarea</label>
      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>
</form>
  </div>


</section>



<!-- Código termina aqui -->

    <footer>
        <nav class="navbar navbar-dark">
            <p class="navbar-text footer-text text-center"> Header temporário para o Projeto Integrador</p>
        </nav>
    </footer>



    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>