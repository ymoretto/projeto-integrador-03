<?php require_once('header.php'); ?>

<main class="pagusuario">

<div class="coverImageHolder">

  </div>

  <div class="userOptionsBar">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <div class="userImage"></div>
        </div>
      </div>
    </div>

  </div>

  <div class="col-md-6">
    <div class="profile-head">
      <h5>
        Amanda Dias
      </h5>
      <h6>
        Web Developer and Designer
      </h6>
      <p class="proile-rating">RANKINGS : <span>8/10</span></p>
      <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home"
            aria-selected="true">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile"
            aria-selected="false">Timeline</a>
        </li>
      </ul>
    </div>
  </div>
  <div class="col-md-2">
    <input type="submit" class="profile-edit-btn" name="btnAddMore" value="Edit Profile" />
  </div>
  </div>

  <div class="col-md-8">
    <div class="tab-content profile-tab" id="myTabContent">
      <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
        <div class="row">
          <div class="col-md-6">
            <label>ID</label>
          </div>
          <div class="col-md-6">
            <p>Amands</p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <label>Nome</label>
          </div>
          <div class="col-md-6">
            <p>Amanda Dias</p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <label>Email</label>
          </div>
          <div class="col-md-6">
            <p>amandad@gmail.com</p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <label>Fone</label>
          </div>
          <div class="col-md-6">
            <p>9 8974-7890</p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <label>Profissão</label>
          </div>
          <div class="col-md-6">
            <p>Web Developer and Designer</p>
          </div>
        </div>
      </div>
      <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
        <div class="row">
          <div class="col-md-6">
            <label>lorem ipsum</label>
          </div>
          <div class="col-md-6">
            <p>lorem ipsum</p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <label>lorem ipsum</label>
          </div>
          <div class="col-md-6">
            <p>lorem ipsum</p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <label>lorem ipsum</label>
          </div>
          <div class="col-md-6">
            <p>lorem ipsum</p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <label>lorem ipsum</label>
          </div>
          <div class="col-md-6">
            <p>lorem ipsum</p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <label>lorem ipsum</label>
          </div>
          <div class="col-md-6">
            <p>lorem ipsum</p>
          </div>
        </div>

      </div>
    </div>
  </div>
  </div>

  <!-- <div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body"></div>
                <h4>Perfil do Zezinho</h4>
                <hr>
                <p>Sobre</p>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-body"></div>
                <h4>Feed de Noticias</h4>
                <hr>
                <p>Sobre</p>
            </div>
        </div>
      </div>
</div> -->

</main>

<?php include_once("footer.php");?>