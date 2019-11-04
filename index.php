<?php require_once('header.php'); ?>
    
<!-- Código realmente começa aqui -->

<div class="main_img">
  <div class="chamada">
    <h1 class="titulo">Transforme seu bairro</h1>
    <p class="subtitulo">Outra frase de efeito?</p>
  </div>
</div>

<section id="sobre_nos">
    <h2 class="subtitle">O que é Colaki?</h2>
    <div class="container">
        <div class="row">
            <div class="card-deck">
                <!-- card 1 -->
              <div class="card col-sm-6">
                <img class="card-img-top" src="images/undraw-a-day-at-the-park.svg" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text">This is a longer card with supporting text below as as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
              </div>
              <!-- card 2 -->
              <div class="card col-sm-6">
                <img class="card-img-top" src="images/undraw-business-shop.svg" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                </div>
              </div>
              <!-- card 3 -->
              <div class="card col-sm-6">
                <img class="card-img-top" src="images/undraw-composition.svg" alt="Card image cap">
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

  <div class="container form-contato">
    <div class="row">
      <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 contato">
      <form>
        <div class="form-group">
          <label for="exampleFormControlInput1">Nome</label>
          <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="" name="nome">
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Email</label>
          <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="" name="email">
        </div>
        <div class="form-group">
          <label for="exampleFormControlTextarea1">Mensagem</label>
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <button type="submit" class="button"><b>Enviar</b></button>
      </form>
      </div>
      <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3656.0513669401416!2d-46.67745084887645!3d-23.602490668923505!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce50ab7feb4519%3A0x739f0ddb0439cf94!2sDigital%20House%20S%C3%A3o%20Paulo!5e0!3m2!1sen!2sbr!4v1569681978368!5m2!1sen!2sbr" width="100%" height="450" frameborder="0" allowfullscreen=""></iframe>
      </div>
    </div>

  </div>


</section>
<!-- Código termina aqui -->

<?php include_once("footer.php");?>