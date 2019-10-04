<?php
function database(){
    $conn = mysqli_connect("localhost","id10950813_crudusuario","crudusuario","id10950813_crudusuario");
    return $conn;
}