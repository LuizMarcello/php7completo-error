<?php

//Criando uma função para a manipulação dos êrros:
function manipula_erro($code, $message, $file, $line){
    echo json_encode(array(
        "Codigo"=>$code,
        "Menssagem"=>$message,
        "Arquivo"=>$file,
        "Linha"=>$line
    ));
}


    //Função nativa do php para tratar êrros, sem
    //usar 'Exceptions,try,catch':
    //Parâmetro: String do nome da função que vai manipular este êrro:
    //           Com aspas duplas(uma string): apenas o nome da função
    //           Sem aspas: A própria função.
    set_error_handler("manipula_erro");
        echo 100 / 0;
    








?>