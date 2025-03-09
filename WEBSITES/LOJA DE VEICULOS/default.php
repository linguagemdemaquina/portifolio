<!-- 
    Autor: Marcelo Tosta de Santana - Fullstack Dev 
    Portifolio - linguagemdemaquina.com.br
    Recursos : HTML, CSS, JavaScript, PHP, MySql
    Data do Projeto : 06/03/2025
    Github: https://github.com/linguagemdemaquina/portifolio/
-->
<!doctype html>
<html lang="pt">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="cache-control" content="no-cache"/>
        <title>Portifólio - linguagemdemaquina.com.br'</title>
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
            <div id="carro" class="camada_parallax" velocidade="0.2" taxa_crescimento="0.0020" style="background-image: url(imagens/carro.png); top:50vh;"></div>
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
                <div id="texto_estoque" class="texto_estoque">Veículos em destaque</div>
                <!-- início cards de estoque -->
                <div class="card-container">
                    <div class="card">
                        <div class="card-inner">
                            <div class="card-front">
                                <img src="imagens/cards/estoque_1.jpg" alt="Card 1">
                                <h3>Ford Territory Titanium 2023/24</h3>
                            </div>
                            <div class="card-back">
                                Km : 22.318
                                <br>
                                <br>
                                Airbags (frontais, laterais e cortina), controle eletrônico de estabilidade e tração, freios ABS / EBD, faróis e lanternas em LED, painel de instrumentos digital e central multimídia de 10,1 pol., ar-condicionado dual zone, carregador de celular por indução, teto solar e bancos em couro.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-inner">
                        <div class="card-front">
                            <img src="imagens/cards/estoque_2.jpg"  alt="Card 2">
                            <h3>Volkswagen Golf TSI 2019/20</h3>
                        </div>
                        <div class="card-back">
                        Km : 54.825
                        <br>
                        <br>
                        Teto solar panorâmico, controle adaptativo de velocidade e distância (ACC), sistema park assist 2.0, faróis e lanternas traseiras em LED, sistema de proteção ativa dos ocupantes (Pro-Active), sistema de controle do farol alto, sensor de fadiga
                        </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-inner">
                        <div class="card-front">
                            <img src="imagens/cards/estoque_3.jpg" alt="Card 3">
                            <h3>Honda HRV EXL AT 2019/20</h3>
                        </div>
                        <div class="card-back">
                        Km : 76.237
                        <br>
                        <br>
                        Ar-condicionado automático, bancos em couro, controle automático de velocidade, freio de estacionamento elétrico, retrovisores elétricos e rebatíveis, rodas de liga leve, volante multifuncional com paddle shifts, airbags (frontais, laterais e cortina), controle de estabilidade e tração, freios ABS / EBD.
                        </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-inner">
                            <div class="card-front">
                                <img src="imagens/cards/estoque_4.jpg" alt="Card 4">
                                <h3>Chevrolet Cruze LTZ 2020/20</h3>
                            </div>
                            <div class="card-back">
                            Km : 46.717
                            <br>
                            <br>
                            Partida remota, ar-condicionado automático, assistente de estacionamento, chave presencial, airbags de cortina, frontais e laterais, alerta de colisão frontal e mudança de faixa, alerta de ponto cego, controle de estabilidade e tração, freios ABS/EBD.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-inner">
                        <div class="card-front">
                            <img src="imagens/cards/estoque_5.jpg" alt="Card 5">
                            <h3>Peugeot 2008 Style 2024/24</h3>
                        </div>
                        <div class="card-back">
                        Km : 18.269
                        <br>
                        <br>
                        Multimídia com Apple CarPlay e Android Auto, computador de bordo piloto automático, rodas de liga leve, seis airbags, sensor de estacionamento traseiro e câmera,teto solar panorâmico, sistema de som premium, bancos em couro. 
                        </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-inner">
                        <div class="card-front">
                            <img src="imagens/cards/estoque_6.jpg" alt="Card 6">
                            <h3>BMW Série 3 2020/21</h3>
                        </div>
                        <div class="card-back">
                        Km : 38.612
                        <br>
                        <br>
                        Teto Solar, display head-up (projeção de informações no para-brisa), controle por gestos, faróis adaptativos, monitoramento de ponto cego, alerta de faixa e ponto cego, sensores de estacionamento, controle de cruzeiro adaptativo, rodas de 19 polegadas, freios ABS/EBD, suspensão esportiva e kit aerodinâmico.
                        </div>
                        </div>
                    </div>
                </div>
                <!-- fim cards de estoque -->
                 <div id="conteiner_botao_ver_estoque" class="conteiner_botao_ver_estoque">
                    <button id="botao_ver_estoque" class="botao_ver_estoque">Ver todo o estoque</button>
                    <!-- início do modal -->
                    <div id="modal" class="modal">
                        <div id="titulo_modal_estoque" class="titulo_modal_estoque">
                            Estoque completo
                            <br>
                        </div>
                        <div class="modal-content">
                            <button id="closeModal" class="close-button">X</button>
                            <div class="image-container">
                                <img src="imagens/cards/estoque_1.jpg" alt="Imagem 1" />
                                <img src="imagens/cards/estoque_2.jpg" alt="Imagem 2" />
                                <img src="imagens/cards/estoque_3.jpg" alt="Imagem 3" />
                                <img src="imagens/cards/estoque_4.jpg" alt="Imagem 4" />
                                <img src="imagens/cards/estoque_5.jpg" alt="Imagem 5" />
                                <img src="imagens/cards/estoque_6.jpg" alt="Imagem 6" />
                            </div>
                            </div>
                        </div>
                        <script src="js/modal.js?<?php echo date("Y-m-d H:i:s"); ?>"></script>
                    <!-- fim do modal -->
                 </div>
            </section>
            <!-- fim da seçao estoque -->
            <footer id="rodape" class="rodape">
                <p>Desenvolvido por Marcelo Tosta de Santana - 2025</p>
            </footer>
        </section>


    </body>
</html>