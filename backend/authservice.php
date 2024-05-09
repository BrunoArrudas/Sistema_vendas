<?php

require_once 'entity/Usuario.php';
require_once 'dao/UsuarioDAO.php';

$type = filter_input(INPUT_POST, "type");

if($type === "register"){
    // Logica de registro do usuario
    $new_nome = filter_input(INPUT_POST, "new_nome");
    $new_email = filter_input(INPUT_POST, "new_email");
    $new_password = filter_input(INPUT_POST, "new_password");
    $confirm_password = filter_input(INPUT_POST, "confirm_password");

    if($new_email && $new_nome && $new_password){
    
    if($new_password === $confirm_password){
    $hashed_password = password_hash($new_password, PASSWORD_DEFAULT);

    $usuario = new Usuario(null, $new_nome, $hashed_password, $new_email, null, 1 , null, null);
    $usuarioDAO = new UsuarioDAO();
    $success = $usuarioDAO->create($usuario);

    if($success){
    header("Location: index.php");
    exit();
    } else {
        //Tratar falha de registro em BD

    }

    } else {
        //TO-DO: Exibir mensagem de senhas incompativeis
    }

    } else {

    }

} elseif($type === "login"){
    // TO-DO: Verificar se o usuario tem cadastro
    // Dar ao usuario um token de sessão para navegar no site
}


?>
