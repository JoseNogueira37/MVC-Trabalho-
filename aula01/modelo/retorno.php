<?php

    $nome = $_REQUEST['nome'];
    $animal = $_REQUEST['animal'];

    if(empty($nome)){

        $dados = array(
            "tipo" => 'error',
            "mensagem" => 'Existe(m) campo(s) obrigatório(s) não preenchido(s).'
        );

    } else {

        switch($animal){
            case '1' : $dados = array(
                "tipo" => 'cachorro.jpg',
                "mensagem" => 'Olá '.$nome.', sabemos que seu animal preferido é o cachorro'
            );
            break;
            case '2' : $dados = array(
                "tipo" => 'gato.jpg',
                "mensagem" => 'Olá '.$nome.', sabemos que seu animal preferido é o gato'
            );
            break;
            case '3' : $dados = array(
                "tipo" => 'peixe.jpg',
                "mensagem" => 'Olá '.$nome.', sabemos que seu animal preferido é o peixe'
            );
            break;
        }
    }

    
    echo json_encode($dados);