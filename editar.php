<?php 

include_once('conexao.php');

$id = $_GET['codigo'];

$sql_consulta=mysqli_query($ligar, " SELECT * FROM tb_usuarios WHERE id='$id' ");

$dados=mysqli_fetch_array($sql_consulta);



?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Edição de Usuário </title>
</head>


<body>
    
    <center>
    <h1>Angelo Soares</h1>
    <hr>
    <h2> TELA DE EDIÇÃO DE DADOS </h2>
    <hr>
    </center>


    <center>
    <form method="POST" action="atualizar.php">     


        <input type="hidden" name="codigo" value='<?= $dados[0] ?>' >    
        USUÁRIO: <br>
        <input type="text"   name="txt_usuario" value='<?= $dados[1] ?>'> <br>
        E-mail: <br>
        <input type="email" name="txt_email" value='<?= $dados[3] ?>'> <br>
        SENHA: <br>
        <input type="password"  name="txt_senha" value='<?= $dados[2] ?>'> <br>
        <br>
        Nível:
        <select name="txt_nivel"  >
            <option value='<?= $dados[4] ?>'><?= $dados[4] ?></option>
            <option value="Admin">Administrador</option>
            <option value="Professor">Professor</option>
            <option value="Aluno">Aluno</option>
            <option value="Outros">Outros</option>
        </select>
        <br><br>
        
        <input type="submit"  value="Atualizar"> <br><br>

        <a href="index.html"> Logar </a>


    </form>
    </center>




</body>
</html>