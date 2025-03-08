<!-- 
    Autor: Marcelo Tosta de Santana - Fullstack Dev 
    Portifolio - PHP - linguagemdemaquina.com.br
    Data do Projeto : 06/03/2025
    Github: https://github.com/linguagemdemaquina/portifolio/
-->
<!doctype html>
<html lang="pt">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="cache-control" content="no-cache"/>
        <title>Portifólio - PHP - linguagemdemaquina.com.br - v.1'</title>
        <!-- Icone -->
        <link rel="shortcut icon" type="image/icon" href="imagens/icones/icone.png">
        <!-- CSS Personalizado -->
        <link rel="stylesheet" href="css/folha_de_estilos.css?<?php echo date("Y-m-d H:i:s"); ?>">
        <!-- JavaScript Personalizado -->
        <script src="js/efeito_parallax.js?<?php echo date("Y-m-d H:i:s"); ?>"></script>
    </head>
    <body>
        <section id="conteiner_principal" class="conteiner_principal">
            <div id="bg_plano_de_fundo_principal" class="bg_plano_de_fundo_principal"></div>
            <div id="logomarca" class="logomarca"></div>
            <div id="carro" class="camada_parallax" velocidade="0.2" taxa_crescimento="0.0020" style="background-image: url(imagens/carro.png); top:52vh;"></div>
            <!-- início seçao nossa loja -->
            <section id="nossa_loja" class="nossa_loja">
                <div id="titulo_nossa_loja" class="titulo_nossa_loja">Nossa Loja</div>
                <div id="texto_nossa_loja" class="texto_nossa_loja">
                    Nosso espaço é dedicado a oferecer uma ampla variedade de automóveis, atendendo às necessidades de diferentes perfis de clientes.
                    <br><br>
                    Contamos com uma estrutura organizada, apresentando carros novos e seminovos de diversas marcas e modelos, cuidadosamente expostos para proporcionar uma experiência de compra agradável.
                    <br><br>
                    Além de destacar atributos como qualidade, confiança e preços competitivos, nossa loja geralmente disponibiliza serviços adicionais, como consultoria personalizada, opções de financiamento e garantia.
                </div>
                <!-- início do carrossel de imagens -->
                <div class="carrossel">
                    <div class="painel_de_slides">
                        <div class="slide"><img src="imagens/carrossel/1.jpg" alt="Slide 1"></div>
                        <div class="slide"><img src="imagens/carrossel/2.jpg" alt="Slide 2"></div>
                        <div class="slide"><img src="imagens/carrossel/3.jpg" alt="Slide 3"></div>
                    </div>
                </div>
                <!-- fim do carrossel de imagens -->
            </section>
        </section>
        <!-- fim seção nossa loja -->
        <footer id="rodape" class="rodape">
            <p>Desenvolvido por Marcelo Tosta de Santana - 2025</p>
        </footer>
    </body>
</html>