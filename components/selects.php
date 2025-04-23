<?php 
    //Componente para criação de campos tipo select
    /**
     * 
     * @param string $label Texto a ser exibido na label
     * @param array $itens  Array contendo os itens do campo select
     * 
     */
    

    function campoSelect($label, $itens) {
        $lista = "";
        foreach($itens as $item){
            $lista = $lista."<option>$item</option>";

        }
        return "
        <label>$label</label><br>
        <select>$lista</select>";
    }
?>