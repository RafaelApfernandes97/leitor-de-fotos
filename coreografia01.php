<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leitor de Fotos</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"
        integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://code.jquery.com/jquery-3.6.3.min.js"
        integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/css/style.css">

    <script src="js/script.js"></script>

    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script>
        $(function () {
            $("#header").load("header.html");
            $("#footer").load("footer.html");
        });
    </script>


</head>

<body class="body">

    <div id="header"></div>

    <main>
        <script>
            function erro(img) {
                img.parentElement.classList.add('ocultar-menu');
            }
        </script>


        <form id="myForm">



            <div class="lista-img ">
                <?php
                // Caminho para a pasta que contém as imagens
                $dir = 'img/';

                // Ler os arquivos na pasta e gerar o código HTML para cada imagem
                $files = scandir($dir);
                foreach ($files as $file) {
                    if ($file !== '.' && $file !== '..' && is_file($dir . $file) && preg_match('/\.(jpg|jpeg|png)$/', $file)) {
                        echo "<img src='$dir$file' alt='$file' id='img' class='img watermark' onerror='erro(this);' onclick='toggleCheckbox(this); countSelectedInputs();' style='opacity: 1;'>"; 
                        echo "<input type='checkbox' name='imagens' class='checkbox' value='$file' style='display:none;'>";
                    }
                }
                ?>

                
                <div class="marca-dagua"> <img class="marca_dagua" src="img/2.png" alt=""> </div>
            </div>

            <div class="container form_pedido">



                <h1 class="">Finalize o seu pedido</h1>

                <input class="form-control mb-2" type="text" placeholder="Nome" aria-label="default input " id="nome"
                    name="nome">

                <div>
                    <p class="total_pedido" id="count"></p>
                </div>

                <select id="pagamento" class="form-select form-select-sm" aria-label=".form-select-sm ">
                    <option id="pagamento" selected>Forma de pagamento</option>
                    <option id="pagamento" value="Cartão">Cartão</option>
                    <option id="pagamento" value="Pix">Pix</option>
                    <option id="pagamento" value="Dinheiro">Dinheiro</option>
                </select>

                <div class="mb-2 mt-2">
                    <button type="submit" class="btn btn-warning">Enviar Pedido</button>
                </div>

                <div class="form-check mb-2 mt-2">
                    <input class="form-check-input" type="checkbox" value="Aceito os termos" id="termos" name="termos">
                    <label class="form-check-label" for="defaultCheck1" style="font-size: 10px;">
                        Estou ciente de que as imagens feitas neste evento, são de propriedade e de uso livre do mesmo,
                        sendo assim podem ser divulgadas nas redes sociais oficiais do festival e do Ballet em Foco
                        Studio Fotográfico.
                    </label>
                </div>



            </div>





        </form>






        <script>
            function countSelectedInputs() {
                const inputs = document.querySelectorAll('.checkbox');
                let count = 0;




                for (let i = 0; i < inputs.length; i++) {
                    if (inputs[i].checked) {
                        count += 20.00;

                        if (count == 200) {
                            count += -25;
                        }

                        if (count == 195) {
                            count += -2.5;
                        }

                        if (count == 212.5) {
                            count += -2.5;
                        }

                        if (count == 230) {
                            count += -2.5;
                        }

                        if (count == 247.5) {
                            count += -2.5;
                        }

                        if (count == 265) {
                            count += -2.5;
                        }

                        if (count == 282.5) {
                            count += -2.5;
                        }

                        if (count == 300) {
                            count += -2.5;
                        }

                        if (count == 317.5) {
                            count += -2.5;
                        }

                        if (count == 335) {
                            count += -2.5;
                        }

                        if (count == 352.5) {
                            count += -52.5;
                        }

                        if (count == 320) {
                            count += -4.9;
                        }

                        if (count == 335.1) {
                            count += -5.1;
                        }

                        if (count == 350) {
                            count += -5;
                        }

                        if (count >= 360) {
                            count += -5;
                        }




                    }

                }


                document.getElementById('count').innerHTML = `Total do pedido: ${count} `;


            }

            setInterval(countSelectedInputs, 100);
        </script>

        <script>
            const form = document.querySelector('#myForm');

            form.addEventListener('submit', (event) => {
                event.preventDefault();

                const inputs = document.querySelectorAll('input');

                // Conta quantos elementos estão selecionados
                let selecionados = 0;
                for (let i = 0; i < inputs.length; i++) {
                    if (inputs[i].checked) {
                        selecionados += 20.00;

                        if (count == 200) {
                            count += -25;
                        }

                        if (count == 195) {
                            count += -2.5;
                        }

                        if (count == 212.5) {
                            count += -2.5;
                        }

                        if (count == 230) {
                            count += -2.5;
                        }

                        if (count == 247.5) {
                            count += -2.5;
                        }

                        if (count == 265) {
                            count += -2.5;
                        }

                        if (count == 282.5) {
                            count += -2.5;
                        }

                        if (count == 300) {
                            count += -2.5;
                        }

                        if (count == 317.5) {
                            count += -2.5;
                        }

                        if (count == 335) {
                            count += -2.5;
                        }

                        if (count == 352.5) {
                            count += -52.5;
                        }

                        if (count == 320) {
                            count += -4.9;
                        }

                        if (count == 335.1) {
                            count += -5.1;
                        }

                        if (count == 350) {
                            count += -5;
                        }

                        if (count >= 360) {
                            count += -5;
                        }




                    }

                }

                // Envia o número de elementos selecionados para o WhatsApp
                const valor = `${selecionados}`;
                const name = document.querySelector('#nome').value;
                const phone = 5511911761633;
                const products = document.querySelectorAll('input[name="imagens"]:checked');
                const termos = document.querySelector('#termos').value;
                const pagamento = document.querySelector('#pagamento').value;


                const productsString = Array.from(products).map(p => p.value).join(', ');

                const termosString = Array.from(termos).map(p => p.value).join(', ');


                // chame a função para enviar a mensagem pelo WhatsApp
                sendToWhatsApp(name, phone, productsString, termos, pagamento, valor);
            });

        </script>

        <script>
            function sendToWhatsApp(name, phone, products, termos, pagamento, valor) {
                const url = `https://wa.me/${phone}?text=${encodeURIComponent(`Olá, meu nome é *${name}*, Fotos escolhidas: *${products}*. Total: *${valor}* - Forma pagamento: *${pagamento}* `)}`;

                window.open(url);
            }

        </script>


    </main>

    <div id="footer"></div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>

</body>

</html>