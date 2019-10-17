<?php

$conn = mysqli_connect("localhost","id10950813_crudusuario","crudusuario","id10950813_crudusuario");
    $codigo = $_POST['codigo'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    
    $query = "UPDATE tb_usuario SET nm_usuario = $nome ,ds_email = $email, ds_senha = $senha WHERE cd_usuario = $codigo ";
    mysqli_query($conn,$query);

    echo 'registro atualizado com sucesso';
   