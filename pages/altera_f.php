<?php
include('conexao.php');
$id_agenda = $_GET['id_agenda'];
$sql = "select * from agenda where id_agenda=$id_agenda";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar Dados</title>
    <!-- <link rel="stylesheet" type="text/css" href="../css/estiloAltera/estilo.css" media="screen" /> -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">


</head>

<body>
    <div class="container">
        <div class="box">
            <h1 class="titulo">
                Alterar dados de uma Pessoa
            </h1>
            <form action="altera_agenda_exe.php" method="post" enctype="multipart/form-data">
                <input name="id_agenda" type="hidden" value="<?php echo $row['id_agenda'] ?>">
                <div class="form-group">
                    <label for="apelido">Apelido: </label>
                    <input type="text" name="apelido" id="apelido" required maxlength="50" value="<?php echo $row['apelido'] ?>" class="form-control">
                </div>
                <div class="form-group">
                    <?php if ($row['nome_foto'] == "")
                        echo "<td></td>";
                    else
                        echo "<td><img src='" . $row['nome_foto'] . "' width='200px' height='200px'/></td>";
                    ?>
                    <input type="file" name="foto" id="foto" accept="image" value="<?php echo $row['nome_foto'] ?>" class="form-control-file">
                </div>
                <div class="form-group">
                    <label for="endereco">Endereço:</label>
                    <input type="text" name="endereco" id="endereco" required maxlength="40" value="<?php echo $row['endereco'] ?>" class="form-control">
                </div>
                <div class="form-group">
                    <label for="bairro">Bairro: </label>
                    <input type="text" name="bairro" id="bairro" required maxlength="70" value="<?php echo $row['bairro'] ?>" class="form-control">
                </div>
                <div class="form-group">
                    <label for="cidade">Cidade: </label>
                    <input type="text" name="cidade" id="cidade" required maxlength="50" value="<?php echo $row['cidade'] ?>" class="form-control">
                </div>
                <div class="form-group">
                    <label for="estado">Estado: </label>
                    <input type="text" name="estado" id="estado" required maxlength="02" value="<?php echo $row['estado'] ?>" class="form-control">
                </div>
                <div class="form-group">
                    <label for="telefone">Telefone: </label>
                    <input type="tel" name="telefone" id="telefone" maxlength="15" placeholder="(xx) xxxx-xxxx" pattern="\([0-9]{2}\)[0-9]{4}-[0-9]{4}" required value="<?php echo $row['telefone'] ?>" class="form-control">
                </div>
                <div class="form-group">
                    <label for="celular">Celular: </label>
                    <input type="tel" name="celular" id="celular" maxlength="15" placeholder="(xx) xxxx-xxxx" pattern="\([0-9]{2}\)([9]{1})?[0-9]{4}-[0-9]{4}" required value="<?php echo $row['celular'] ?>" class="form-control">
                </div>
                <div class="form-group">
                    <label for="email">E-mail: </label>
                    <input type="email" name="email" id="email" required maxlength="70" value="<?php echo $row['email'] ?>" class="form-control">
                </div>
                <input class="submit" type="submit" value="Salvar" class="buttom">
                <button><a href="../index.php">Tela Inicial</a></button>
            </form>
        </div>
    </div>
</body>

</html>