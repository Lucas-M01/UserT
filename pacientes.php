<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bulma.min.css">
    <link rel="stylesheet" href="assets/css/pacientes.css">
    <title>Hospital</title>
</head>
<?php
    session_start();

    if(!isset($_SESSION["email"])){
        $_SESSION['error'] = "Não é possível acessar a página sem realizar o Login";
        header("Location: login.php");
    }
?>
<body>
    <header id="header">
        <nav class="fecha">
            <a class="logo" href="index.php">Sistema<span>++</span></a>
            <div>
                <ul>
                    <li><a class="menu den" href="capacientes.php">Cadastrar Paciente</a></li>
                    <li><a class="menu den" href="#">Lista Pacientes</a></li>
                    <li><a class="menu sair" href="logout.php">Sair</a></li>
                </ul>
            </div>
        </nav>
    </header>
    <main>
        <h2>Olá, Dr. <?=$_SESSION["nome"]?></h2>
        <h2>Tabela Pacientes</h2><br><br>
        <?php
        include("conexao.php");
        $query = sprintf("SELECT id_pacientes, nome, idade, peso, altura, imc FROM pacientes");
        $dados = mysqli_query($conexao, $query);

	    ?>
        <table class="table is-fullwidth"> 
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Idade</th> 
                    <th>Peso</th>
                    <th>Altura</th>                      
                    <th>Imc</th>
                </tr>
            </thead>           
            <?php while($linha = mysqli_fetch_assoc($dados)){ ?>
                <tbody>
                    <tr>
                        <td><?php echo $linha['nome']?></td>
                        <td><?php echo $linha['idade']?></td>
                        <td><?php echo $linha['peso']?></td>
                        <td><?php echo $linha['altura']?></td>
                        <td><?php echo number_format($linha['imc'] * 10000, 1, '.')?>kg/m<sup>2</sup>.</td>
                    </tr>
                </tbody>
            <?php } ?>
        </table>
    </main>
    <footer>

    </footer>
</body>
</html>