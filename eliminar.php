<?php 

include_once('conexao.php');

$id = $_GET['codigo'];

$sql_eliminar=mysqli_query($ligar,"  DELETE FROM tb_usuarios WHERE id='$id' ");

if($sql_eliminar==true){

    echo 
    "<script>

    alert('USUARIO EXCLUÍDO COM SUCESSO!!!');
    window.location.href='listarUsuarios.php';
    
    </script> ";

}else{

    echo "<script>
        alert('FALHA AO EXCLUIR USUÁRIO!!!');
        window.location.href='listarUsuarios.php';
    </script> ";

}

?>