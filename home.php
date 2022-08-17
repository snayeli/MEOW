<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MEOW GAMIMG</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    
<!-- header section starts  -->

<header class="header">

    <a href="#" class="logo">
        <img src="images/stray.jpg" alt="">
    </a>

    <nav class="navbar">
        <a href="#home">INICIO</a>
        <a href="#about">NOSOTROS</a>
        <a href="#menu">OFERTAS</a>
        <a href="productos.html">PRODUCTOS</a>
        <a href="#review">REVIEW</a>
        <a href="#contact">CONTACTOS</a>
        <a href="#blogs">BLOGS</a>
    </nav>

    <div class="icons">
        <div class="fas fa-search" id="search-btn"></div>
        <div class="fas fa-shopping-cart" id="cart-btn"></div>
        <div class="fas fa-bars" id="menu-btn"></div>
    </div>

    <div class="search-form">
        <input type="search" id="search-box" placeholder="search here...">
        <label for="search-box" class="fas fa-search"></label>
    </div>

    <div class="cart-items-container">
        <div class="cart-item">
            <span class="fas fa-times"></span>
            <img src="images/cart-item-1.png" alt="">
            <div class="content">
                <h3>cart item 01</h3>
                <div class="price">$15.99/-</div>
            </div>
        </div>
        <div class="cart-item">
            <span class="fas fa-times"></span>
            <img src="images/cart-item-2.png" alt="">
            <div class="content">
                <h3>cart item 02</h3>
                <div class="price">$15.99/-</div>
            </div>
        </div>
        <div class="cart-item">
            <span class="fas fa-times"></span>
            <img src="images/cart-item-3.png" alt="">
            <div class="content">
                <h3>cart item 03</h3>
                <div class="price">$15.99/-</div>
            </div>
        </div>
        <div class="cart-item">
            <span class="fas fa-times"></span>
            <img src="images/cart-item-4.png" alt="">
            <div class="content">
                <h3>cart item 04</h3>
                <div class="price">$15.99/-</div>
            </div>
        </div>
        <a href="#" class="btn">checkout now</a>
    </div>

</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

    <div class="content">
        <h3>STAY GAMING A PRECIOS ACCESIBLES!</h3>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Placeat labore, sint cupiditate distinctio tempora reiciendis.</p>
        <a href="#" class="btn">CONOCER MÁS</a>
    </div>

</section>

<!-- home section ends -->

<!-- about section starts  -->

<section class="about" id="about">

    <h1 class="heading"> <span>SOBRE</span> NOSOTROS </h1>

    <div class="row">

        <div class="image">
            <img src="images/acesor.jpg" alt="">
        </div>

        <div class="content">
            <h3>Tienda de computo y Pc gaming</h3>
            <p>Somos una empresa que nace con la finalidad de satisfacer las necesidades en el mundo Gamer y Pc de alto rendimiento para ello, hemos elaborado una plataforma virtual donde podrás enterarte de los nuevos productos que ingresan al mercado, así como realizar compras en línea con total garantía y confianza.</p>
            <a href="#" class="btn">leer más</a>
        </div>

    </div>

</section>

<!-- about section ends -->

<!-- menu section starts  -->

<section class="menu" id="menu">

    <h1 class="heading"> NUESTRAS <span>OFERTAS</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="images/cpu-intel-celeron.png" alt="">
            <h3>CPU INTEL CELERON G5905 1200 3.5 GHZ 2 CORE DECIMA GENERACION</h3>
            <div class="price">$ 809.00 <span>1,120.00</span></div>
            <a href="#" class="btn">agregar a carrito</a>
        </div>

        <div class="box">
            <img src="images/procesador-intel-core-i3.png" alt="">
            <h3>PROCESADOR INTEL CORE I3-10100 S-1200 10A GEN 3.6 GHZ 6MB 4 CORES GRAFICOS UHD 630 CON VENTILADOR COMPUTO BASICO ITP</h3>
            <div class="price">$2840.00 <span>3600.00</span></div>
            <a href="#" class="btn">agregar a carrito</a>
        </div>

        <div class="box">
            <img src="images/CP-GIGABYTE.png" alt="">
            <h3>SSD Gigabyte GP-GSTFS31240GNTD, 240GB, SATA III, 2.5'', 7mm</h3>
            <div class="price">$480.00 <span>537.99</span></div>
            <a href="#" class="btn">agregar a carrito</a>
        </div>

        <div class="box">
            <img src="images/zotac.png" alt="">
            <h3>Tarjeta De Video Zotac Nvidia Geforce Rtx 3070Ti Trinity 8Gb Gddr6X Zt-A30710D-10P</h3>
            <div class="price">$14,214.69 <span>16,723.16</span></div>
            <a href="#" class="btn">agregar a carrito</a>
        </div>

        <div class="box">
            <img src="images/CP-ASUS.png" alt="">
            <h3>Tarjeta de Video ASUS Dual AMD Radeon RX 6700 XT, 12GB 192-bit GDDR6, PCI Express 4.0</h3>
            <div class="price">$13,339.00 <span>15,239.99</span></div>
            <a href="#" class="btn">agregar a carrito</a>
        </div>

        <div class="box">
            <img src="images/CP-MSI.png" alt="">
            <h3>Tarjeta de Video MSI NVIDIA GeForce GT 730, 2GB 64-bit GDDR3, PCI Express 2.0</h3>
            <div class="price">$1,279.00 <span>2,417.99</span></div>
            <a href="#" class="btn">agregar a carrito</a>
        </div>

    </div>

