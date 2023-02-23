// Scroll Menu
$(function () {
    $(window).on("scroll", function () {
        if ($(window).scrollTop() > 50) {
            $(".menu-nav").addClass("ocultar-menu");

        }
        else {
            $(".menu-nav").removeClass("ocultar-menu")
        }
    })
})


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










