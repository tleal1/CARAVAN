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
    <title>Caravan - Inscrição</title>
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
                    <a href="planos.php" class="nav-link">Planos</a>
                </li>
                <li class="nav-item">
                    <a href="contato.php" class="nav-link">Contato</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link" data-toggle="modal" data-target="#exampleModal">Login</a>
                </li>
                <li class="nav-item">
                    <a href="inscricao.php?plano=Platinum" class="ml-md-2 btn btn-outline-primary active">Inscreva-se</a>
                </li>
            </ul>
        </div>
    </nav>

    <section class="container">
        <div class="my-5 text-center">
            <span class="h6 d-block">PROGRAME A VIAGEM DO SEU SONHO</span>
            <h1 class="display-4 text-primary">INSCREVA-SE</h1>
        </div>
        <div class="row">
            <form class="col-lg-6">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputNome">Nome</label>
                        <input type="text" class="form-control" id="inputNome" placeholder="Nome Completo">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputCPF">CPF</label>
                        <input type="text" class="form-control" id="inputCPF" placeholder="xxx.xxx.xxx-xx">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputEmail">Email</label>
                        <input type="email" class="form-control" id="inputEmail" placeholder="Seu email">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputSenha">Senha</label>
                        <input type="password" class="form-control" id="inputSenha" placeholder="Senha de acesso">
                    </div>
                    <div class="form-group col-12">
                        <label for="inputEndereco">Endereço</label>
                        <input type="text" class="form-control" id="inputEndereco"
                            placeholder="Número, nome da rua e bairro.">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputCidade">Cidade</label>
                        <input type="text" class="form-control" id="inputCidade">
                    </div>
                    <div class="form-group col-md-3 col-6">
                        <label for="inputCidade">Estado</label>
                        <select id="inputCidade" class="form-control">
                            <option>Selecione o Estado</option>
                            <option>Rio de Janeiro</option>
                            <option>São Paulo</option>
                            <option>Paraná</option>
                            <option>Ceará</option>
                            <option>Acre</option>
                        </select>
                    </div>
                    <div class="form-group col-md-3 col-6">
                        <label for="inputCidade">CEP</label>
                        <input type="text" class="form-control" id="inputCidade" placeholder="xxxxx-xxx">
                    </div>
                </div>

                <div class="bg-light rounded box-shadow p-3 form-group">
                    <h2 class="h6 text-primary">FORMA DE PAGAMENTO</h2>
                    <nav class="nav btn-group mb-3" id="formaPagamento" role="tablist">
                        <button type="button" class="btn btn-secondary btn-sm active " id="nav-cartao-tab"
                            data-toggle="tab" href="#nav-cartao" role="tab" aria-controls="nav-cartao"
                            aria-selected="true">Cartão de Crédito</button>
                        <button type="button" class="btn btn-secondary btn-sm" id="nav-boleto-tab" data-toggle="tab"
                            href="#nav-boleto" role="tab" aria-controls="nav-boleto" aria-selected="false">Boleto
                            Bancário</button>
                    </nav>
                    <div class="tab-content" id="formaPagamentoConteudo">
                        <div class="tab-pane fade show active" id="nav-cartao" role="tabpanel"
                            aria-labelledby="nav-cartao-tab">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputNomeCartao">Nome no Cartão</label>
                                    <input type="text" class="form-control" id="inputNomeCartao"
                                        placeholder="Nome impresso no cartão">
                                </div>
                                <div class="form-group col-md-3 col-6">
                                    <label for="inputMes">Mês</label>
                                    <select id="inputMes" class="form-control">
                                        <option>Expira mês ...</option>
                                        <option>01</option>
                                        <option>02</option>
                                        <option>03</option>
                                        <option>04</option>
                                        <option>05</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-3 col-6">
                                    <label for="inputAno">Ano</label>
                                    <select id="inputAno" class="form-control">
                                        <option>Expira ano ...</option>
                                        <option>2022</option>
                                        <option>2023</option>
                                        <option>2024</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputNumeroCartao">Número no Cartão</label>
                                    <input type="text" class="form-control" id="inputNumeroCartao"
                                        placeholder="5555 5555 5555 5555">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputCodigo">Código de Segurança</label>
                                    <input type="text" class="form-control" id="inputCodigo" placeholder="XXX">
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-boleto" role="tabpanel" aria-labelledby="nav-boleto-tab">
                            <p class="lead">Clique em contratar plano que enviaremos um boleto para o seu e-mail.</p>
                        </div>
                    </div>
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label mb-2" for="exampleCheck1">Concordo com os <a href="#"> termos e
                            condições.</a></label>
                </div>
                <button type="submit" class="btn btn-primary btn-lg">Contratar Plano</button>
                <br>
                <br>
            </form>
            <div class="col-lg-5 mx-auto order-first order-lg-1 mb-5">
                <h2 class="text-primary h6">PLANO ESCOLHIDO</h2>
                <div class="bg-light rounded p-4 box-shadow">
                    <h2 id="plano">Platinum</h2>
                    <ul class="list-unstyled lista-plano">
                        <li id="dias">→ 60 dias de viagem</li>
                        <li>→ Tudo pago pela empresa</li>
                        <li>→ Entrada para Eventos</li>

                    </ul>
                    <div class="form-group">
                        <select class="form-control bg-light" id="inputcidades">
                            <option>Selecione a cidade</option>
                            <option>São Francisco</option>
                            <option>Paris</option>
                            <option>Dublin</option>
                        </select>
                    </div>
                    <div class="row mt-4">

                        <div class="col">
                            <span id="preco" class="h4">R$ 24.000</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

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