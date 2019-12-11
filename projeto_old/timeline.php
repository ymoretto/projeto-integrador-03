<?php require_once('header.php'); ?>

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

<?php include_once("footer.php");?>