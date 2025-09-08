<?php 
    if(!empty($_REQUEST['usuario'])) {
        echo "Seja bem-vindo, ". $_REQUEST["usuario"];
    } else {
        echo "Por favor, digite seu usuário!";
    }
?>