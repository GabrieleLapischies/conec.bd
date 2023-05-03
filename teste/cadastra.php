<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include 'conecta.php';


        // a partir desse momento eu pegarei as informações que vieram do form;
        $nome = $_POST["nome"];
        $cpf = $_POST["cpf"];

        $sql = "insert into usuario (nome,cpf) values ('$nome', '$cpf')";

        $resultado = mysqli_query($conexao, $sql);

        $mysqli_close($conexao);



    ?>
</body>
</html>