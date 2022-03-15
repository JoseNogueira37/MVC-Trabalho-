<?php

    $nome = $_REQUEST['nome'];
    $nasc = $_REQUEST['nasc'];
    $bebida = $_REQUEST['bebida'];

    $date1 = new DateTime('now');
    $date2 = new DateTime($nasc);

    $i = $date1 -> diff($date2);
    
    if(empty($nome)){
        
        $dados = array(
            "tipo" => 'error',
            "mensagem" => 'Existe(m) campo(s) obrigatório(s) não preenchido(s).'
        );
        
    } else {

        if($i->y < 18) {
            $dados = array(

                "mensagem" => 'Olá, '.$nome.', sabemos que sua bebida favorita é '.$bebida.' e você não pode ingerir bebida alcoólica.'

            );
        }
        else {
            $dados = array(
                "mensagem" => 'Olá, '.$nome.', sabemos que sua bebida favorita é '.$bebida.' e você pode ingerir bebida alcoólica.' 
            );
        }

    }
    

    echo json_encode($dados);