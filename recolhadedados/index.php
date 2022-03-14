<?php
require('config.php');

//Consultar registos da Base de dados
$query = "SELECT * FROM baseaula";
$stmt = $db->prepare($query);
$stmt->execute();
$alunos = $stmt->fetchAll();
$nralunos = $stmt->rowCount();
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title><?php echo $appName; ?></title>
</head>

<body>
    <div class="container">
        <h1><?php echo $appName; ?></h1>
        <h3>Consulta de Alunos</h3>
        <a href="create.php" class="btn btn-primary">Criar Novo</a>
        <?php
        if ($nralunos == 0) {
            echo "<p><strong>Ainda sem alunos inscritos</strong></p>";
        } else {
        ?>
            <p><strong>Encontramos <?php echo $nralunos; ?> alunos</strong></p>
            <table class="table">
                <thead>
                    <tr>
                        <td>Id</td>
                        <td>NrProcesso</td>
                        <td>Nome</td>
                        <td>Email</td>
                        <td>Telefone</td>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($alunos as $aluno) {
                    ?>
                        <tr>
                            <td><?php echo $aluno['id'] ?></td>
                            <td><?php echo $aluno['nrprocesso'] ?></td>
                            <td><?php echo $aluno['nome'] ?></td>
                            <td><?php echo $aluno['email'] ?></td>
                            <td><?php echo $aluno['telefone'] ?></td>
                            <td><a href="edit.php?id=<?php echo $aluno['id']; ?>" class="btn btn-warning btn-sm">Editar</a></td>
                        </tr>
                    <?php
                    }
                    ?>

                </tbody>
            </table>
        <?php
        }
        ?>







    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>