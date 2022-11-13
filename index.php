<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>SHERBET</title>
        <link rel="shortcut icon" href="./svg/logo_sherbet_03.svg" type="image/svg">
        <!--Bootstrap-->
        <link rel="stylesheet" href="./css/bootstrap.min.css">
        <!--Mis Estilos-->
        <link rel="stylesheet" href="./css/colores.css">
        <link rel="stylesheet" href="./css/carousel.css">
        <link rel="stylesheet" href="./css/scroll.css">
        <link rel="stylesheet" href="./css/font.css">
    </head>
    <body>
        <?php
            $file = file_get_contents('./json/sherbet_data.json');
            $data = json_decode($file);
        ?>
        <!--Menu-->
        <header>
            <nav class="navbar navbar-expand-lg bg-light fixed-top">
                <div class="container-fluid">
                    <a href="#" class="navbar-brand">SHERBET</a>
                    <!--Boton desplegable-->
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <!--Elementos del Menu-->
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a href="#carousel" class="nav-link active" aria-current="page">INICIO</a>
                            </li>
                            <li class="nav-item">
                                <a href="#quien-somos" class="nav-link">QUIEN SOMOS</a>
                            </li>
                            <li class="nav-item">
                                <a href="#productos" class="nav-link">PRODUCTOS</a>
                            </li>
                            <li class="nav-item">
                                <a href="#contacto" class="nav-link">CONTACTO</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <!--Carrusel de Imagenes-->
        <main class="main">
            <div id="carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <?php
                        # Creamos de manera autamatica las imagenes del carousel
                        for ($i = 0; $i < count($data->carousel); $i++) {
                            $cad = "<div class=\"carousel-item ";
                            if ($i == 0){
                                $cad = $cad . "active";
                            }
                            echo "{$cad}\" style=\"background-image: url('./images/{$data->carousel[$i]->img}');\"></div>";
                        }
                    ?>
                </div>
            </div>
        </main>
        <!--Contenido-->
        <div class="wrapper">
            <!--Contenedor de quien somos-->
            <div class="container-fluid pt-5 b-color-9 carousel-somos" id="quien-somos">
                <div class="container">
                    <div class="row justify-content-md-center">
                        <div class="col-12 col-md-6 col-lg-8">
                            <div class="card">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img src="./images/img_somos.jpg" class="img-fluid rounded-start" alt="quien somos">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title">Quiénes Somos</h5>
                                            <p class="card-text">Sherbet es una marca de reposteria fría con flora oaxaqueña, específicamente de helados, nieves y paletas de sabores finos y peculiares.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-8">
                            <div class="card">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img src="./images/img_somos_02.jpg" class="img-fluid rounded-start" alt="quien somos">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <p class="card-text">Al usar flora de huertos locales fortalecemos y movilizamos cadenas productivas de insumos que antes no representaban un ingreso significativo para las familias involucradas.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="row text-md-center text-capitalize">
                                <div class="row-md-4">
                                    <img src="" alt="" class="img-resposive rounded" width="300" height="300"> 
                                    <p>Al usar flora de huertos locales fortalecemos y movilizamos cadenas productivas de insumos que antes no representaban un ingreso significativo para las familias involucradas</p>
                                </div>
                                <div class="row-md-4">
                                    <img src="" alt="" class="img-resposive rounded" width="300" height="300"> 
                                    <p>Nuestra producción artesanal está a cargo de mujeres de comunidades Oaxaqueñas. Generando estos nuevos empleos visibilizamos y empoderamos a dicho grupo.</p>
                                </div>
                                <div class="row-md-4">
                                    <img src="" alt="" class="img-resposive rounded" width="300" height="300"> 
                                    <p>Servimos nuestros helados en jícaras de calabaza, para disminuir el uso de envases desechables, y al mismo tiempo consolidar cadenas productivas de valor con los artesanos Oaxaqueños que las elaboran.</p>
                                </div>
                            </div>
                        </div>

                    </div>
                    <br><br>
                </div>
            </div>
            <!--Contenedor de productos-->
            <div class="container-fluid pt5 b-color-1" id="productos">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-12 text-center pt-5">
                            <h1>PRODUCTOS</h1>
                        </div>
                        <!--Variedad de productos-->
                        <div class="col-md-12 text-center pt-5">
                            <h2>Variedad de Productos</h2>
                            <hr>
                            <!-- Presentaciones de nuestros productos-->
                            <div class="row g-2 justify-content-center">
                                <?php 
                                    for ($i = 0; $i < count($data->productos); $i++) {
                                        echo "<div class=\"col-12 col-md-6 col-lg-3\">";
                                        echo "<div class=\"card\">";
                                        echo "<div class=\"card-body\">";
                                        echo "<h5 class=\"card-title\">{$data->productos[$i]->nombre}</h5></div>";
                                        echo "<img src=\"./images/{$data->productos[$i]->img}\" class=\"card-img-bottom\" alt=\"{$data->productos[$i]->nombre}\"></div></div>";
                                    }
                                ?>
                            </div>
                        </div>
                        <!--Sabores-->
                        <!--div class="col-md-12 text-center pt-5">
                            <h1>SABORES</h1>
                        </div-->
                        <!--Helados-->
                        <div class="col-md-12 text-center pt-5">
                            <h2>SABORES DE HELADOS</h2>
                            <hr>
                            <div class="row g-2 justify-content-center text-light">
                                <?php 
                                    $helados = $data->sabores->helados;
                                    for ($i = 0; $i < count($helados); $i++) {
                                        echo "<div class=\"col-12 col-md-6 col-lg-3\">";
                                        echo "<div class=\"card border border-0 {$helados[$i]->color}\" style=\"height: 30rem;\">";
                                        echo "<img src=\"./images/{$helados[$i]->img}\" alt=\"{$helados[$i]->nombre}\" class=\"img-responsive rounded-circle mx-auto pt-2\" width=\"300\" height=\"300\">";
                                        echo "<div class=\"card-body\">";
                                        echo "<h5 class=\"card-title\">{$helados[$i]->nombre}</h5>";
                                        echo "<p class=\"card-text\">{$helados[$i]->descripcion}</p>";
                                        echo "</div></div></div>";
                                    }
                                ?>
                            </div>
                        </div>
                        <!--Nieves-->
                        <div class="col-md-12 text-center pt-5">
                            <h2>SABORES DE NIEVES</h2>
                            <hr>
                            <div class="row g-2 justify-content-center text-light">
                                <?php 
                                    $nieves = $data->sabores->nieves;
                                    for ($i = 0; $i < count($nieves); $i++) {
                                        echo "<div class=\"col-12 col-md-6 col-lg-3\">";
                                        echo "<div class=\"card border border-0 {$nieves[$i]->color}\" style=\"height: 30rem;\">";
                                        echo "<img src=\"./images/{$nieves[$i]->img}\" alt=\"{$nieves[$i]->nombre}\" class=\"img-responsive rounded-circle mx-auto pt-2\" width=\"300\" height=\"300\">";
                                        echo "<div class=\"card-body\">";
                                        echo "<h5 class=\"card-title\">{$nieves[$i]->nombre}</h5>";
                                        echo "<p class=\"card-text\">{$nieves[$i]->descripcion}</p>";
                                        echo "</div></div></div>";
                                    }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
            </div>
        </div>
        <!--Footer-->
        <footer class="b-color-9 text-white pt-5">
            <div class="container" id="contacto">
                <div class="row">
                    <!--Logo-->
                    <div class="col-md-5">
                        <img src="./svg/logo_sherbet_02.svg" alt="" class="w-100">
                    </div>
                    <!--Contacto-->
                    <div class="col-md-5">
                        <h3>Contacto</h3>
                        <hr>
                        <ul class="list-unstyled gap-3">
                            <!--li class="row p-1">
                                <div class="col-md-6">TELÉFONO</div>
                                <div class="col-md-6"></div>
                            </li-->
                            <li class="row p-1">
                                <div class="col-md-6">EMAIL</div>
                                <div class="col-md-6">gelato@sherbet.com.mx</div>
                            </li>
                            <li class="row p-1">
                                <div class="col-md-6">DIRECCIÓN</div>
                                <div class="col-md-6">
                                    <a href="https://goo.gl/maps/jVnHVWFWxmoKLPcr5" class="link-light text-decoration-none">
                                        TINOCO Y PALACIOS ESQ. M.BRAVO 313. CENTRO HISTÓRICO, OAXACA
                                    </a>
                                </div>
                            </li>
                            <li class="row p-1">
                                <div class="col-md-6">HORARIO</div>
                                <div class="col-md-6 row">
                                    <div class="col-md-12">
                                        LUNES - SÁBADO
                                    </div>
                                    <div class="col-md-12">
                                        11 AM - 7 PM
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!--Redes Sociales-->
                    <div class="col-md-2">
                        <h3>Redes</h3>
                        <hr>
                        <ul class="list-unstyled gap-3">
                            <li class="row p-2">
                                <div class="col-md-12">
                                    <!--Instagram acceso directo-->
                                    <a href="https://www.instagram.com/sherbet_gelato/" class="link-light text-decoration-none">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                                            <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
                                        </svg>
                                    </a>
                                </div>
                            </li>
                            <li class="row p-2">
                                <div class="col-md-12">
                                    <!--Facebook acceso directo-->
                                    <a href="https://www.facebook.com/profile.php?id=100075911692121" class="link-light text-decoration-none">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                                            <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                                        </svg>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--Copyring-->
            <div class="py-3 bg-light text-black">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <small>&copy; 2021-2022 SHERBET GELATO</small>
                        </div>
                        <!--Politica de la empresa-->
                        <div class="col-md-6">
                            <SMAll></SMAll>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <!--Script de Bootstrap-->
        <script src="./js/bootstrap.min.js"></script>
    </body>
</html>