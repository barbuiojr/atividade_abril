<?php 
// Criação de uma função que irá gerar posts de chamada para artigos relacionados à estudo de linguagens de programação

/**
 * 
 * @param string $titulo Título para o artigo
 * @param string $resumo Resumo do assunto do artigo
 * @param string $imagem Path da imagem no diretório do site
 * 
 */

function artigo($titulo, $resumo, $imagem){

    return "
        <div class='artigo'>
            <h1>$titulo</h1>
            <div class='resumo-artigo'>
                <p>$resumo</p>
                <img src='$imagem'>
            </div>
            <a href='#'>Saiba mais</a>
        </div>";
}
?>