</section>

<!-- menu section ends -->

<section class="products" id="products">

    <h1 class="heading"> LO MAS <span>COMPRADO</span> </h1>

    <div class="box-container">

        <div class="box">
            <div class="icons">
                <a href="#" class="fas fa-shopping-cart"></a>
            </div>
            <div class="image">
                <img src="images/PC1.png" alt="">
            </div>
            <div class="content">
                <h3>CPU GAMER CORE I5-10400 6/12 NÚCLEOS GTX-1650 4GB DDR6 16GB DDR4 SSD</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <div class="price">$18,300.00 <span>$22,100.00</span></div>
            </div>
        </div>

        <div class="box">
            <div class="icons">
                <a href="#" class="fas fa-shopping-cart"></a>
            </div>
            <div class="image">
                <img src="images/PC2.png" alt="">
            </div>
            <div class="content">
                <h3>PC GAMER CORE I5 6/12 NUCLEOS NVIDIA RTX-3060 12GB GDDR6 16GB DDR4 SSD 1TB</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <div class="price">$26,200.00 <span>$30,500.00</span></div>
            </div>
        </div>

        <div class="box">
            <div class="icons">
                <a href="#" class="fas fa-shopping-cart"></a>
            </div>
            <div class="image">
                <img src="images/PC3.png" alt="">
            </div>
            <div class="content">
                <h3>Koblenz ER-2550 - Regulador de voltaje automático, 2500 VA, 6 contactos</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <div class="price">$1,035.00</div>
            </div>
        </div>

    </div>

</section>

<!-- review section starts  -->

<section class="review" id="review">

    <h1 class="heading"> CRITICAS DE NUESTROS <span>COMPRADORES</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="images/quote-img.png" alt="" class="quote">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi nulla sit libero nemo fuga sequi nobis? Necessitatibus aut laborum, nisi quas eaque laudantium consequuntur iste ex aliquam minus vel? Nemo.</p>
            <img src="images/pic-1.png" class="user" alt="">
            <h3>john deo</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
        </div>

        <div class="box">
            <img src="images/quote-img.png" alt="" class="quote">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi nulla sit libero nemo fuga sequi nobis? Necessitatibus aut laborum, nisi quas eaque laudantium consequuntur iste ex aliquam minus vel? Nemo.</p>
            <img src="images/pic-2.png" class="user" alt="">
            <h3>john deo</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
        </div>
        
        <div class="box">
            <img src="images/quote-img.png" alt="" class="quote">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi nulla sit libero nemo fuga sequi nobis? Necessitatibus aut laborum, nisi quas eaque laudantium consequuntur iste ex aliquam minus vel? Nemo.</p>
            <img src="images/pic-3.png" class="user" alt="">
            <h3>john deo</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
        </div>

    </div>

</section>

<!-- review section ends -->

<!-- contact section starts  -->

