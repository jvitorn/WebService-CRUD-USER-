<?php
    $conn = mysqli_connect("localhost","id10950813_crudusuario","crudusuario","id10950813_crudusuario");
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    if($email != " "){
    $query = "insert into tb_usuario values (null,'$nome','$email','$senha')";
    mysqli_query($conn,$query);

    echo 'Cadastro Realizado Com Sucesso';
    }
    else{
        echo 'algo de errado nao parece certo';
    }
   