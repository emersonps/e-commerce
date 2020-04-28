<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" name="viewport" content="width=device-width">
        <?= @$cabecalho_title; ?>
        <link rel="stylesheet" href="css/reset.min.css">
        <link rel="stylesheet/less" type="text/css" href="css/style.css" />
        <link rel="stylesheet" href="css/mobile.css" media="(max-width: 939px)" />
        <?= @$cabecalho_css; ?>
        <?= @$cabecalho_bootstrap; ?>
        <link href='http://fonts.googleapis.com/css?family=PT+Sans|Bad+Script' rel='stylesheet'>
        <script	type="text/javascript" src="js/jquery.min.js"></script>
        <script	type="text/javascript" src="js/banner.min.js"></script>
        <script	type="text/javascript" src="js/home.min.js"></script>
        <?= @$cabecalho_js; ?>
        
        <!--[if	lt	IE	9]>
        <script	src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
    </head>
    <body>

        <header class="container">
            <!--	Conteúdo	do	cabeçalho	-->
            <h1><img src="img/logo.png" alt="Mirror	Fashion"></h1>

            <p class="sacola">
                Nenhum item na sacola de compras
            </p>

            <nav class="menu-opcoes">
                <ul>
                    <li><a href="#">Sua Conta</a></li>
                    <li><a href="#">Lista de Desejos</a></li>
                    <li><a href="#">Cartão Fidelidade</a></li>
                    <li><a href="sobre.php">Sobre</a></li>
                    <li><a href="#">Ajuda</a></li>
                </ul>
            </nav>
        </header>
        