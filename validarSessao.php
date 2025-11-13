<?php
    session_start(); //Inicia uma sessão

    //Se não tiver sessão iniciada, redirecionda para o formLogin
    if(!isset($_SESSION['logado']) && $_SESSION['logado'] === false){
        header('location:formLogin.php?erroLogin=naoLogado');
    }
    else{
        $tipoUsuario = $_SESSION['tipoUsuario'];
        //Se o tipo de usuario logado não fpr administrador, redireciona para o fprmlogin
        if($_SESSION['tipoUsuario'] != 'administrador'){
        header('location:formLogin.php?erroLogin=acessoProibido');
    }
}
?>