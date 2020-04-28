<?php $cabecalho_bootstrap = '<link rel="stylesheet" href="css/bootstrap.css">' ?>
<?php $cabecalho_js= '<script type="text/javascript" src="js/total.min.js"></script>' ?>

<?php 
    $conexao = mysqli_connect("localhost","root","","ecommerce");
    $dados = mysqli_query($conexao, "SELECT * FROM produtos WHERE id = $_POST[id]");
    $produto = mysqli_fetch_array($dados);
?>



<nav class="navbar navbar-default navbar-static-top">
    <div class="navbar-header">
        <a class="navbar-brand" href="index.php">Mirror Fashion</a>

        <button class="navbar-toggle" type="button" data-target=".navbar-collapse" data-toggle="collapse">
            menu
        </button>
    </div>

    <ul class="nav navbar-nav collapse navbar-collapse">
        <li><a href="sobre.php">Sobre</a></li>
        <li><a href="#">Ajuda</a></li>
        <li><a href="#">Perguntas frequentes</a></li>
        <li><a href="#">Entre em contato</a></li>
    </ul>
</nav>

<?php include("cabecalho.php"); ?>

<style>
    .form-control:invalid {
        border: 1px solid #cc0000;
    }
    
    .navbar {
        margin: 0;
    }

    header{
        display: none;
    }
</style>

<div class="jumbotron">
    <div class="container">
        <h1>Ótima escolha!</h1>
        <p>Obrigado por comprar na Mirror Fashion! Preencha seus dados para efetivar a compra.</p>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-sm-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2 class="panel-title">Sua compra</h2>
                </div>
    
                <div class="panel-body">
                    <img src="img/produtos/foto<?= $produto['id']?>-verde.png" alt="<?= $produto['nome']?>" class="img-thumbnail img-responsive">
                    <dl>
                        <dt>Nome</dt>
                        <dd><?= $produto['nome']; ?></dd>
                        
                        <dt>Preço</dt>
                        <dd><?= $produto['preco']?></dd>
                        
                        <dt>Cor</dt>
                        <dd><?= $_POST['cor']; ?></dd>

                        <dt>Tamanho</dt>
                        <dd><?= $_POST['tamanho']; ?></dd>
                    </dl>

                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="qtd">Quantidade:</label>
                                <input type="number" id="qtd" min="1" max="99" value="1" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="total">Total:</label>
                                <output	for="qtd preco" id="total" class="form-control">
                                    R$	129,90
                                </output>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>

        <form class="col-sm-8">
            <div class="row">
                <fieldset class="col-sm-6">
                    <legend>Dados pessoais</legend>

                    <div class="form-group">
                        <label for="nome">Nome completo</label>
                        <input type="text" class="form-control" id="nome" name="nome" autofocus required>
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="email@exemplo.com">
                    </div>

                    <div class="form-group">
                        <label for="cpf">CPF</label>
                        <input type="text" class="form-control" id="cpf" name="cpf" placeholder="000.000.000-00" required>
                    </div>

                    <div class="checkbox">
                        <label>
                            <input type="checkbox" value="sim" name="spam" checked>
                            Quero receber spam da Mirror Fashion
                        </label>
                    </div>
                </fieldset>

                <fieldset class="col-sm-6">
                    <legend>Cartão de Crédito</legend>

                    <div class="form-group">
                        <label for="numero-cartao">Número - CVV</label>
                        <input type="text" class="form-control" id="numero-cartao" name="numero-cartao">
                    </div>

                    <div class="form-group">
                        <label for="bandeira-cartao">Bandeira</label>
                        <select name="bandeira-cartao" id="bandeira-cartao" class="form-control">
                            <option value="master">MasterCard</option>
                            <option value="visa">VISA</option>
                            <option value="amex">American Express</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="validade-cartao">Validade</label>
                        <input type="month" class="form-control" id="validade-cartao" name="validade-cartao">
                    </div>
                </fieldset>
            </div>

            <button type="submit" class="btn btn-primary btn-block pull-right">
                <span class="glyphicon glyphicon-thumbs-up"></span>
                Confirmar Pedido
            </button>
        </form>
        <br>
        <br>
    </div>
</div>

<script	type="text/javascript" src="js/inputmask-plugin.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/jquery.js"></script>
