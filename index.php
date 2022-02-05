<?php
?>

<!DOCTYPE html>
<html lang="pt-BT">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" type="imagem/png" href="img/c.png" />
    <title>Caravan</title>
</head>
<body>

    <!-- MODAL -->

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Login</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Email</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                      <small id="emailHelp" class="form-text text-muted">Nós não vamos divulgar seus dados com ninguem.</small>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Senha</label>
                      <input type="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="form-group form-check">
                      <input type="checkbox" class="form-check-input" id="exampleCheck1">
                      <label class="form-check-label" for="exampleCheck1">Mantenha-me conectado</label>
                    </div>
                  </form>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </div>
        </div>
      </div>

      <!-- FECHA MODAL -->
    
    <nav class="navbar navbar-expand-md navbar-light bg-light fixed-top py-3 box-shadow">

        <a href="index.php" class="navbar-brand"><img src="img/caravan.svg" alt="Caravan"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Abrir Navegação">
            <span class="navbar-toggler-icon"></span>
          </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Locais</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a href="saofrancisco.php" class="dropdown-item">São Francisco</a>
                        <a href="paris.php" class="dropdown-item">Paris</a>
                        <a href="dublin.php" class="dropdown-item">Dublin</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a href="planos.php" class="nav-link">Planos</a>
                </li>
                <li class="nav-item">
                    <a href="contato.php" class="nav-link">Contato</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link" data-toggle="modal" data-target="#exampleModal">Login</a>
                </li>
                <li class="nav-item">
                    <a href="inscricao.php?plano=Platinum" class="ml-md-2 btn btn-outline-primary">Inscreva-se</a>
                </li>
            </ul>
        </div>
    </nav>

    <section class="conteiner-fluid">
        <div class="row bg-dark text-white">

            <div class="col-lg-7">
                <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="img/california.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                          <h5>São Francisco</h5>
                          <p>Um dos melhores destinos para férias do mundo, São Francisco, na Califórnia oferece tudo o que você pode sonhar. Há um motivo para a chamarem de Estado Dourado.</p>
                        </div>
                      </div>
                      <div class="carousel-item">
                        <img src="img/dublin.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                          <h5>Dublin</h5>
                          <p>Dublin é uma cidade encantadora. Cidade jovem e vibrante, tem uma grande diversidade cultural mas mantém um toque de cidade do interior.</p>
                        </div>
                      </div>
                      <div class="carousel-item">
                        <img src="img/paris.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                          <h5>Paris</h5>
                          <p>Paris, a capital da França, é uma importante cidade europeia e um centro mundial de arte, moda, gastronomia e cultura.</p>
                        </div>
                      </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
                  </div>
            </div>

            <div class="col-lg-5 p-5 align-self-center">
                <h1 class="display-4">Realiza a viagem do seu sonho</h1>
                <p class="lead">O melhor local da sua viagem, mais de 500 excursões concluídas</p>
                <form action="">

                </form>
                <div class="input-group input-group-lg">
                    <input id="textonome" type="text" class="form-control" placeholder="Nome" aria-label="Nome" aria-describedby="button-addon2">
                    <div class="input-group-append">
                        <button onclick="redirect()"class="ml-md-2 btn btn-primary">Inscreva-se</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 bg-light">
        <div class="container text-center">
            <div class="my-5">
                <span class="h6 d-block">TUDO DE MELHOR PARA VOCÊ</span>
                <h2 class="display-4 text-primary">Aproveite as Vantagens</h2>
            </div>

            <div class="row">
                    <div class="col-xl-4 col-md-6">
                        <div style="height: 100px;" class="d-flex justify-content-center">
                            <img src="img/icones/passaporte.svg" alt="Passaporte">
                        </div>
                    <h3>Documentos</h3>
                    <p>Organizamos para você toda a burocracia dos documentos, Caravan oferece maior simplicidade para os clientes.</p>
                </div>

                <div class="col-xl-4 col-md-6">
                    <div style="height: 100px;" class="d-flex justify-content-center">
                        <img src="img/icones/passagens.svg" alt="Passagens">
                    </div>
                    <h3>Passagens</h3>
                    <p>Compra de passagens inclusa dentro dos pacotes oferecidos em nosso site.</p>
                </div>

                <div class="col-xl-4 col-md-6">
                    <div style="height: 100px;" class="d-flex justify-content-center">
                        <img src="img/icones/translado.svg" alt="Translado">
                    </div>
                    <h3>Transporte</h3>
                    <p>Oferemos o nosso próprio serviço de transporte para você, usuário, não ter que se preocupar com isso.</p>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div style="height: 100px;" class="d-flex justify-content-center">
                        <img src="img/icones/praias.svg" alt="Praias">
                    </div>
                    <h3>Praias</h3>
                    <p>Disponibilidade integral e capamanhamento garantido às melhores e mais perfeitas praias da escolha do se destino.</p>
                </div>

                <div class="col-xl-4 col-md-6">
                    <div style="height: 100px;" class="d-flex justify-content-center">
                        <img src="img/icones/bagagens.svg" alt="Bagagens">
                    </div>
                    <h3>Bagagens</h3>
                    <p>Tendo como um limite três malas por pessoa, as malas serão geridas pelos funcionários da empresa e com direito a seguro caso haja imprevistos.</p>
                </div>

                <div class="col-xl-4 col-md-6">
                    <div style="height: 100px;" class="d-flex justify-content-center">
                        <img src="img/icones/turismo.svg" alt="Turismo">
                    </div>
                    <h3>Turismo</h3>
                    <p>Acesso a um serviço de profissionais preparados e experientes, para tornar sua viagem sensacional e inesquecível.</p>
                </div>
            </div>
            <a href="planos.php" class="btn btn-primary btn-lg mt-4">Comprar Plano</a>
        </div>   
    </section>

    <section id="homeQuote" class="p-md-5">
        <blockquote class="blockquote text-center text-light p-md-5 p-3">
            <p class="display-4"><em>"A felicidade está na entrada que leva a algum lugar. A felicidade é a própria estrada"</em></p>
            <footer class="blockquote-footer text-white">Bob Dylan</footer>
        </blockquote>
    </section>

    <section class="container">
        <div class="my-5 text-center">
            <span class="h6 d-block">AINDA ESTÁ COM DUVIDAS?</span>
            <h2 class="display-4 text-primary">Perguntas Frequentes</h2>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-6 col-10" id="perguntasFrequentes" data-children=".pergunta">
                <div class="pergunta py-2">
                    <a href="#pergunta1" class="lead" data-toggle="collapse" aria-expanded="true" aria-controls="pergunta1">→ É possível cancelar a viagem?</a>
                    <div id="pergunta1" class="collapse show" role="tabpanel" data-parent="#perguntasFrequentes">
                        <p>Sim! É possiível cancelar a viagem, não só isso mas qualquer serviço comprado com a CARAVAN pode ser reeembolsados se cancelados dentro do prazo de 7 dias corridos a partir da data e hora da realização do pedido.</p>
                    </div>
                    <div class="dropdown-divider"></div>
                </div>
                <div class="pergunta py-2">
                    <a href="#pergunta2" class="lead" data-toggle="collapse" aria-expanded="true" aria-controls="pergunta2">→ Qual a garantia que tenho se perder o voo?</a>
                    <div id="pergunta2" class="collapse" role="tabpanel" data-parent="#perguntasFrequentes">
                        <p>Ao assinar os serviços da CARAVAN você esta pagando por um serviço de seguros de viagem, então nós assumimos a demanda e os riscos e você pode ser compensado com uma passagem nova na hora!  </p>
                    </div>
                    <div class="dropdown-divider"></div>
                </div>
                <div class="pergunta py-2">
                    <a href="#pergunta3" class="lead" data-toggle="collapse" aria-expanded="true" aria-controls="pergunta3">→ Qual a principal forma de viagem?</a>
                    <div id="pergunta3" class="collapse" role="tabpanel" data-parent="#perguntasFrequentes">
                        <p>Todas nossas viagens são organizadas e realizadas com as melhores companhias aéreas.</p>
                    </div>
                    <div class="dropdown-divider"></div>
                </div>
                <div class="pergunta py-2">
                    <a href="#pergunta4" class="lead" data-toggle="collapse" aria-expanded="true" aria-controls="pergunta4">→ Qual o melhor destino de viagem?</a>
                    <div id="pergunta4" class="collapse" role="tabpanel" data-parent="#perguntasFrequentes">
                        <p>O melhor destino de viagem sempre são os eventos por isso ao assinar os serviços da CARAVAN vovê terá o acesso garantido na palma da sua mão aos principais eventos do seu local de viagem!</p>
                    </div>
                    <div class="dropdown-divider"></div>
                </div>
                <div class="pergunta py-2">
                    <a href="#pergunta5" class="lead" data-toggle="collapse" aria-expanded="true" aria-controls="pergunta5">→ Quantas pessoas por plano?</a>
                    <div id="pergunta5" class="collapse" role="tabpanel" data-parent="#perguntasFrequentes">
                        <p>Os valores e serviços listados na área de planos se referem a apenas uma pessoa.</p>
                    </div>
                    <div class="dropdown-divider"></div>
                </div>
                </div>
            </div>
        </div>
        <div class="text-center my-4">
            <p class="small m-1">FALE CONOSCO PARA MAIS DUVIDAS</p>
            <a href="contato.php" class="btn btn-primary btn-lg">Entre em Contato</a>
        </div>
    </section>

    <footer class="bg-dark text-white">
        <div class="container py-4">
            <div class="row">
                <div class="col-md-3 col-6">
                    <h4 class="h6">PÁGINAS</h4>
                    <ul class="list-unstyled">
                        <li><a href="planos.php">Planos</a></li>
                        <li><a href="contato.php">Contato</a></li>
                        <li><a href="inscricao.php">Inscreva-se</a></li>
                    </ul>
                </div>
                <div class="col-md-3 col-6">
                    <h4 class="h6">LOCAIS</h4>
                    <ul class="list-unstyled">
                        <li><a href="saofrancisco.php">São Francisco</a></li>
                        <li><a href="paris.php">Paris</a></li>
                        <li><a href="dublin.php">Dublin</a></li>
                    </ul>
                </div>
                <div class="col-md-4 col-6">
                    <h4 class="h6">DADOS DE CONTATO</h4>
                    <ul class="list-unstyled text-secondary">
                        <li>caravan@caravanmail.com</li>
                        <li>21 2547698</li>
                        <li>De Seg. à Sex. das 8h às 18h</li>
                    </ul>
                </div>
                <div class="col-md-2 col-6">
                    <h4 class="h6">REDES SOCIAIS</h4>
                    <ul class="list-unstyled">
                        <li><a target="blank" class="btn btn-outline-secondary btn-block mb-2 btn-sm" href="https://www.facebook.com/"
                                style="max-width: 140px;">Facebook</a></li>
                        <li><a target="blank" class="btn btn-outline-secondary btn-block mb-2 btn-sm" href="https://twitter.com/"
                                style="max-width: 140px;">Twitter</a></li>
                        <li><a target="blank" class="btn btn-outline-secondary btn-block btn-sm" href="https://www.instagram.com/"
                                style="max-width: 140px;">Instagram</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="text-center bg-primary py-3">
            <p class="mb-0">Caravan &copy; 2022. Alguns direitos reservados.</p>
        </div>
    </footer>

    <script type="text/javascript" src="js/jquery-3.5.1.slim.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/popper.min.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
    <script type="text/javascript" src="js/sriptinnscricao.js"></script>
</body>
</html>