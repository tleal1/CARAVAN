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
    <title>Caravan - Planos</title>
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
                    <a href="#" class="nav-link dropdown-toggle" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Locais</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a href="saofrancisco.php" class="dropdown-item">São Francisco</a>
                        <a href="paris.php" class="dropdown-item">Paris</a>
                        <a href="dublin.php" class="dropdown-item">Dublin</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a href="planos.php" class="nav-link active">Planos</a>
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
            <span class="h6 d-block">SEU PLANO, SUA VIAGEM</span>
            <h2 class="display-4 text-primary">Escolha o Plano</h2>
        </div>

        <div class="row">
            <div class="col-md">
                <div class="bg-light rounded p-4 box-shadow mb-5">
                    <h2>Gold</h2>
                    <ul class="list-unstyled lista-plano">
                        <li>→ 30 dias de viagem</li>
                        <li>→ Tudo pago pela empresa</li>
                        <li>→ Entrada para Eventos</li>
                    </ul>
                    <form action="">
                        <div class="form-group">
                            <select class="form-control bg-light" id="exampleFormControlSelect1">
                              <option>Selecione a cidade</option>
                              <option>Paris</option>
                              <option>Dublin</option>
                              <option>São Francisco</option>
                            </select>
                          </div>
                    </form>
                    <div class="row align-items-center mt-4">
                        <div class="col-md">
                            <a href="inscricao.php?plano=Gold" class="btn btn-primary btn-lg btn-block">Comprar plano</a>
                        </div>
                        <div class="col">
                            <span class="h4">R$ 14.000</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="bg-light rounded p-4 box-shadow mb-5">
                    <h2>Platinum<span class="badge badge-success ml-2">Novo</span></h2>
                    <ul class="list-unstyled lista-plano">
                        <li>→ 60 dias de viagem</li>
                        <li>→ Tudo pago pela empresa</li>
                        <li>→ Entrada para Eventos</li>
                    </ul>
                    <form action="">
                        <div class="form-group">
                            <select class="form-control bg-light" id="exampleFormControlSelect1">
                              <option>Selecione a cidade</option>
                              <option>Paris</option>
                              <option>Dublin</option>
                              <option>São Francisco</option>
                            </select>
                          </div>
                    </form>
                    <div class="row align-items-center mt-4">
                        <div class="col-md">
                            <a href="inscricao.php?plano=Platinum" class="btn btn-primary btn-lg btn-block">Comprar plano</a>
                        </div>
                        <div class="col">
                            <span class="h4">R$ 24.000</span>
                        </div>
                    </div>
                </div>
            </div>
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