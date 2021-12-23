<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/pacientes.css">
    <link rel="stylesheet" href="assets/css/bulma.min.css">
    <title>Hospital</title>
</head>
<body>
    <?php
    session_start();

    if(!isset($_SESSION["email"])){
        $_SESSION['error'] = "Não é possível acessar a página sem realizar o Login";
        header("Location: login.php");
    }
    ?>
    <header id="header">
        <nav class="fecha">
            <a class="logo" href="index.php">Sistema<span>++</span></a>
            <div>
                <ul>
                    <li><a class="menu den" href="#">Cadastrar Paciente</a></li>
                    <li><a class="menu den" href="pacientes.php">Lista Pacientes</a></li>
                    <li><a class="menu sair" href="logout.php">Sair</a></li>
                </ul>
            </div>
        </nav>
    </header>
    <main>
        <form action="operacoes.php" method="POST">
            <h2>Cadastrar Pacientes</h2><br>
            <div>
                <label for="">Nome do Paciente:</label><br>
                <input type="text" name="nome" >
            </div>
            <div>
                <label for="">Peso do Paciente</label><br>
                <input type="number" value="" name="peso" step="0.01" text="Peso" placeholder="Kg" maxlength="200" data-validation-type="float" data-validation-interval="[0, 300]" data-validation-required="1" data-validations="type interval required" data-type="number" class="_input" min="0" max="300">
            </div>
            <div>
                <label for="">Altura do Paciente</label><br>
                <input type="number" name="altura" placeholder="cm">
            </div>
            <div>
                <label for="">Idade do Paciente</label><br>
                <input type="number" name="idade" placeholder="anos">
            </div>
            <button>Enviar</button>
        </form>
    </main>
    <footer>

    </footer>
</body>
</html>