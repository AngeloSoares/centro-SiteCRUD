<?php 

include_once('conexao.php');

$usuario = $_POST['txt_usuario'];
$senha = $_POST['txt_senha'];


$sql_logar=mysqli_query($ligar, "SELECT * FROM tb_usuarios WHERE usuario='$usuario' and senha='$senha'");

if(mysqli_num_rows($sql_logar)!=0){

    header('location: principal.php');

}else{

    echo "<script>
    alert('FALHA NO LOGIN, USUÁRIO NÃO REGISTRADO !!!');
    window.location.href='index.html';
    </script> ";


}



?>