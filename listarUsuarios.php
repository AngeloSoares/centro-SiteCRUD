<?php 

include_once('conexao.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuários</title>
</head>


<body>
<center>
    <h1>Lista dos Usuários</h1>
    
    <hr>
    <a href="principal.php">Menu Principal</a>
    <a href="rel_usu.php">Imprimir</a>
    <hr>

    <table rules="all">
        <thead>
            <tr>
            <th>Código</th>    
            <th>Usuário</th>
            <th>Senha</th>
            <th>E-mail</th>
            <th>Nível</th>
            </tr>
        </thead>

        <tbody>

            <?php 
                $sql_consulta=mysqli_query($ligar, "SELECT * FROM tb_usuarios");
                $TOTAL=mysqli_num_rows($sql_consulta);
                
                while($dados=mysqli_fetch_array($sql_consulta)){
                    ?>

                    <tr>
                    <td><?= $dados[0] ?> </td>
                    <td><?= $dados[1] ?> </td>
                    <td><?= $dados[2] ?> </td>
                    <td><?= $dados[3] ?> </td>
                    <td><?= $dados[4] ?> </td>

                    <td><a href="editar.php?codigo=<?= $dados[0] ?>">Editar</a></td>
                    <td><a href="eliminar.php?codigo=<?= $dados[0] ?>">Eliminar</a></td>
                    </tr>

                    

            <?php  }  ?>

            <tr><td colspan="6"> Total: <?= $TOTAL ?></td></tr>
        </tbody>


    </table>

</center>


</body>



</html>