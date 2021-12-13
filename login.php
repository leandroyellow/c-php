<?php
session_start();
if(isset ($_POST['email']) && isset ($_POST['senha'])){
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    if ($_POST['email']) {
        $usuarios = [
            [
                "nome" => "Leandro",
                "email" => "leandro@leandro.com",
                "senha" => "senha123",
            ],
            [
                "nome" => "Ana",
                "email" => "ana@ana.com",
                "senha" => "senha123",
            ]
        ];
        foreach($usuarios as $usuario) {
            $emailValido = $email === $usuario['email'];
            $senhaValida = $senha === $usuario['senha'];

            if($emailValido && $senhaValida) {
                $_SESSION['erros'] = null;
                $_SESSION['usuario'] = $usuario['nome'];
                $expiracao = time() + 60 * 60 * 24 * 30;
                setcookie('usuario', $usuario['nome'], $expiracao);
                
                header('Location: index.php');
            }
        }

        
        $_SESSION['erros'] = ['Usuário/Senha Inválida!'];
        

    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="css/login.css">
    <title>Curso PHP</title>
</head>

<body class="login">
    <header class="cabecalho">
        <h1>Curso PHP</h1>
        <h2>Seja Bem Vindo!</h2>
    </header>

    <main class="principal">
        <div class="conteudo">
            <h3>Identifique-se</h3>
            <?php 
            if (isset($_POST['email'])) {
            if ($_SESSION['erros']) { ?>
            <div class="erros">
                <?php foreach ($_SESSION['erros'] as $erros) : ?>
                <p><?= $erros; ?></p>
                <?php endforeach ?>
            </div>
            <?php } } ?>
            <form action="#" method="post">
                <div>
                    <label for="email">E-mail</label>
                    <input type="email" name="email" id="email">
                </div>
                <div>
                    <label for="senha">Senha</label>
                    <input type="password" name="senha" id="senha">
                </div>
                <button>Entrar</button>
            </form>
        </div>
    </main>
    <footer class="rodape">
        Leandro <?= date('d/m/Y'); ?>
    </footer>
</body>

</html>