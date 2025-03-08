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
            <!-- início da seçao nossa loja -->
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
            <!-- fim da seçao nossa loja -->
            <!-- início da seçao nossa estoque -->
            <section  id="estoque" class="estoque">
                <div id="titulo_estoque" class="titulo_estoque">Estoque</div>
                <!-- início cards de estoque -->
                <div class="card-container">
                    <div class="card">
                        <div class="card-inner">
                            <div class="card-front">
                                <img src="imagens/cards/estoque_1.jpg" alt="Card 1">
                                <h3>Ford Territory Titanium 2024/25</h3>
                            </div>
                            <div class="card-back">
                                <p>Descrição detalhada do conteúdo da foto 1.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-inner">
                        <div class="card-front">
                            <img src="imagens/cards/estoque_2.jpg"  alt="Card 2">
                            <h3>VW Golf GTI 2020/21</h3>
                        </div>
                        <div class="card-back">
                            <p>Descrição detalhada do conteúdo da foto 2.</p>
                        </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-inner">
                        <div class="card-front">
                            <img src="imagem3.jpg" alt="Card 3">
                            <h3>Título da Imagem 3</h3>
                        </div>
                        <div class="card-back">
                            <p>Descrição detalhada do conteúdo da foto 3.</p>
                        </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-inner">
                            <div class="card-front">
                                <img src="imagem4.jpg" alt="Card 4">
                                <h3>Título da Imagem 4</h3>
                            </div>
                            <div class="card-back">
                                <p>Descrição detalhada do conteúdo da foto 4.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-inner">
                        <div class="card-front">
                            <img src="imagem5.jpg" alt="Card 5">
                            <h3>Título da Imagem 5</h3>
                        </div>
                        <div class="card-back">
                            <p>Descrição detalhada do conteúdo da foto 5.</p>
                        </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-inner">
                        <div class="card-front">
                            <img src="imagem6.jpg" alt="Card 6">
                            <h3>Título da Imagem 6</h3>
                        </div>
                        <div class="card-back">
                            <p>Descrição detalhada do conteúdo da foto 6.</p>
                        </div>
                        </div>
                    </div>
                </div>
                <!-- fim cards de estoque -->
            </section>
            <!-- fim da seçao estoque -->
            <footer id="rodape" class="rodape">
                <p>Desenvolvido por Marcelo Tosta de Santana - 2025</p>
            </footer>
        </section>


    </body>
</html>