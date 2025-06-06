document.addEventListener("DOMContentLoaded", function () {
    const botoesComprar = document.querySelectorAll(".btn-comprar");

    botoesComprar.forEach((botao) => {
        botao.addEventListener("click", function () {
            const card = botao.closest(".card-produto");
            const nome = card.querySelector("h3").innerText;
            const descricao = card.querySelector(".descricao")?.innerText || "";
            const precoTexto = card.querySelector("p:last-of-type").innerText;
            const imagem = card.querySelector("img").getAttribute("src");

            const preco = parseFloat(precoTexto.replace("R$", "").replace(",", "."));

            fetch("api/adicionar_ao_carrinho.php", {
                method: "POST",
                body: JSON.stringify({nome, descricao, preco, imagem}),
                headers: {"Content-Type": "application/json"},
            })
                .then((res) => res.json())
                .then((data) => {
                    if (data.sucesso) {
                        document.getElementById("contador-carrinho").innerText = data.total_itens;
                    } else {
                        alert("Erro ao adicionar ao carrinho");
                    }
                });
        });
    });
});