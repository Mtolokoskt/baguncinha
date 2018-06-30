<?php 
    $nome = $_POST['nome'];
    $email = $_POST['replyto'];
    $assunto = $_POST['assunto'];
    $mensagem = $_POST['mensagem'];

    $conexao = mysqli_connect('localhost','root','','baguncinha');
    if ($conexao->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
        $sql = "INSERT INTO trabalhe (nome, email, assunto, mensagem)
        VALUES ('$nome','$email','$assunto','$mensagem')";

    $res = mysqli_query($conexao, $sql);
    mysqli_close($conexao);
    header("Location: trabalhe.php");
    
?>  