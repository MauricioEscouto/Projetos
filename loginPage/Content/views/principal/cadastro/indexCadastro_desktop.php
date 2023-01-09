<!DOCTYPE html>
<html lang="pt-BR">
    
    <title>Logar</title>

    <?php include (__DIR__ .  "/../../../views/configHtml/configHtml.inc"); ?>
    <?php include (__DIR__ .  "/../../../css/cssLinksPadrao/styleLinks.inc"); ?>
    
    <link rel="stylesheet" href="/Content/css/cabecalho/styleCabecalho_desktop.css">
    <link rel="stylesheet" href="/Content/css/principal/cadastro/styleCadastro_desktop.css">
    
    <body>
        <?php 
            include (__DIR__ .  "/../../../views/cabecalho/cabecalho.html");
        ?>
        
        <main>
            <section class="containerPrincipal">
                <div class="divPrincipal">
                    <div class="divPrincipal-titulo">
                        <img src="/Content/img/principal/cadastro/imagem-cadastro.svg">
                        <h2 class="criarConta-titulo">Criar conta</h2>
                        <span class="criarConta-subTitulo">Crie uma nova conta</span>
                    </div>
                    
                    <div style="height: auto; width: 100%;">
                        <hr class="linhaDivisoria">
                    </div>

                    <form class="divPrincipal-Cadastro" method="POST" action="/Content/scripts/testLogin.php">

                        <div class="principal-Cadastro">
                            <div class="divNome inputCadastro">
                                <img src="/Content/img/principal/cadastro/imagem-usuario.svg">
                                <input class="btn-Principal btnCadastro" id="inputCadastro-1" name="nome" type="text" placeholder="Nome" required>
                            </div>

                            <div class="divDocumento inputCadastro">
                                <img src="/Content/img/principal/cadastro/imagem-documento.svg">
                                <input class="btn-Principal btnCadastro" id="inputCadastro-2" name="documento" type="tel" placeholder="CPF" required>
                            </div>

                            <div class="divEmail inputCadastro">
                                <img src="/Content/img/principal/cadastro/imagem-envelope.svg">
                                <input class="btn-Principal btnCadastro" id="inputCadastro-3" name="email" type="email" placeholder="E-mail" required>
                            </div>

                            <div class="divTelefone inputCadastro">
                                <img src="/Content/img/principal/cadastro/imagem-telefone.svg">
                                <input class="btn-Principal btnCadastro" maxlength="11" name="telefone" type="text" placeholder="Telefone" required>
                            </div>

                            <div class="divSenha inputCadastro">
                                <img src="/Content/img/principal/cadastro/imagem-cadeado.svg">
                                <input class="btn-Principal" name="senha" type="password" placeholder="Senha" required>
                            </div>

                            <div class="divConfirmaSenha inputCadastro">
                                <img src="/Content/img/principal/cadastro/imagem-cadeado.svg">
                                <input class="btn-Principal" name="confirma-senha" type="password" placeholder="Confirme sua senha" required>
                            </div>

                        </div>

                        <div class="principal-BtnLogin">
                            <input class="btn-Principal login" type="submit" value="Logar" name="submit"></button>
                            <span>Esqueceu sua <strong>senha</strong>?</span>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </body>
</html>

<script src="/Content/scripts/principal/cadastro/cadastroScript.js"></script>