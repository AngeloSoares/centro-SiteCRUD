<?php 

require_once('conexao.php');

$usuario = $_POST['txt_usuario'];
$email = $_POST['txt_email'];
$senha = $_POST['txt_senha'];
$nivel = $_POST['txt_nivel'];

$sql_cadastro = mysqli_query($ligar , "INSERT INTO tb_usuarios (usuario, senha, email, nivel) values ('$usuario','$senha','$email','$nivel')");

if ($sql_cadastro==true){
    
    echo "<script>
        alert('USUÁRIO CADASTRADO COM SUCESSO !!!');
        window.location.href='index.html';
    </script> ";

}else{
    
    echo "<script>
        alert('FALHA NO CADASTRO DO USUÁRIO !!!');
        window.location.href='cadastroUsuario.html';
    </script> ";

}



?>