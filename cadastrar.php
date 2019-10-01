<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="img/favicon.ico" sizes="32x32" />
    <title>AVA - Ambiente Virtual de Aprendizagem</title>
    <link rel="stylesheet" href="css/estilo.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/tonsky/FiraCode@1.207/distr/fira_code.css">
</head>

<body>
    <div class="loginBox">
        <div class="esquerdaCad">
            <div class="esquerdaConteudo">
             <p class="titleForm">Cadastre-se</p>
             <form method="POST" class="cadastrar">
                 <input type="text" name="nome" class="inputCadNome">
                 <input type="mail" name="email" class="inputCadMail">
                 <input type="password" name="senha" class="inputCadSenha">
                 <input type="password" name="repetirSenha" class="inputCadConfirma">
                 <input type="tel" name="telefone" class="inputCadTel">
                 <input type="checkbox" /> Eu aceito os <u>termos do contrato</u>
             </form>
            </div>
            <div class="espaco">
            </div>
        </div>
        <div class="direitaCad">
            <div class="titleContainer">
            </div>
            <div class="formContainer">
                <p class="titleForm">Insira suas credenciais</p>
                <form method="post" class="formulariologin" autocomplete="off">
                    <input type="mail" name="usuario" placeholder="Seu email" class="inputLoginMail" required>
                    <input type="password" name="senha" placeholder="Sua senha" class="inputLoginSenha" required>
                    <button type="submit" class="btnLogin">Login</button>
                </form>
            </div>
            <div>
                <p class="linkContainer">
                    <a href="#" class="footerLink">Não consigo fazer login.</a>
                </p>
                <hr class="footerHr">
                <p class="linkContainer">
                    <a href="#" class="footerLink">Não tenho cadastro.</a>
                </p>
            </div>
        </div>
    </div>
</body>

</html>