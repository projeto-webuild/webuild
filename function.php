<?php
require_once('conexao.php');

$email = isset($_POST['email']) ? $_POST['email'] : "";
$usuario = isset($_POST['username']) ? $_POST['username'] : "";

$con = new Conexao();
$link = $con->conecta();

if ($email != "") {


    $sql = "SELECT email,username FROM usuario where email = '$email' ";

    $res = mysqli_query($link, $sql);
    $dados = mysqli_fetch_assoc($res);

    if ($email = $dados['email']) {;
        echo "<div class='alert alert-danger my-2' role='alert'>";
        echo "E-mail já cadastrado";
        echo "</div>";
    } else {
        echo "<div class='alert alert-success my-2' role='alert'>";
        echo  " E-mail disponível";
        echo "</div>";
    }
}


if ($usuario != "") {

    $sql = "SELECT username FROM usuario where username = '$usuario' ";
    $res = mysqli_query($link, $sql);
    $dados = mysqli_fetch_assoc($res);

    if ($username = $dados['username']) {;
        echo "<div class='alert alert-danger my-2' role='alert'>";
        echo " Username já cadastrado";
        echo "</div>";
    } else {
        echo "<div class='alert alert-success my-2' role='alert'>";
        echo " Username disponível";
        echo "</div>";
    }
}
