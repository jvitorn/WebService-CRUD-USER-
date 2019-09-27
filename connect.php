<?php
    $conn = mysqli_connect("localhost","id10950813_crudusuario","crudusuario","id10950813_crudusuario");
    $nome = $_GET['nome'];
    $email= $_GET['email'];
    $senha= $_GET['senha'];

    $query = "insert to tb_usuario values (null,'$nome','$email','$senha')";

    mysqli_query($conn,$query);

    echo 'Cadastro Realizado Com Sucesso';