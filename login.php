<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/login.css">
    <link rel="stylesheet" href="assets/css/bulma.min.css" />
    <title>Hospital</title>
</head>
<body>
<?php
        session_start();
        include ('conexao.php');
        
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $email = mysqli_real_escape_string($conexao, $_POST['email']);
            $senha = mysqli_real_escape_string($conexao,$_POST['senha']);

            if ((!$email) || (!$senha)){

                $_SESSION["error"] = "Por favor, todos campos devem ser preenchidos!";
                
            }else{
                
                $senha = md5($senha);
                
                $sql = "SELECT * FROM cadastro WHERE email ='{$email}' AND senha = '{$senha}'";
                $tram = mysqli_query($conexao, $sql);
                $login_check = mysqli_num_rows($tram);
                
                if ($login_check > 0){
                    while ($row = mysqli_fetch_array($tram)){
                        foreach ($row AS $key => $val){
                            $$key = stripslashes( $val );
                
                        }
                        
                    $_SESSION['id_usuario'] = $id;
                    $_SESSION['nome'] = $nome;
                    $_SESSION['senha'] = $senha;
                    $_SESSION['email'] = $email;
                
                    header("Location: pacientes.php");
                    }
                
                }else{
                    $_SESSION["error"] = "Login e Senha Inválidos";
                }
            }
        }

    ?>    
<header id="header">
    <nav class="fecha">
        <a class="logo" href="login.php">Sistema<span>++</span></a>
        <div>
            <a class="login" href="index.php">Cadastrar</a>
        </div>
    </nav>
</header>
<main>
    <section class="">
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="column is-4 is-offset-4">
                    <div class="notification is-danger">
                        <p><?= isset($_SESSION["error"]) ? $_SESSION["error"] : "" ?></p>
                    </div>
                    <form action="login.php" method="post">
                        <h2>Login</h2>
                        <div class="field">
                            <input class="input" name="email" type="email" placeholder="Email">
                        </div>
                        <div class="field">
                            <input class="input" name="senha" type="password" placeholder="Password">
                        </div>
                        <div class="field">
                            <p class="control">
                            <button class="button is-success" >Login</button>
                            </p>
                        </div>
                    </form>
               </div>
            </div>
        </div>
    </div>
</section>
</main>
</body>
</html>