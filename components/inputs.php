<?php

    // Criação de input para formulário

    /**
     * Summary of campoInput
     * @param string $label Texto a ser exibido na label
     * @param string $type  Tipo do input
     * @param string $name  Nome para o input
     * @param string $id    id para o input
     * @param string $placeholder   Texto a ser exibido como placeholder
     * @return string
     * 
     * @param int $rows Número de linhas da área de texto
     * @param int $cols Número de colunas da área de texto
     */


    function campoInput($label, $type, $name, $id, $placeholder){

        return "
        <label>$label</label><br>
        <input type='$type' name='$name' id='$id' placeholder='$placeholder'><br>";
    }
    function campoTextarea($label, $name, $id, $rows, $cols, $placeholder){
        return "
        <label>$label</label><br>
        <textarea name='$name' id='$id' rows='$rows' cols='$cols'>$placeholder</textarea>
        ";
    }
?>
