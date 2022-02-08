<?php 

require_once('conexao.php');

$id=$_POST['codigo'];
$usuario = $_POST['txt_usuario'];
$email = $_POST['txt_email'];
$senha = $_POST['txt_senha'];
$nivel = $_POST['txt_nivel'];

$sql_atualizar = mysqli_query($ligar , "  UPDATE tb_usuarios SET usuario='$usuario',senha='$senha',email='$email', nivel='$nivel' WHERE id='$id'     ");

if ($sql_atualizar==true){
    
    echo "<script>
        alert('USUÁRIO ATUALIZADO COM SUCESSO !!!');
        window.location.href='listarUsuarios.php';
    </script> ";

}else{
    
    echo "<script>
        alert('FALHA NA ATUALIZAÇÃO DE DADOS DO USUÁRIO !!!');
        window.location.href='editar.php';
    </script> ";

}



?>