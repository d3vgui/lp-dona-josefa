<?php
include "settings/settings.php";
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo htmlspecialchars($description); ?>">
    <link rel="stylesheet" href="../<?php echo $url ?>/styles/settings.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../<?php echo $url ?>/styles/index.css">
    <script src="../<?php echo $url ?>/js/menu.js" defer></script>
    <title><?php echo $nome_empresa . ' - ' . $slogan ?></title>
</head>

<body>
    <header>
        <a id="logo" title="Logo" href="#section-one"><img title="Logo" class="img-responsive" src="../<?php echo $url ?><?php echo $logo_cliente ?>" alt="Logo"></a>
        <nav id="nav">
            <button aria-label="Abrir Menu" id="btn-mobile" aria-haspopup="true" aria-controls="menu" aria-expanded="false">
                <span id="hamburger"></span>
            </button>
            <ul id="menu" role="menu">
                <li><a href="#section-one">COMENZAR</a></li>
                <li><a href="#section-two">EN</a></li>
                <li><a href="#section-three">EL TEQUILA</a></li>
                <li><a href="#section-four">MIXOLOGÍA Y RECETAS</a></li>
                <li><a href="#section-five">DÓNDE COMPRAR</a></li>
                <li><a href="#section-six">CONTACTO</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section id="section-one">
            <div class="container">
                <div class="content-sec-one">
                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                        <div class="content-left">
                            <h1>EL TEQUILA BLANCO</h1>
                            <h2>EL TEQUILA DE UNA REVOLUCIÓN</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis tempore repudiandae corrupti sunt libero aut corporis repellendus, suscipit facilis in optio, necessitatibus officiis ipsa officia esse molestias totam iusto? Sapiente?</p>
                            <div class="btn-contact-us">
                                <a title="Haga clic aquí para contactarnos vía WhatsApp" href="<?php echo $info[1]['link_wpp'] ?>">CONTÁCTENOS <i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                            <div class="arrow">
                                <i class="fa-solid fa-angles-down"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                        <div class="content-right">

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="section-two">
            <div class="container">
                <div class="content-sec-two">
                    <div class="col-lg-5 col-md-12 col-sm-12 col-xs-12">
                        <div class="content-left">
                            <img class="img-responsive" src="../<?php echo $url ?>/images/logo-1-branco.png" alt="Logo" title="Logo">
                        </div>
                    </div>
                    <div class="col-lg-1 col-md-12 col-sm-12 col-xs-12"></div>
                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                        <div class="content-right">
                            <h2>NUESTRA HISTORIA</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic mollitia sapiente incidunt beatae porro, dicta impedit in ut, repellat et ducimus sit maiores excepturi nemo similique eligendi nihil, recusandae ad vitae? Doloribus reiciendis expedita qui nisi eum aliquid quo temporibus velit harum numquam corrupti libero fugit molestias accusamus tempora nesciunt soluta atque quisquam, dolor dicta. Nesciunt necessitatibus accusantium ab. Voluptatum laudantium tempore minus accusamus omnis fuga placeat sunt excepturi explicabo numquam nobis neque reprehenderit mollitia, aliquam quaerat, sapiente at sed rem illo. Doloremque nulla blanditiis repellat doloribus maiores reprehenderit vel mollitia at rerum animi est nisi dolores ex dolor praesentium, tempora aliquam. Enim ipsam aliquam hic repellendus esse laborum mollitia a non incidunt quidem minima sequi exercitationem ad nulla et cupiditate quasi, ullam dolorum, nesciunt aliquid recusandae vel cum dicta consectetur! Doloribus voluptate rerum unde. Quam ipsam iusto quisquam repellendus.</p>
                            <div class="btn-know-more">
                                <a title="Haga clic aquí para contactarnos vía WhatsApp" href="<?php echo $info[1]['link_wpp'] ?>">PONTE EN CONTACTO <i class="fa-brands fa-whatsapp"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="section-three">
            <div class="container">
                <div class="content-sec-three">
                    <div class="col-lg-7 col-md-12 col-sm-12 col-xs-12">
                        <div class="content-left">
                            <h2>TEQUILA: TRADICIÓN, SABOR Y ARTE EN CADA GOTA</h2>
                            <p>Cada botella de tequila lleva consigo la riqueza del terruño de Jalisco, donde campos de agave azul se extienden bajo el abrasador sol mexicano. Cultivada con dedicación y cosechada en el momento perfecto, la planta da lugar a una bebida que combina tradición, sabor y autenticidad.</p>
                            <p>El proceso de producción artesanal comienza con la cuidadosa selección de los mejores agaves, cocidos lentamente en hornos de piedra para extraer sus azúcares naturales. La fermentación se realiza de forma controlada, respetando el tiempo necesario para desarrollar sabores únicos, y la destilación en pequeños lotes garantiza un tequila puro y refinado.</p>
                            <h3>NUESTROS PRODUCTOS</h3>
                            <div class="accordion-item">
                                <div class="accordion-header">TEQUILA BLANCO <i class="fa-solid fa-angle-right icon"></i></div>
                                <div class="accordion-content">
                                    <p>Puro y cristalino, Blanco es la expresión más auténtica del agave azul. Sin crianza en barrica, mantiene su frescura y notas vibrantes de cítricos y hierbas frescas. Ideal para cócteles o para disfrutar solo, destacando su suavidad y carácter vegetal.</p>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header">TEQUILA REPOSADO <i class="fa-solid fa-angle-right icon"></i></div>
                                <div class="accordion-content">
                                    <p>Reposado durante al menos seis meses en barricas de roble, Reposado logra un perfecto equilibrio entre el dulzor del agave y los sutiles toques de vainilla y caramelo. Su sofisticado sabor es perfecto para quienes buscan una experiencia más compleja, ya sea en bebidas refinadas o puras, en copa de degustación.</p>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header">TEQUILA AÑEJO <i class="fa-solid fa-angle-right icon"></i></div>
                                <div class="accordion-content">
                                    <p>Envejecido durante al menos un año, Añejo es la encarnación de la madurez y la sofisticación. Con profundas notas de chocolate, especias y madera tostada, ofrece una experiencia rica y atractiva. Es mejor disfrutarlo lentamente, como un buen licor añejo, permitiendo que cada capa de sabor se revele en el paladar.</p>
                                </div>
                            </div>
                            <h3>APRECIAR CADA DETALLE</h3>
                            <p>Degustar tequila va más allá del gusto: es una experiencia sensorial completa. Antes de degustar, sostenga la copa y observe su color, especialmente en las versiones Reposado y Añejo, cuyos tonos dorados revelan su tiempo de maduración. Luego, acércalo a tu nariz e identifica los sutiles aromas de agave, notas cítricas, vainilla o roble, según la variedad.</p>
                            <p>En el primer sorbo, deja que el líquido viaje lentamente por tu paladar, percibiendo su textura y complejidad de sabores. Blanco ofrece frescura y vivacidad, perfecto para cócteles o para disfrutar con un toque de limón y sal. Reposado, más equilibrado, marida bien con quesos curados y frutos secos. Añejo, con cuerpo y sofisticado, combina bien con postres a base de chocolate o incluso con un buen cigarro.</p>
                            <p>Independientemente de la forma de consumo, cada trago de tequila lleva consigo la autenticidad de México, transformando cada momento en una celebración de la cultura y la tradición.</p>
                            <div class="btn-contact-us">
                                <a title="Haga clic aquí para contactarnos vía WhatsApp" href="<?php echo $info[1]['link_wpp']?>">DESCUBRE MÁS <i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-1 col-md-12 col-sm-12 col-xs-12"></div>
                    <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                        <div class="content-right">
                            <img class="img-responsive" src="../<?php echo $url ?>/images/tequila.png" alt="Tequila" title="Tequila">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="section-four">
            <div class="container">
                <div class="content-sec-four">
                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                        <div class="content-left">
                            <img class="img-responsive" src="../<?php echo $url?>/images/shot.png" alt="Tequila" title="Tequila">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                        <div class="content-right">
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>
    <footer>

    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script>
        document.querySelectorAll('.accordion-header').forEach(header => {
            header.addEventListener('click', () => {
                const content = header.nextElementSibling;
                const isOpen = content.style.maxHeight;
                
                document.querySelectorAll('.accordion-content').forEach(item => {
                    item.style.maxHeight = null;
                    item.style.paddingTop = '0';
                    item.style.paddingBottom = '0';
                });
                document.querySelectorAll('.accordion-header').forEach(item => {
                    item.classList.remove('active');
                });
                
                if (!isOpen) {
                    content.style.maxHeight = content.scrollHeight + 'px';
                    content.style.paddingTop = '10px';
                    content.style.paddingBottom = '10px';
                    header.classList.add('active');
                }
            });
        });
    </script>
</body>

</html>