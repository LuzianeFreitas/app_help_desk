<?php

    session_start();

    //Variavel responsável por verificar se a autenticação foi realizado com sucesso ou não
    $usuario_autenticado = false;

    //usuarios do sistema simulação banco
    $usuarios_app = array(
        array('email' => 'adm@teste.com.br', 'passworld' => '123456*'),
        array('email' => 'user@teste.com.br', 'passworld' => '654321')
    );


    foreach($usuarios_app as $user) {
        if($user['email'] == $_POST['email'] && $user['passworld'] == $_POST['passworld']) {
            $usuario_autenticado = true;
        }
    }

    if($usuario_autenticado) {
        $_SESSION['autenticado'] = 'SIM';
        header('Location: home.php');
    } else {
        $_SESSION['autenticado'] = 'NAO';
        header('Location: index.php?login=erro');
        
    }

?>