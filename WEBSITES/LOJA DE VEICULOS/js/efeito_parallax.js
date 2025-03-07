document.addEventListener("scroll", function () {
    // Identifica as camadas a aplicar o efeito parallax
    const camadasComParallax = document.querySelectorAll(".camada_parallax");

    camadasComParallax.forEach((layer) => {
        // Captura o atributo velocidade e tamanho defindido na camada envolvida e aplica no cálculo do script
        const velocidade = parseFloat(layer.getAttribute("velocidade"));
        const taxa_crescimento = parseFloat(layer.getAttribute("taxa_crescimento"));
        // Ajusta a posição e o tamanho da camada envolvida com base na movimentação da barra de roalgem da página
        const posicaoVertical = window.scrollY * velocidade;
        const tamanhoImagem = 1 + window.scrollY * taxa_crescimento;

        // Aplica o efeito parallax na camada envolvida
        layer.style.transform = `translateY(${posicaoVertical}px)`;
        layer.style.transform = `scale(${tamanhoImagem})`;
    });
});
