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
    <title>Caravan - São Francisco</title>
</head>

<body>

    <!-- MODAL -->

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
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
                            <input type="email" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                            <small id="emailHelp" class="form-text text-muted">Nós não vamos divulgar seus dados com
                                ninguem.</small>
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
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Abrir Navegação">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle active" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Locais</a>
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

    <section class="container">
        <div class="text-center my-5">
            <span class="h6 d-block">O MELHOR DESTINO DE SUA VIAGEM</span>
            <h2 class="display-4 text-primary">São Francisco</h2>
        </div>

        <div class="row">
            <div class="col-md">
                <img height="450px" width="300px" class="img-fluid mb-4" src="img/local/saofrancisco/Foto1.jpg" alt="Foto 1">
                <img height="450px" width="300px" class="img-fluid mb-4" src="img/local/saofrancisco/Foto2.png" alt="Foto 2">
                <img height="450px" width="300px" class="img-fluid mb-4" src="img/local/saofrancisco/Foto4.jpg" alt="Foto 3">
            </div>
            <div class="col-md">
                <img class="img-fluid mb-4" src="img/local/saofrancisco/Foto3.jpg" alt="Foto 4">
                <img class="img-fluid mb-4" src="img/local/saofrancisco/Foto5.jpg" alt="Foto 5">
            </div>
            <div class="col-md">
                <img class="img-fluid mb-4" src="img/local/saofrancisco/Foto6.jpg" alt="Foto 6">
                <img height="800px" width="500px" class="img-fluid mb-4" src="img/local/saofrancisco/Foto7.jpg" alt="Foto 7">
            </div>
        </div>
    </section>

    <section class="container">
        <div class="text-center my-5">
            <span class="h6 d-block">DESCUBRA O QUE ACONTECE NA CIDADE</span>
            <h2 class="display-4 text-primary">Próximos Eventos</h2>
        </div>
        <table class="table table-hover table-responsive-md">
            <thead>
              <tr>
                <th scope="col">Data</th>
                <th scope="col">Evento</th>
                <th scope="col">Local</th>
                <th scope="col">Ticket</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">03/02</th>
                <td>Celebrate African American Heritage Night at Chase Center!</td>
                <td>Chase Center</td>
                <td><button type="button" class="btn btn-outline-dark">Comprar Ticket</button></td>
              </tr>
              <tr>
                <th scope="row">03/02</th>
                <td>Lunar New Year NightLife</td>
                <td>California Academy of Sciences</td>
                <td><button type="button" class="btn btn-outline-dark">Comprar Ticket</button></td>
              </tr>
              <tr>
                <th scope="row">04/02</th>
                <td>ODC/Dance Presents: Unplugged with Amy Seiwert</td>
                <td>ODC Dance Commons</td>
                <td><button type="button" class="btn btn-outline-dark">Comprar Ticket</button></td>
              </tr>
              <tr>
                <th scope="row">05/02</th>
                <td>San Francisco to Tiburon: 34 Miles Hosted by Ramping Up</td>
                <td>Crissy Beach Changing Rooms</td>
                <td><button type="button" class="btn btn-outline-dark">Comprar Ticket</button></td>
              </tr>
              <tr>
                <th scope="row">08/02</th>
                <td>Volunteer Night</td>
                <td>SF Bicycle Coalition – 1720 Market</td>
                <td><button type="button" class="btn btn-outline-dark">Comprar Ticket</button></td>
              </tr>
              <tr>
                <th scope="row">09/02</th>
                <td>Poetic Flowers: A Valentine’s Card</td>
                <td>University of California San Francisco</td>
                <td><button type="button" class="btn btn-outline-dark">Comprar Ticket</button></td>
              </tr>
              <tr>
                <th scope="row">10/02</th>
                <td>Breaking Bread and the Binary</td>
                <td>University Ministry Romero Room</td>
                <td><button type="button" class="btn btn-outline-dark">Comprar Ticket</button></td>
              </tr>
            </tbody>
          </table>
    </section>

    <br>

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