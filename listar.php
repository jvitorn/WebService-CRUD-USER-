<?php
    $conn = mysqli_connect("localhost","id10950813_crudusuario","crudusuario","id10950813_crudusuario");

    $query = "SELECT * FROM tb_usuario ORDER by cd_usuario;";

    $result = mysqli_query($conn,$query);

    $registros =  array(
        'pessoas'=>array()
    );

    $i = 0;

    while($linha = mysqli_fetch_assoc($result)){
        $registros['pessoas'][$i] = array(
            'codigo'=>$linha['cd_usuario'],
            'nome'=>$linha['nm_usuario'],
            'email'=>$linha['ds_email'],
            'senha'=>$linha['ds_senha']
        );
        $i++;
    }
    echo json_encode($registros);