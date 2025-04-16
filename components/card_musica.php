<?php 
// Criação de uma função para gerar um card de música em uma playlist


/**
 * @param string $artist Nome do artista
 * @param string $music Nome da música
 * @param string $image URL da imagem no servidor
 * @param string $gender Estilo da música
 * 
 */


function cardMusica($artist, $music, $image, $gender){

    return "
        <div class='musica'>
            <img src='$image'>
            <h1>$music</h1>
            <h3>$artist</h3>
            <p>$gender</p>
        </div>
    ";

}


?>