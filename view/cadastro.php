<?php 
    require_once __DIR__ . "\..\components\inputs.php";
    require_once __DIR__ . "\..\components\selects.php";
    require_once __DIR__ . "\..\components\button.php";
    require __DIR__ . '\..\components\navbar.php';
?>

<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/style.css">
    <title>Cadastro</title>
</head>
<body>
    <main>
       <?php echo $navbar ?>
        <h1 class="titulo-pagina">... Cadastro ...</h1>
        <div id="caixa-formulario">
            <form action="">
                <div id="formulario">
                    <h1>Dados Pessoais</h1><br>
                    <?php
                    echo campoInput("Nome Completo","text", "nome", "nome", "");
                    echo campoInput("Email","email", "email", "email", "seuemail@provedor.com");
                    echo campoInput("CPF","text", "cpf", "cpf", "");
                    echo campoInput("Telefone","text", "telefone", "telefone", "");?>
                    <br><h1>Informações da Reserva</h1><br>
                    <?php
                    echo campoInput("Data de checkin","date", "data-checkin", "data-checkin", "");
                    $quartos = array('Standard', 'Luxo', 'Super Luxo', 'Econômico', 'Família', 'Casal', 'Cobertura','Flat');
                    echo campoSelect("Tipo de quarto", $quartos);
                    echo campoInput("Data de checkout","date", "data-checkout", "data-checkout", "");
                    echo campoInput("Número de hóspedes","number", "qtd-hospedes", "qtd-hospedes", "");
                    echo campoTextarea("Observações", "observacoes", "obs", 6, 50, "");
                    echo botao("confirm", "Confirmar Reserva");
                    ?>

                </div>
            </form>
        </div>
        
    </main>
    
</body>
</html>