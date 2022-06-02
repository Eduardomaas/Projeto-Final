<?php
    $erro = false;

    if(!isset($_POST) || empty($_POST)){
        $erro = "Nada foi digitado";
    }
foreach($_POST as $chave => $valor){
    $chave  =trim(strip_tags($valor));

if(empty($valor)){
    $erro = "Existem campos em branco";
}

}

if((!isset($telefone) || !is_numeric($telefone)) && !$erro){
    $erro = "Digite um número ";
}

if((!isset($nome) || !filter_var($nome)) && !$erro){
    $erro = "Digite seu nome";
}

if((!isset($email) || !filter_var($email, FILTER_VALIDATE_EMAIL )) && !$erro){
    $erro = "Envie um email válido ";
}


if($erro){
    echo $erro;
}else{
    echo "<h1>Veja os dados enviados</h1>";

    foreach($_POST as $chave =>$valor){
        echo '<b>' .$chave . '<b>' . $valor .'<br><br>';
    }
}

?>