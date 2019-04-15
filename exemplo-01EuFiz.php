<?php

function manipula_erros($code, $message, $file, $line){

    echo json_encode(array(
        "Codigo do erro"=>$code,
        "A mensagem"=>$message,
        "O arquivo"=>$file,
        "A linha"=>$line
));
}

set_error_handler("manipula_erros");
echo 100 / 0;




?>