<!DOCTYPE html>

<html lang='es'>

<head>
    <meta charset='utf-8' />
    <title>Cultø</title>
    <link rel='stylesheet' href="<?=base_url?>assets/css/styles.css" />
</head>

<body>
    <div id='container'>
        <!--Cabecera-->
        <header id='header'>
            <div id='logo'>
                <img src="<?=base_url?>assets/img/logoculto.png" alt='Logo Cultø' />
                <a href="<?=base_url?>index.php">
                    Cultø
                </a>
            </div>
        </header>

        <!--Menu-->
        <?php $categorias = Utils::showCategorias(); ?>
        <nav id='menu'>
            <ul>
                <li>
                    <a href='#'>Iniio</a>
                </li>
                <?php while($cat = $categorias->fetch_object()): ?>
                <li>
                    <a href="#"><?=$cat->nombre?></a>
                </li>
                <?php endwhile; ?>
            </ul>
        </nav>

        <div id='content'>

