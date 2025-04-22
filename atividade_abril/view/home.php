<?php
    require_once __DIR__ . "\..\model\Musics.php";
    require_once __DIR__ . "\..\components\card_musica.php";
    require __DIR__ . '\..\components\navbar.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/style.css">
    <title>Playlist</title>
</head>
<body>
    <main>
        <?php echo $navbar;?>
        <h1 class="titulo-pagina">... Minha playlist ...</h1>
        <div id="playlist">
        <?php foreach($musics as $music){
            echo cardMusica($music[0], $music[1], $music[2], $music[3]);
            } ?>
        </div>
    </main>
    
</body>
</html>