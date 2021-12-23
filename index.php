<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/bulma.min.css"/>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&family=Roboto+Mono:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <title>Hospital</title>
</head>
<body>
    <header id="header">
        <nav class="fecha">
            <a class="logo" href="index.php">Sistema<span>++</span></a>
            <div>
                <a class="login" href="login.php">Login</a>
            </div>
        </nav>
    </header>
    <main> 
    <section>
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="column is-4 is-offset-4">
                    <div>
                        <form action="cadastro.php" method="POST">
                            <h2>Cadastro</h2>
                            <div class="field">
                                <div class="control">
                                    <input name="nome" type="text" class="input" placeholder="Nome" autofocus>
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input name="email" type="email" class="input" placeholder="Email">
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input name="senha" class="input" type="password" placeholder="Senha">
                                </div>
                            </div>
                            <button type="submit" class="button is-block is-link is-fullwidth">Cadastrar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
</body>
</html>