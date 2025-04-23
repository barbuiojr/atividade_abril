<?php 
    //Criação de botão

    /**
     * @param string $tipo Tipo de botão (classe)
     * @param string $texto Texto a ser exibido no botão
     */

    function botao($tipo, $texto){
        return "
            <button class='$tipo'>$texto</button>
        ";
    }
?>