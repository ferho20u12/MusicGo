<?php
    echo "Inicializando php";
    $data = array(
        'username' => 'codexworld',
        'password' => '123456'
    );
    $json = json_encode(array("user" => $data));

    echo $json;
?>