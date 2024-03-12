<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($tituloSite) ? $tituloSite : "Site"; ?></title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    
<?php include "dados.php"; ?>

<div class="content">
    <h1><?php echo isset($tituloSite) ? $tituloSite : "Site"; ?></h1>
    <p>Olá, eu sou um script PHP.</p>
    
    <div class="produtos">
        <h2>Produtos</h2>
        <ul>
            <?php foreach ($produtos as $produto): ?>
                <li><?php echo $produto; ?></li>
            <?php endforeach; ?>
        </ul>
    </div>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> - Todos os direitos reservados</p>
    </footer>
</div>

</body>
</html>
