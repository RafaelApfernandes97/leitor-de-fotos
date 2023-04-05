// Scroll Menu
/*$(function () {
    $(window).on("scroll", function () {
        if ($(window).scrollTop() > 50) {
            $(".menu-nav").addClass("ocultar-menu");

        }
        else {
            $(".menu-nav").removeClass("ocultar-menu")
        }
    })
})*/


// Ocultar Foto não encontrada 
function erro(elemento) {
    elemento.className += 'ocultar-menu';

}


// Não deixar copiar a foto 
window.onload = function () {
    // document.getElementById("img").oncontextmenu = function()



    document.oncontextmenu = function () {
        alert("Divulgação Proibida Ballet em Foco.")
        return false;
    }
}


/* Inicio do carrinho de compras*/

//opacidade da imagem quando selecionada
function toggleCheckbox(img) {
    var checkbox = img.nextElementSibling;
    if (checkbox.checked) {
      checkbox.checked = false;
      img.style = "opacity: 10";
      removerDoCarrinho(img);
    } else {
      checkbox.checked = true;
      img.style = "opacity: 0.5";
      adicionarNoCarrinho(img);
    }
  }
  
  function ativarCarrinho() {
    var carrinho = document.getElementById('carrinho')
    carrinho.style.display = "block";
  }
  
  function adicionarNoCarrinho(img) {
    img.style = "opacity: 0.5";
  
    var carrinho = document.getElementById("carrinho");
    var item = document.createElement("li");
    item.style.marginBottom = "5px";
    item.innerHTML = "<img src='" + img.src + "'>" + img.alt + "<button class='btnCarrinho' onclick='removerItem(this)'><i class='bi bi-trash item-remove-icon'></button>";
    carrinho.appendChild(item);
  
    // Salvar carrinho de compras na sessão
    var carrinhoSalvo = JSON.parse(localStorage.getItem("carrinho")) || [];
    carrinhoSalvo.push(img.src);
    localStorage.setItem("carrinho", JSON.stringify(carrinhoSalvo));
    calculaPreco();
  }

  function removerDoCarrinho(img) {
    var carrinho = document.getElementById("carrinho");
    var items = carrinho.getElementsByTagName("li");
    for (var i = 0; i < items.length; i++) {
        var itemImg = items[i].getElementsByTagName("img")[0];
        if (itemImg.src === img.src) {
            carrinho.removeChild(items[i]);
            break;
        }
    }
}
  
  
function removerItem(button) {
    var item = button.parentNode;
    var itemImg = item.getElementsByTagName("img")[0];
    var checkbox = itemImg.nextElementSibling;
    checkbox.checked = false;
    item.parentNode.removeChild(item);
    item.style= "opacity : 1";
    // Remover item do carrinho salvo na sessão
    var carrinhoSalvo = JSON.parse(localStorage.getItem("carrinho")) || [];
    var index = carrinhoSalvo.indexOf(itemImg.src);
    if (index !== -1) {
        carrinhoSalvo.splice(index, 1);
    }
    localStorage.setItem("carrinho", JSON.stringify(carrinhoSalvo));
    calculaPreco();
}
  
  // Função para carregar o carrinho de compras salvo na sessão
  function carregarCarrinhoSalvo() {
    var carrinhoSalvo = JSON.parse(localStorage.getItem("carrinho")) || [];
    var carrinho = document.getElementById("carrinho");
    for (var i = 0; i < carrinhoSalvo.length; i++) {
      var item = document.createElement("li");
      item.style.marginBottom = "10px";
      item.innerHTML = "<img src='" + carrinhoSalvo[i] + "'><button onclick='removerItem(this)'><i class='bi bi-trash item-remove-icon'></button>";
      
      carrinho.appendChild(item);
    }
  }
  
  /* Fim do carrinho de compras*/
/* Fim do carrinho de compras*/


/*Função para atualizar o preço de acordo com o que está no carrinho de compras*/
function calculaPreco() {
    var carrinhoSalvo = JSON.parse(localStorage.getItem("carrinho")) || [];
    var pPreco = document.getElementById('count');
    let precoImagem = 20;

    let qtdImagens = carrinhoSalvo.length;
    
    if(qtdImagens>=10 && qtdImagens<=19){
        precoImagem = 17.50;
    }
    else if(qtdImagens>=20 ){
        precoImagem = 15;
    }

    let precoTotal = precoImagem * qtdImagens;
    pPreco.innerHTML = `${precoTotal.toFixed(2)} `;
    
}
// Função para enviar mensagem no whatsapp
function finalizarCompra(event,nmr_coreografia) {
    event.preventDefault();

    var pPreco = document.getElementById('count').textContent;
    const name = document.querySelector('#nome').value;
    const pagamento = document.querySelector('#pagamento').value;
    var num_coreografia = nmr_coreografia;
    var itens = carrinho.getElementsByTagName("img");
    var mensagem = "";
    for (var i = 0; i < itens.length; i++) {
        mensagem += " " + itens[i].src.split('/').pop() + ',';
    }
    var numero = "5511953553207";
    var url = "https://wa.me/" + numero + "?text=" + encodeURI('Olá, meu nome é '+ name + '. Escolhi as fotos ' + mensagem +'da coreografia ' + num_coreografia +' no valor total de R$'+ pPreco + 'e a forma de pagamento escolhida foi: ' + pagamento);
    window.open(url);
    window.location.href = "index.php";
}

function encerrarSessao() {
    localStorage.removeItem("carrinho");
    window.location.href = "index.php";
}






