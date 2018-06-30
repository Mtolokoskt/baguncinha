<?php 
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['custo'];
    $tipo = $_POST['tipo'];
    $msg = $_POST['msg'];

    $conexao = mysqli_connect('localhost','root','','baguncinha');
    if ($conexao->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
        $sql = "INSERT INTO contato (nome, email, telefone, tipo_contato, mensagem)
        VALUES ('$nome','$email','$telefone','$tipo', '$msg')";

    $res = mysqli_query($conexao, $sql);
    mysqli_close($conexao);
    header("Location: contato.php");
?>