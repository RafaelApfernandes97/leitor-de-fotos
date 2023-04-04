<?php
(isset($_GET['coreografia'])) ? $num_coreografia = $_GET['coreografia'] : null;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Ballet em Foco</title>

    <link rel="stylesheet" href="css/style.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>



    <script src="js/script.js"></script>

    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script>
        $(function() {
            $("#header").load("header.html");
            $("#footer").load("footer.html");
        });
    </script>


</head>

<body class="body">

    <header class="menu-nav">

        <div class="container">
            <nav class="navbar navbar-nav-scroll menu fixed-top ">
                <div class="container-fluid ">
                    <a class="  navbar-brand" style="color: rgb(255, 255, 255);" href="index.html"><img style="width: 170px;" src="/leitor/img/logo-menu.png" alt=""></a>
                    <button style="border: none; background-color: black;" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar"><svg xmlns="http://www.w3.org/2000/svg" color="white" width="40" height="40" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
                        </svg></button>

                    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                        <div class="offcanvas-header" style="background-color: black;">
                            <a class="  navbar-brand" style="color: rgb(255, 255, 255);" href="#"><img style="width: 170px;" src="/leitor/img/logo-menu.png" alt=""></a>
                            <button style="border: none; background-color: black;" type="button" class="btn btn-light" data-bs-dismiss="offcanvas" aria-label="Close"><svg xmlns="http://www.w3.org/2000/svg" color="white" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                                    <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z" />
                                </svg></button>

                        </div>
                        <div class="offcanvas-body ">
                            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="index.html">Inicio</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Contato</a>
                                </li>
                                <!-- <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Dropdown
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li>
                      <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                  </ul>
                </li> -->
                            </ul>

                        </div>
                        <img src="img/Preços.png" alt="">
                    </div>
                </div>
            </nav>
        </div>

    </header>

    <main>
        <script>
            function erro(img) {
                img.parentElement.classList.add('ocultar-menu');
            }
        </script>


        <form id="myForm">




            <?php
            // Caminho para a pasta que contém as imagens
            // Caminho para a pasta que contém as imagens
            $dir = 'COREOGRAFIAS/COREOGRAFIA ' . "$num_coreografia" . '/';
           
            // Ler os arquivos na pasta e gerar o código HTML para cada imagem
            $files = scandir($dir);
            
            //echo '<img src="COREOGRAFIA 0' . $num_coreografia . '/IMG_1996.JPG" alt="Coreografia">';
            foreach ($files as $file) {
                if ($file !== '.' && $file !== '..' && is_file($dir . $file) && preg_match('/\.(JPG|jpg|jpeg|png)$/', $file)) {
                    echo "<div class='lista-img'> <img src='$dir/$file' alt='$file' id='img' class='clicavel img watermark' onerror='erro(this);' onclick='toggleCheckbox(this); countSelectedInputs(); contador();'  style='opacity: 1;'> <input type='checkbox' id='meuInput' name='imagens' class='checkbox' value='$file' style='display:none;'><div class='marca-dagua'> <img class='marca_dagua' src='img/2.png' alt=>
                    
                     </div>          </div>";
                    
                }
            }
            ?>


            <div class="container form_pedido">



                <h1 class="">Finalize o seu pedido</h1>

                <input class="form-control mb-2" type="text" placeholder="Nome" aria-label="default input " id="nome" name="nome">

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
            function contador() {
                const contadores = document.querySelectorAll('input[name="imagens"]:checked');
                const contadoresString = Array.from(contadores).map(p => p.value).join(', ');

                localStorage.setItem("contador", JSON.stringify(contadoresString));
                
            }
        </script>






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

                        if (selecionados == 200) {
                            selecionados += -25;
                        }

                        if (selecionados == 195) {
                            selecionados += -2.5;
                        }

                        if (selecionados == 212.5) {
                            selecionados += -2.5;
                        }

                        if (selecionados == 230) {
                            selecionados += -2.5;
                        }

                        if (selecionados == 247.5) {
                            selecionados += -2.5;
                        }

                        if (selecionados == 265) {
                            selecionados += -2.5;
                        }

                        if (selecionados == 282.5) {
                            selecionados += -2.5;
                        }

                        if (selecionados == 300) {
                            selecionados += -2.5;
                        }

                        if (selecionados == 317.5) {
                            selecionados += -2.5;
                        }

                        if (selecionados == 335) {
                            selecionados += -2.5;
                        }

                        if (selecionados == 352.5) {
                            selecionados += -52.5;
                        }

                        if (selecionados == 320) {
                            selecionados += -4.9;
                        }

                        if (selecionados == 335.1) {
                            selecionados += -5.1;
                        }

                        if (selecionados == 350) {
                            selecionados += -5;
                        }

                        if (selecionados >= 360) {
                            selecionados += -5;
                        }

                        



                    }

                }


                // Envia o número de elementos selecionados para o WhatsApp
                const valor = `${selecionados}`;
                const name = document.querySelector('#nome').value;
                const phone = 5511986879746;
                const products = document.querySelectorAll('input[name="imagens"]:checked');
                const termos = document.querySelector('#termos').value;
                const pagamento = document.querySelector('#pagamento').value;


                const productsString = Array.from(products).map(p => p.value).join(', ');

                const termosString = Array.from(termos).map(p => p.value).join(', ');


                // chame a função para enviar a mensagem pelo WhatsApp
                sendToWhatsApp(name, phone, productsString, termos, );
            });
        </script>

        <script>

        </script>



        <script>
            function sendToWhatsApp(name, phone, products, termos, ) {
                const url = `https://wa.me/${phone}?text=${encodeURIComponent(`Olá, meu nome é *${name}*, Fotos escolhidas: *${products}*. `)}`;

                window.open(url);
            }
        </script>




    </main>

    <footer>
        <div class="footer">
            <div class="titulo_footer">
                <img style="width: 170px;" src="/leitor/img/logo-menu.png" alt="">

            </div>

            <div class="link_footer">
                <a class="link-footer" href="https://wa.me/5511986879746"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                        <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z" />
                    </svg></a>
                <a class="link-footer" href="https://www.instagram.com/balletemfoco/"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                        <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                    </svg></a>

            </div>
        </div>
    </footer>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>