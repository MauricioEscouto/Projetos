<!DOCTYPE html>
<html lang="pt-BR">
    
    <title>Logar</title>

    <?php include (__DIR__ .  "/../../../views/configHtml/configHtml.inc"); ?>
    <?php include (__DIR__ .  "/../../../css/cssLinksPadrao/styleLinks.inc"); ?>

    <link rel="stylesheet" href="/Content/css/cabecalho/styleCabecalho_desktop.css">
    <link rel="stylesheet" href="/Content/css/principal/login/styleLogin_desktop.css">
    
    <body>
        <?php 
            include (__DIR__ .  "/../../../views/cabecalho/cabecalho.html");
        ?>
        
        <main>
            <section class="containerPrincipal">
                <div class="divPrincipal">
                    <div class="divPrincipal-imagem">
                        <img src="/Content/img/principal/login/imagem-login.svg">
                    </div>

                    <form class="divPrincipal-Login" method="POST" action="/Content/scripts/testLogin.php">
                        <div class="principal-Logar">
                            <h2 style="    margin-top: 8rem;
                            font-size: 1.5rem;">Faça seu login</h2>
                            <div class="principal-BtnEmailSenha">
                                <input class="btn-Principal" name="email" type="email" placeholder="E-mail" required>
                                <input class="btn-Principal" name="senha" type="password" placeholder="Senha" required>
                            </div>
                            <div class="principal-BtnLogin">
                                <input class="btn-Principal login" type="submit" value="Logar" name="submit"></button>
                                <span>Esqueceu sua <strong>senha</strong>?</span>
                            </div>
                        </div>
                        <div class="principal-CriarConta" onclick="PageViewModel.AbaCadastro()">
                            Criar sua conta <img src="/Content/img/principal/login/imagem-flecha.svg">
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </body>
</html>