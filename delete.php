<?php

$conn = mysqli_connect("localhost","id10950813_crudusuario","crudusuario","id10950813_crudusuario");
    $nome = $_POST['codigo'];
    
    $query = "DELETE FROM tb_usuario WHERE cd_usuario = $nome";
    mysqli_query($conn,$query);

    echo 'registro excluido com sucesso';
   