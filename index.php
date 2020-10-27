<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Entre ou cadastre-se</title>

    <link rel="stylesheet" href="./css/global.css">
    <link rel="stylesheet" href="./css/login.css">   

</head>
<body>
    <main>
        <section class="painel-login">        
            <div class="card">
                <h1> Entre ou cadastre-se</h1>            
                <form action="login_usuario.php" method="post">
                    <input type="e-mail" name="email" placeholder="E-mail">
                    <input type="password" name="senha" placeholder="Senha">
                    <button type="submit"><b>Entrar</b></button>
                    <a href="cadastro.php">Ainda não possui cadastro? clique aqui</a>
                </form>                
            </div>
        </section>
        <section class="painel-imagem">
            <img src="./imagens/login.svg" alt="">
        </section>
    </main>
</body>
</html>