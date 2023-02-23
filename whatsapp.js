const form = document.querySelector('#myForm');

form.addEventListener('submit', (event) => {
    event.preventDefault();

    const name = document.querySelector('#nome').value;
    const phone = document.querySelector('#telefone').value;
    const products = document.querySelectorAll('input[name="imagens"]:checked');


    const productsString = Array.from(products).map(p => p.value).join(', ');

    // chame a função para enviar a mensagem pelo WhatsApp
    sendToWhatsApp(name, phone, productsString);
});

function sendToWhatsApp(name, phone, products) {
    const url = `https://wa.me/${phone}?text=${encodeURIComponent(`Olá, meu nome é ${name} e gostaria de enviar a seguinte mensagem:. Produtos selecionados: ${products}`)}`;

    window.open(url);
}