

const form = document.querySelector('#myForm');

form.addEventListener('submit', (event) => {
    event.preventDefault();

    const inputs = document.querySelectorAll('input');

    // Conta quantos elementos estão selecionados
    let selecionados = 0;
    for (let i = 0; i < inputs.length; i++) {
        if (inputs[i].checked) {
            selecionados += 20.60;

            if (selecionados == 200) {
                selecionados += -30;
            }

            if (selecionados == 190) {
                selecionados += -3;
            }

            if (selecionados == 207) {
                selecionados += -3;
            }

            if (selecionados >= 208) {
                selecionados += -3;
            }

            if (selecionados == 340) {
                selecionados += -60;
            }

            if (selecionados == 297) {
                selecionados += -3;
            }

            if (selecionados == 311) {
                selecionados += -3;
            }

            if (selecionados == 325) {
                selecionados += -3;
            }

            if (selecionados == 339) {
                selecionados += -3;
            }
            if (selecionados >= 340) {
                selecionados += -3;
            }



        }

    }

    // Envia o número de elementos selecionados para o WhatsApp
    const mensagem = `${selecionados},00`;
    const name = document.querySelector('#nome').value;
    const phone = 5511911761633;
    const products = document.querySelectorAll('input[name="imagens"]:checked');
    const termos = document.querySelector('#termos').value;
    const pagamento = document.querySelector('#pagamento').value;


    const productsString = Array.from(products).map(p => p.value).join(', ');

    const termosString = Array.from(termos).map(p => p.value).join(', ');


    // chame a função para enviar a mensagem pelo WhatsApp
    sendToWhatsApp(name, phone, productsString, termos, pagamento, mensagem);
});



function sendToWhatsApp(name, phone, products, termos, pagamento, mensagem) {
    const url = `https://wa.me/${phone}?text=${encodeURIComponent(`Olá, meu nome é ${name},forma de pagamento ${pagamento},total-${mensagem} - ${products}`)}`;

    window.open(url);
}

