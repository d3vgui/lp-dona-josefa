<?php
include "settings/settings.php";
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo htmlspecialchars($description); ?>">
    <link rel="stylesheet" href="../<?php echo $url?>/styles/settings.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../<?php echo $url ?>/styles/index.css">
    <link rel="stylesheet" href="../<?php echo $url ?>/styles/media.css">
    <link rel="icon" type="image/x-icon" href="../<?php echo $url?>/images/favicon.ico">
    <script src="../<?php echo $url ?>/js/menu.js" defer></script>
    <script src="../<?php echo $url ?>/js/header.js" defer></script>
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
                <li><a title="Haga clic aquí para ser dirigido al principio" href="#section-one">COMENZAR</a></li>
                <li><a title="Haga clic aquí para ser dirigido a la sección ACERCA DE" href="#section-two">EN</a></li>
                <li><a title="Haga clic aquí para ser dirigido a la sesión de TEQUILA" href="#section-three">EL TEQUILA</a></li>
                <li><a title="Haga clic aquí para ser dirigido a la sesión de COCTELERÍA Y RECETAS" href="#section-four">MIXOLOGÍA Y RECETAS</a></li>
                <li><a title="Haga clic aquí para ser dirigido a la sección DONDE COMPRAR" href="#section-five">DÓNDE COMPRAR</a></li>
                <li><a title="Haga clic aquí para ser dirigido a la sesión de CONTACTO" href="#section-six">CONTACTO</a></li>
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
                            <p>Un tequila premium que honra la historia, la tradición y la pasión de México. Destilado artesanalmente en Jalisco, cada sorbo es un tributo a la independencia y al espíritu inquebrantable de un pueblo.</p>
                            <div class="btn-contact-us">
                                <a title="Haga clic aquí para contactarnos vía WhatsApp" href="<?php echo $info[1]['link_wpp'] ?>">CONTÁCTENOS <i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                            <div class="arrow">
                                <a title="Haga clic aquí para ser dirigido a la sección Acerca de" href="#section-two"><i class="fa-solid fa-angles-down"></i></a>
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
                            <h2>LA HISTORIA DE DOÑA JOSEFA Y SU INFLUENCIA</h2>
                            <p>Inspirada en la valentía y determinación de Doña Josefa Ortiz de Domínguez, una figura clave en la independencia de México, nuestra marca rinde homenaje a su legado de lucha y libertad. Al igual que ella desafió el destino y encendió la chispa de la independencia, nuestro tequila encarna ese mismo espíritu indomable, transformando cada sorbo en un tributo a la historia y la tradición mexicana.</p>
                            <h3>CULTURA Y TRADICIÓN DEL TEQUILA</h3>
                            <p>El tequila es mucho más que una bebida; es un símbolo de identidad y orgullo para México. En Doña Josefa, seguimos las técnicas ancestrales de producción, respetando cada etapa del proceso para garantizar un tequila auténtico y excepcional. Desde la cuidadosa selección de los agaves en las tierras fértiles de Jalisco hasta la destilación artesanal, cada botella cuenta una historia de pasión y dedicación.</p>
                            <h3>CONEXIÓN CON LA INDEPENDENCIA DE MÉXICO</h3>
                            <p>Así como la independencia marcó un nuevo comienzo para la nación, Doña Josefa representa la unión entre el pasado y el presente. Nuestro tequila no solo honra la historia de una mujer visionaria, sino que también invita a quienes lo degustan a celebrar la libertad, la cultura y la riqueza de México. Cada gota es un recordatorio del coraje y la perseverancia que forjaron el destino de un país.</p>
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
                            <h2>LA ESENCIA DEL TEQUILA ARTESANAL</h2>
                            <p>Doña Josefa es un tributo al auténtico tequila mexicano. Elaborado con agave azul de Jalisco, cada botella refleja tradición, calidad y pasión. Nuestro proceso de producción sigue métodos artesanales que garantizan una bebida de excelencia, conservando la pureza y riqueza de sus sabores. Desde la selección cuidadosa de los agaves hasta su maduración en barricas de roble, cada etapa está pensada para honrar la herencia mexicana.</p>
                            <h3>NUESTROS PRODUCTOS</h3>
                            <div class="accordion-item">
                                <div class="accordion-header">TEQUILA BLANCO <i class="fa-solid fa-angle-right icon"></i></div>
                                <div class="accordion-content">
                                    <p>El Tequila Blanco es la esencia pura del agave, sin proceso de añejamiento, lo que resalta su frescura y notas naturales.</p>
                                    <p><strong>Notas de sabor:</strong> Cítricos, hierbas frescas y un sutil dulzor del agave.</p>
                                    <p><strong>Ideal para:</strong> Cócteles como Margarita, Paloma o simplemente con lima y sal.</p>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header">TEQUILA REPOSADO <i class="fa-solid fa-angle-right icon"></i></div>
                                <div class="accordion-content">
                                    <p>Reposado durante seis meses en barricas de roble, logra un balance entre la frescura del agave y los sutiles matices de la madera.</p>
                                    <p><strong>Notas de sabor:</strong> Toques de vainilla, caramelo y especias suaves.</p>
                                    <p><strong>Ideal para:</strong> Disfrutar solo, en las rocas o en cócteles sofisticados.</p>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header">TEQUILA AÑEJO <i class="fa-solid fa-angle-right icon"></i></div>
                                <div class="accordion-content">
                                    <p>Envejecido por más de un año en barricas de roble, desarrolla un sabor profundo y elegante, ideal para los paladares más exigentes.</p>
                                    <p><strong>Notas de sabor:</strong> Chocolate amargo, roble tostado y frutos secos.</p>
                                    <p><strong>Ideal para:</strong> Degustar solo en una copa de cristal, apreciando cada matiz de su complejidad.</p>
                                </div>
                            </div>
                            <h3>PROCESO ARTESANAL</h3>
                            <p>Cada botella de Doña Josefa es el resultado de un meticuloso proceso artesanal. La cosecha manual del agave azul en los campos de Jalisco asegura la selección de las mejores plantas. Posteriormente, los corazones de agave son cocidos lentamente en hornos de piedra, extrayendo los azúcares esenciales para su fermentación</p>
                            <p>La doble destilación en alambiques de cobre refina el tequila, resaltando su pureza y carácter único.</p>
                            <p>Tras la destilación, cada tequila sigue un proceso de maduración específico que le otorga su personalidad única. El Blanco mantiene la frescura vibrante del agave, el Reposado adquiere suavidad y notas amaderadas, mientras que el Añejo desarrolla una complejidad profunda con sabores sofisticados.</p>
                            <p>Doña Josefa es más que una bebida, es una experiencia que rinde homenaje a la historia y la cultura de México. Celebra la esencia de nuestro país en cada sorbo y sumérgete en la auténtica tradición del tequila artesanal.</p>
                            <div class="btn-contact-us">
                                <a title="Haga clic aquí para contactarnos vía WhatsApp" href="<?php echo $info[1]['link_wpp'] ?>">DESCUBRE MÁS <i class="fa-solid fa-arrow-right"></i></a>
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
                    <div class="col-lg-5 col-md-12 col-sm-12 col-xs-12">
                        <div class="content-left">
                            <img class="img-responsive" src="../<?php echo $url ?>/images/shot-tequila.png" alt="Tequila" title="Tequila">
                        </div>
                    </div>
                    <div class="col-lg-1 col-md-12 col-sm-12 col-xs-12"></div>
                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                        <div class="content-right">
                            <h2>EL ARTE DE CREAR CÓCTELES CON DONÃ JOSEFA</h2>
                            <p>Descubre nuevas formas de disfrutar la auténtica tradición mexicana con nuestra selección especial de cócteles. Doña Josefa trae la esencia de la independencia de México a tu copa, transformando cada sorbo en una experiencia sofisticada e inolvidable.</p>
                            <p>Ya sea para celebrar momentos especiales o simplemente explorar sabores auténticos, nuestras recetas han sido creadas para resaltar las notas distintivas de nuestros tequilas Blanco, Reposado y Añejo.</p>
                            <h3>RECETAS EXCLUSIVAS</h3>
                            <div class="accordion-item">
                                <div class="accordion-header">LA INSURGENTE <i class="fa-solid fa-angle-right icon"></i></div>
                                <div class="accordion-content">
                                    <p>Ingredientes:</p>
                                    <ul>
                                        <li>50ml de Tequila Doña Josefa Blanco</li>
                                        <li>25ml de jugo de limón</li>
                                        <li>15ml de licor de naranja</li>
                                        <li>10ml de jarabe de agave</li>
                                        <li>Hielo</li>
                                        <li>Sal para el borde del vaso</li>
                                        <li>Rodaja de limón para decorar</li>
                                    </ul>
                                    <p>Modo de preparación:</p>
                                    <ol>
                                        <li>Pasa una rodaja de limón por el borde de un vaso y sumérgelo en sal.</li>
                                        <li>En una coctelera, agrega el tequila, jugo de limón, licor de naranja, jarabe de agave y hielo.</li>
                                        <li>Agita bien y cuela en el vaso preparado.</li>
                                        <li>Decora con una rodaja de limón y disfruta.</li>
                                    </ol>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header">PÁSION MEXICANA <i class="fa-solid fa-angle-right icon"></i></div>
                                <div class="accordion-content">
                                    <p>Ingredientes:</p>
                                    <ul>
                                        <li>50ml de Tequila Doña Josefa Reposado</li>
                                        <li>30ml de jugo de maracuyá</li>
                                        <li>20ml de miel de agave</li>
                                        <li>15ml de licor de cassis</li>
                                        <li>Hielo</li>
                                        <li>Pimienta rosa para decorar</li>
                                    </ul>
                                    <p>Modo de preparación:</p>
                                    <ol>
                                        <li>En una coctelera, mezcla todos los ingredientes con hielo.</li>
                                        <li>Agita bien y cuela en un vaso bajo con hielo.</li>
                                        <li>Finaliza con unas cuantas pimientas rosas por encima.</li>
                                        <li>Sirve y disfruta la combinación perfecta entre dulzura e intensidad del tequila.</li>
                                    </ol>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header">ESPÍRITU DE JALISCO <i class="fa-solid fa-angle-right icon"></i></div>
                                <div class="accordion-content">
                                    <p>Ingredientes:</p>
                                    <ul>
                                        <li>50ml de Tequila Doña Josefa Añejo</li>
                                        <li>10ml de licor de café</li>
                                        <li>10ml de vermut dulce</li>
                                        <li>15ml de licor de cassis</li>
                                        <li>Hielo</li>
                                        <li>Cáscara de naranja para aromatizar</li>
                                    </ul>
                                    <p>Modo de preparación:</p>
                                    <ol>
                                        <li>Mezcla todos los ingredientes en un vaso mezclador con hielo.</li>
                                        <li>Remueve suavemente por unos 15 segundos.</li>
                                        <li>Cuela en un vaso bajo con hielo.</li>
                                        <li>Finaliza con una cáscara de naranja torcida sobre la bebida para liberar sus aromas.</li>
                                    </ol>
                                </div>
                            </div>
                            <h3>MARIDAJES PERFECTOS</h3>
                            <p>Para una experiencia completa, prueba nuestros tequilas con platos que realcen sus sabores. Quesos curados, mariscos y chocolates oscuros son algunas sugerencias para crear combinaciones sorprendentes.</p>
                            <p>Explora el auténtico arte de la mixología y lleva el espíritu de México a tu copa con Doña Josefa.</p>
                            <div class="btn-contact-us">
                                <a title="Haga clic aquí para contactarnos vía WhatsApp" href="<?php echo $info[1]['link_wpp'] ?>">HAGA SUS PREGUNTAS <i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="section-five">
            <div class="container">
                <div class="text">
                    <h2>¿DÓNDE COMPRAR?</h2>
                    <p>Descubre dónde encontrar Doña Josefa y disfruta del auténtico sabor del tequila artesanal.</p>
                </div>
                <div class="content-sec-five">
                    <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                        <div class="content-left">
                            <h3>DISTRIBUIDORES Y REVENDEDORES</h3>
                            <p>Nuestra red de distribuidores seleccionados garantiza que encuentres Doña Josefa en los mejores establecimientos. Explora nuestra lista de revendedores oficiales y adquiere tu tequila con confianza.</p>
                                <a title="Haga clic aquí para acceder al revendedor" href="/">DISTRIBUIDOR <i class="fa-solid fa-arrow-right-long"></i></a>
                                <a title="Haga clic aquí para acceder al revendedor" href="/">DISTRIBUIDOR <i class="fa-solid fa-arrow-right-long"></i></a>
                                <a title="Haga clic aquí para acceder al revendedor" href="/">DISTRIBUIDOR <i class="fa-solid fa-arrow-right-long"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                        <div class="content-mid">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3659.9279700321445!2d-46.53307582384921!3d-23.463062557989844!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cef543634eb5a9%3A0x1e9f1a64f74abdfb!2sGuarulhos%20Office%20Tower%20Empreendimento%20Im!5e0!3m2!1spt-BR!2sbr!4v1740247984973!5m2!1spt-BR!2sbr" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                        <div class="content-right">
                            <h3>COMPRA ONLINE</h3>
                            <p>Prefieres la comodidad de comprar desde casa? Visita nuestra tienda en línea y recibe Doña Josefa directamente en tu puerta. Haz clic en el enlace y elige tu botella favorita.</p>
                            <a title="Haz clic aquí para acceder a nuestra tienda" href="/">VISITA NUESTRA TIENDA <i class="fa-solid fa-arrow-right-long"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="section-six">
            <div class="container">
                <div class="content-sec-six">
                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                        <div class="content-left">
                                <h2>CONTACTO Y ALIANZAS</h2>
                                <p>¿Quieres formar parte de la historia de Doña Josefa? Estamos abiertos a nuevas oportunidades de negocio y colaboraciones.</p>
                                <h3>DISTRIBUIDORES Y REVENDEDORES</h3>
                                <p>Si deseas ofrecer Doña Josefa en tu establecimiento, completa nuestro formulario y nos pondremos en contacto contigo. Únete a nuestra red de distribuidores y lleva el auténtico sabor del tequila artesanal a más personas.</p>
                        </div>
                    </div>
                    <div class="col-lg-1 col-md-12 col-sm-12 col-xs-12"></div>
                    <div class="col-lg-5 col-md-12 col-sm-12 col-xs-12">
                        <div class="content-right">
                            <div class="content-form">
                                <form id="contactForm">
                                    <label for="name">Nombre</label>
                                    <input type="text" id="name" name="name" required placeholder="Introduce tu nombre">
                                    <label for="phone">Teléfono:</label>
                                    <input type="tel" id="phone" name="phone" pattern="\(\d{2}\) \d{5}-\d{4}" placeholder="(99) 99999-9999" required>
                                    <label for="message">Mensaje:</label>
                                    <textarea id="message" name="message" rows="4" required placeholder="Escribe tu mensaje aquí"></textarea>
                                    <div class="btn-submit">
                                        <button type="submit">PARA ENVIAR</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>
    <footer>
        <div class="container">
            <div class="content-footer">
                <div class="col-lg-4 col-md-2 col-sm-12 col-xs-12">
                    <div class="logo-footer">
                        <a href="#section-one" title="Clique aqui para voltar ao início"><img class="img-responsive"
                                src="../<?php echo $url ?>/images/logo-branco.png" alt="Logo" title="Clique aqui para voltar ao início"></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 list-1">
                    <h3>NAVEGAR POR</h3>
                    <ul>
                        <li><a title="Haga clic aquí para ser dirigido al principio" href="#section-one"><i
                                    class="fa-solid fa-chevron-right"></i>COMENZAR</a></li>
                        <li><a title="Haga clic aquí para ser dirigido a la sección ACERCA DE" href="#section-two"><i
                                    class="fa-solid fa-chevron-right"></i>EN</a></li>
                        <li><a title="Haga clic aquí para ser dirigido a la sección ACERCA DE" href="#section-three"><i
                                    class="fa-solid fa-chevron-right"></i>EL TEQUILA</a></li>
                        <li><a title="Haga clic aquí para ser dirigido a la sesión de COCTELERÍA Y RECETAS" href="#section-four"><i
                                    class="fa-solid fa-chevron-right"></i>MIXOLOGÍA Y RECETAS</a></li>
                        <li><a title="Haga clic aquí para ser dirigido a la sesión de COCTELERÍA Y RECETAS" href="#section-five"><i
                                    class="fa-solid fa-chevron-right"></i>DÓNDE COMPRAR</a></li>
                        <li><a title="Haga clic aquí para ser dirigido a la sesión de CONTACTO" href="#section-six"><i
                                    class="fa-solid fa-chevron-right"></i>CONTACTO</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 list-1">
                    <h3>CONTACTO</h3>
                    <ul>
                        <li><a title="Haga clic aquí para contactarnos vía WhatsApp"
                                href="<?php echo $info[1]['link_wpp'] ?>"><i
                                    class="fa-brands fa-whatsapp"></i><?php echo $info[1]['whatsapp'] ?></a></li>
                        <li><a title="Haga clic aquí para ser dirigido a Instagram"
                                href="<?php echo $instagram ?>"><i
                                    class="fa-brands fa-instagram"></i><?php echo $user_instagram ?></a></li>
                        <li><a title="Haga clic aquí para enviar un correo electrónico"
                                href="mailto:<?php echo $emailContato ?>"><i
                                    class="fa-solid fa-envelope"></i><?php echo $emailContato ?></a></li>
                    </ul>
                </div>
            </div>
        </div>
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