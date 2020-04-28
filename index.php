<?php $cabecalho_title = '<title> Mirror - Home </title>'; ?>
<?php include("cabecalho.php"); ?>

    <div class="container destaque">
        <section class="busca">
            <h2>Busca</h2>
            <form>
                <input type="search">
                <button>Buscar</button>
            </form>
        </section>
        <!-- fim .busca -->
        <section class="menu-departamentos">
            <h2>Departamentos</h2>
            <nav>
                <ul>
                    <li>
                        <a href="#">Blusas e Camisas</a>
                        <ul>
                            <li><a href="#">Manga curta</a></li>
                            <li><a href="#">Manga comprida</a></li>
                            <li><a href="#">Camisa social</a></li>
                            <li><a href="#">Camisa casual</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Calças</a></li>
                    <li><a href="#">Saias</a></li>
                    <li><a href="#">Vestidos</a></li>
                    <li><a href="#">Sapatos</a></li>
                    <li><a href="#">Bolsas e Carteiras</a></li>
                    <li><a href="#">Acessórios</a></li>
                </ul>
            </nav>
        </section>

        <!-- fim .menu-departamentos -->
        <section class="banner-destaque">
            <figure>
                <img src="img/destaque-home.jpg" alt="Promoção: Big City Night">
                <a href="#" class="pause"></a>
            </figure>
        </section>
        <!-- fim .banner-destaque -->

        <div class="container paineis">
            <section class="painel novidades">
                <h2>Novidades</h2>
                <ol>
                    <?php
                        $conexao = mysqli_connect("localhost", "root", "", "ecommerce");
                        $dados = mysqli_query($conexao, "SELECT * FROM produtos LIMIT 0, 12");
                        while ($produto = mysqli_fetch_array($dados)):
                    ?>
                    <li>
                        <a href="produto.php?id=<?= $produto['id'] ?>">
                            <figure>
                                <img src="img/produtos/miniatura<?=	$produto['id'] ?>.png" alt="<?= $produto['nome'] ?>">
                                <figcaption><?= $produto['nome'] ?> por <?=	$produto['preco'] ?></figcaption>
                            </figure>
                        </a>
                    </li>
                    <?php endwhile; ?>
	            </ol>

                <button	type="button">Mostrar mais</button>
            </section>
            <!-- fim .banner-destaque -->

            <section class="painel mais-vendidos">
                <h2>Mais Vendidos</h2>
                <ol>
                    <?php 
                        $dados = mysqli_query($conexao, "SELECT * FROM produtos ORDER BY vendas DESC LIMIT 0, 12"); 
                        while ($produto = mysqli_fetch_array($dados)):
                    ?>
                    <li>
                        <a href="produto.php?id=<?= $produto['id'] ?>">
                            <figure>
                                <img src="img/produtos/miniatura<?=	$produto['id'] ?>.png" alt="<?= $produto['nome'] ?>">
                                <figcaption><?= $produto['nome'] ?> por <?=	$produto['preco'] ?></figcaption>
                            </figure>
                        </a>                    
                    </li>
                    <?php endwhile; ?>
                </ol>
                <button	type="button">Mostrar mais</button>
            </section>
            <!-- fim .banner-destaque -->
        </div>
    </div>
    <!-- fim .container .destaque -->

<?php include("rodape.php"); ?>
