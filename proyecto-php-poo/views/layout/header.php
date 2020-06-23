<!doctype html>
<html lang="s">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?=base_url?>assets/css/styles.css">
    <title>Document</title>
</head>
<body>
<div id="container">
    <!-- CABECERA -->
    <header id="header">
        <div id="logo">
            <img src="<?=base_url?>assets/img/camiseta.png" alt="camiseta logo">
            <a href="index_maqueta.php">
                Tienda de camisetas
            </a>
        </div>
    </header>

    <!-- MENU -->
    <?php $categorias = Utils::showCategorias() ?>
    <nav id="menu">
        <ul>
            <li>
                <a href="<?=base_url?>">
                    Inicio
                </a>
            </li>
                <?php while ($categoria = $categorias->fetch_object()): ?>
                    <li>
                        <a href="<?=base_url?>categoria/ver&id=<?=$categoria->id?>">
                            <?= $categoria->nombre ?>
                        </a>
                    </li>
                <?php endwhile; ?>

        </ul>
    </nav>

    <div id="content">