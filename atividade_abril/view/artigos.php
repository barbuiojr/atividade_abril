<?php
    require_once __DIR__ . "\..\model\Articles.php";
    require_once __DIR__ . "\..\components\article.php";
    require __DIR__ . '\..\components\navbar.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/style.css">
    <title>Artigos</title>
</head>
<body>
    <main>
       <?php echo $navbar ?>
        <h1 class="titulo-pagina">... Artigos ...</h1>
        <div id="playlist">
        <?php foreach($articles as $article){
            echo artigo($article[0], $article[1], $article[2]);
            } ?>
        </div>
    </main>
    
</body>
</html>