<section class="contact" id="contact">

    <h1 class="heading"> <span>CONTACTANOS</span></h1>

    <div class="row">

        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3693.5340989977194!2d-100.93133748599004!3d22.21980538536542!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842aa1955610cd69%3A0xad63c85c0cedf28d!2sUniversidad%20Tecnol%C3%B3gica%20de%20San%20Luis%20Potos%C3%AD%20(UTSLP)!5e0!3m2!1ses!2smx!4v1660594490178!5m2!1ses!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        <form action="">
            <h3>REGISTRATE</h3>
            <div class="inputBox">
                <span class="fas fa-user"></span>
                <input type="text" placeholder="nombre">
            </div>
            <div class="inputBox">
                <span class="fas fa-envelope"></span>
                <input type="email" placeholder="email">
            </div>
            <div class="inputBox">
                <span class="fas fa-phone"></span>
                <input type="number" placeholder="numero">
            </div>
            <input type="submit" value="contactanos ahora" class="btn">
        </form>

    </div>

</section>

<!-- contact section ends -->

<!-- blogs section starts  -->

<section class="blogs" id="blogs">

    <h1 class="heading"> ALGUNOS <span>BLOGS</span> </h1>

    <div class="box-container">

        <div class="box">
            <div class="image">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/Ab-U7TCtSyk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="content">
                <a href="#" class="title">PC GAMER RYZEN 5 3600</a>
                <span>DETALLES:</span>
                <p>OFERTA! NUEVA COMPUTADORA GAMER AMD RYZEN 5 3600 TURBO 4.2GHZ GAMA ALTA 6 NUCLEOS 12 HILOS VÍDEO NVIDIA GEFORCE GTX-1650 4GB GDDR6 MONITOR 21.5 LED FULL HD DISCO DURO 1TB MEMORIA DDR4 8GB 2400MHZ HASTA 32GB FUENTE DE PODER GAMER 500W 80 PLUS, TECLADO Y MOUSE GAMER CON LUZ</p>
                <a href="https://youtu.be/MJcEF9aXu24" class="btn">VER COMPLETO</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/pc-gamer-core-i5.jpg" alt="">
            </div>
            <div class="content">
                <a href="#" class="title">PC GAMER CORE I5</a>
                <span>DETALLES:</span>
                <p>SÚPER COMPUTADORA GAMER INTEL CORE I5 10400, TURBO 4.3GHZ X 12 NÚCLEOS LÓGICOS, IDEAL PARA GAMING Y STREAMING PROFESIONAL, EDICIÓN DE VÍDEO 4K, ARQUITECTURA, RENDER, MODELADO 3D, Y LOS PROGRAMAS MAS EXIGENTES, NUEVO VÍDEO NVIDIA GEFORCE RTX-3060 12GB G-DDR6 VR 1TB MEMORIA DDR4 16GB</p>
                <a href="https://youtu.be/JychI4i31j8" class="btn">VER COMPLETO</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/pc-gamer-ryzen.jpg" alt="">
            </div>
            <div class="content">
                <a href="#" class="title">PC GAMER RYZEN 7-5800X</a>
                <span>DETALLES:</span>
                <p>RYZEN-7-5800X-RTX-8GB-G-DDR6 ULTRA COMPUTADORA GAMER MASTER AMD RYZEN 7-5800X TURBO 4.7GHZ X 8/16 NÚCLEOS ENFRIAMIENTO LIQUIDO IDEAL PARA AUTO OVERCLOCK, PARA GAMING EDICIÓN DE VÍDEO 4K Y 8K, ARQUITECTURA, RENDER 3D, ECT. VÍDEO NVIDIA GEFORCE RTX-3060 TI 8GB G-DDR6 VR 2TB MEMORIA DDR4 16GB HASTA 64GB</p>
                <a href="https://youtu.be/HtjtAuvpnPc" class="btn">VER COMPLETO</a>
            </div>
        </div>

    </div>

</section>

<!-- blogs section ends -->

<!-- footer section starts  -->

<section class="footer">

    <div class="share">
        <a href="https://www.facebook.com/genshinimpact.es" class="fab fa-facebook-f"></a>
        <a href="https://twitter.com/genshinimpactes" class="fab fa-twitter"></a>
        <a href="https://www.instagram.com/genshinimpact/?hl=es" class="fab fa-instagram"></a>
    </div>

    <div class="links">
        <a href="#">Inicio</a>
        <a href="#">Nosotros</a>
        <a href="#">Ofertas</a>
        <a href="#">Productos</a>
        <a href="#">Review</a>
        <a href="#">Contactanos</a>
        <a href="#">Blogs</a>
    </div>

    <div class="credit">CREADO POR <span> SHARON JUAREZ </span> | TODOS LOS DERECHOS RESERVADOS</div>

</section>

<!-- footer section ends -->

















<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>	