<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/timeline.css">
    <title>Linha do tempo</title>
    <link rel="shortcut icon" href="images/colaki-logo-icone-verde.png" class="iconaba">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
    <header class="sanfrancisco">
        <!-- <div class="kbca"> -->
                        <div class="busca">
                            <div class="logo">
                                <a href=""><img src="images/Colaki-logo(3).png" alt="Colaki" class="logo1"></a>
                            </div>
                            <div class="busca1">
                                <form class="form1">
                                    <input type="search" name="nomeCompleto" id="procurar" placeholder="Procurar">
                                    <button type="search" name="button" class="botao"><img src="images/pesquisar.svg" alt="Pesquisar" class="lupa"></button>
                                </form>    
                                </div>
                        </div>    
                <div class="dropdown">
                        <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <img src="images/iconfinder_menu-alt_134216.svg" alt="Menu">
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <form class="form1">
                                        <input type="search" name="nomeCompleto" id="procurar" placeholder="Procurar">
                                        <button type="search" name="button" class="botao"><img src="images/pesquisar.svg" alt="Pesquisar" class="lupa"></button>
                                    </form>
                          <a class="nav-link active" href="#" id="btn"><img src="images/pagina-inicial.svg" alt="Página Inicial" class="iconm">Home</a>
                          <a class="nav-link active" href="#" id="btn"><img src="images/curriculo.svg" alt="Curriculo" class="iconm">Meu Perfil</a></li>
                          <a class="nav-link" href="#"  id="btn"><img src="images/amizade.svg" alt="Amizade" class="iconm">Amigos</a></li>
                          <a class="nav-link" href="#"  id="btn"><img src="images/falar.svg" alt="Falar" class="iconm">Mensagens</a></li>
                          <a class="nav-link" href="#"  id="btn"><img src="images/loja.svg" alt="Loja" class="iconm">Comércios</a></li>
                          <a class="nav-link" href="#"  id="btn"><img src="images/locais.svg" alt="Locais" class="iconm">Locais</a></li>
                          <a class="nav-link" href="#"  id="btn"><img src="images/sala-de-diretoria.svg" alt="Diretoria" class="iconm">Fóruns</a></li>
                          <a class="nav-link" href="#"  id="btn"><img src="images/calendario.svg" alt="Calendario" class="iconm">Eventos</a></li>
                          <a class="nav-link" href="#"  id="btn"><img src="images/cenario.svg" alt="Cenario" class="iconm">Fotos</a></li>
                        </div>
                </div>
        <!-- </div> -->
    </header>
    <section id="p">
        <div class="principal">
            <div class="menuvertical" id="principal">
                    <nav class="menuesq">
                        
                          
                            <ul class="nav flex-column">
                                    <li class="nav-item"><a class="nav-link active" href="#" id="btn"><img src="images/pagina-inicial.svg" alt="" class="iconm">Home</a></li>
                                    <li class="nav-item"><a class="nav-link active" href="../projeto-integrador-03/pagina-usuario.html" id="btn"><img src="images/curriculo.svg" alt="" class="iconm">Meu Perfil</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#"  id="btn"><img src="images/amizade.svg" alt="" class="iconm">Amigos</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#"  id="btn"><img src="images/falar.svg" alt="" class="iconm">Mensagens</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#"  id="btn"><img src="images/loja.svg" alt="" class="iconm">Comércios</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#"  id="btn"><img src="images/locais.svg" alt="" class="iconm">Locais</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#"  id="btn"><img src="images/sala-de-diretoria.svg" alt="" class="iconm">Fóruns</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#"  id="btn"><img src="images/calendario.svg" alt="" class="iconm">  Eventos</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#"  id="btn"><img src="images/cenario.svg" alt="" class="iconm">  Fotos</a></li>
                            </ul>
                    </nav>
            </div>
                <div class="timeline" id="principal">
                    <div class="input">
                        <form>
                                <label for="mensagem"></label>
                                <textarea name="mensagem" id="mensagem" class="form-control" placeholder="Vamos Publicar algo Hoje?"></textarea>                            
                                <div class="submit">
                                        <input type="submit" value="Publicar" id="button"/>
                                        <div class="ease"></div>
                                </div>
                        </form>
                    </div>
                    <div class="coment">
                        <div class="cx">
                            <div class="imgusuario">
                                <a href=""><img src="images/usuario-icone.png" alt="Usuario" class="imgusuario2"></a>
                            </div>
                            
                            <div>
                                <a href="#">Fulano</a>
                            </div>
                            
                        </div>    
                        <div>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto earum officia, impedit modi dolor totam excepturi, nobis laudantium velit unde eaque dignissimos? Facilis vitae ea debitis eos in, impedit sint!</p>
                        </div>
                        <div class="input">
                            <form>
                                    <label for="mensagem"></label>
                                    <textarea name="mensagem" id="mensagem" class="form-control"></textarea>                            
                                    <div class="submit">
                                            <input type="submit" value="Comentar" id="btn"/>
                                            <div class="ease"></div>
                                    </div>
                            </form>
                        </div> 
                    </div>  
                    <div class="coment">
                            <div class="cx">
                                <div class="imgusuario">
                                    <img src="images/usuario-icone.png" alt="Usuario" class="imgusuario2">
                                </div>
                                <div class="usuario">
                                    <a href="#">Fulano de tal</a>
                                </div>
                                
                            </div>    
                            <div>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto earum officia, impedit modi dolor totam excepturi, nobis laudantium velit unde eaque dignissimos? Facilis vitae ea debitis eos in, impedit sint!</p>
                            </div>
                            <div class="input">
                                    <form>
                                            <label for="mensagem"></label>
                                            <textarea name="mensagem" id="mensagem" class="form-control"></textarea>                            
                                            <div class="submit">
                                                    <input type="submit" value="Comentar" id="btn"/>
                                                    <div class="ease"></div>
                                            </div>
                                    </form>
                                </div>
                             
                        </div>   
                        <div class="coment">
                                <div class="cx">
                                    <div class="imgusuario">
                                        <img src="images/usuario-icone.png" alt="Usuario" class="imgusuario2">
                                    </div>
                                    <div>
                                        <a href="#">Fulano de tal</a>
                                    </div>
                                    
                                </div>    
                                <div>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto earum officia, impedit modi dolor totam excepturi, nobis laudantium velit unde eaque dignissimos? Facilis vitae ea debitis eos in, impedit sint!</p>
                                </div>
                                <div class="input">
                                        <form>
                                                <label for="mensagem"></label>
                                                <textarea name="mensagem" id="mensagem" class="form-control"></textarea>                            
                                                <!-- <input class="form-control form-control-lg" type="text" placeholder="Vamos Publicar algo hoje?" id="public"> -->
                                                <div class="submit">
                                                        <input type="submit" value="Comentar" id="btn"/>
                                                        <div class="ease"></div>
                                                </div>
                                        </form>
                                    </div>
                                 
                            </div> 
                </div>
                
            <div class="img" id="principal">
                <div><img src="images/undraw-map-light.svg" alt="" width="200"></div>
                <div><img src="images/undraw-schedule.svg" alt="" width="200"></div>
                <div><img src="images/undraw-a-day-at-the-park.svg" alt="" width="200"></div>
            </div>
        </div>    
    </section>
    <footer class="text-center"><p>Colaki &copy; 2019</p></footer>
    
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>