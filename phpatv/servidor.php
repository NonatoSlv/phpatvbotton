<?php

header('Content-Type: application/json');


$resposta = [
    "nome" => "Andrey Nonato",
    "idade" => 20,
    "cidade" => "São Paulo",
    "nascimento" => "31/03/2005",
    "altura" => "1,75",
    "peso" => "77kg",

];


echo json_encode($resposta);
?>
