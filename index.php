<!DOCTYPE html>
<html lang="pt-Br">
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
                    <input type="email" name="email" placeholder="Digite o seu e-mail">
                    <input type="password" name="senha" placeholder="Digite a sua senha">
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