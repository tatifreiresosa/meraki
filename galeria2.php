<!DOCTYPE html>
<html>
<head>
    <title>Galería</title>
    <?php include('estilos.php') ?>
</head>

<body>
    <?php include 'header2.php';?>
        <div  class="container" >

        <div class="col-sm-3 col-md-2 flot-izq" id="galeria-div1">
            <div class="contenedorizq">
                <div class="titulo-izquierdo">
                    <p>enterate mas</p>
                </div>
                <div class="texto-izquierdo">
                    <p>Conocé quiénes se sumaron al cuidado de la naturaleza y cómo lo hacen.</p>
                    <img width=200px height="200px" class="img-responsive" src="grafica/MERAKI-2-baja.jpg">
                </div>
                <div class="colaboradores">
                    <a href="colaboradores2.php" target="_self">hacé click acá</a>
                </div>
            </div>
        </div>
        <div class="col-sm-8 col-md-8 container">
        <h1 class="titulo-galeria">Galeria</h1>
             <div class="tz-gallery">
                    <div class="row">
                                <div class="col-sm-6 col-md-4">
                                    <a class="lightbox" href="grafica/meraki-1-baja.jpg">
                                        <img class="foto-galeria" src="grafica/meraki-1-baja.jpg" alt="Meraki Home">
                                    </a>
                                </div>
                                <div class="col-sm-6 col-md-4">
                                    <a class="lightbox" href="grafica/meraki-2-baja.jpg">
                                        <img class="foto-galeria" src="grafica/meraki-2-baja.jpg" alt="Meraki Home">
                                    </a>
                                </div>
                                <div class="col-sm-12 col-md-4">
                                    <a class="lightbox" href="grafica/meraki-3-baja.jpg">
                                        <img class="foto-galeria" src="grafica/meraki-3-baja.jpg" alt="Meraki Home">
                                    </a>
                                </div>
                                <div class="col-sm-6 col-md-4">
                                    <a class="lightbox" href="grafica/Meraki---Cepillo2-baja.jpg">
                                        <img  class="foto-galeria" src="grafica/Meraki---Cepillo2-baja.jpg" alt="Meraki Home">
                                    </a>
                                </div>
                                <div class="col-sm-6 col-md-4">
                                    <a class="lightbox" href="grafica/Meraki---Cepillo-baja.jpg">
                                        <img  class="foto-galeria" src="grafica/Meraki---Cepillo-baja.jpg" alt="Meraki Home">
                                    </a>
                                </div>
                                <div class="col-sm-6 col-md-4">
                                    <a class="lightbox" href="grafica/IMG_0094-baja.jpg">
                                        <img class="foto-galeria" src="grafica/IMG_0094-baja.jpg" alt="Meraki Home">
                                    </a>
                                </div>
                                <div class="col-sm-6 col-md-4">
                                    <a class="lightbox" href="grafica/meraki-1-baja.jpg">
                                        <img class="foto-galeria" src="grafica/meraki-1-baja.jpg" alt="Meraki Home">
                                    </a>
                                </div>
                                <div class="col-sm-6 col-md-4">
                                    <a class="lightbox" href="grafica/toothbrush-baja.jpg">
                                        <img class="foto-galeria" src="grafica/toothbrush-baja.jpg" alt="Meraki Home">
                                    </a>
                                </div>
                                <div class="col-sm-6 col-md-4">
                                    <a class="lightbox" href="grafica/meraki-2-baja.jpg">
                                        <img class="foto-galeria" src="grafica/meraki-2-baja.jpg" alt="Meraki Home">
                                    </a>
                                </div>
                    </div>
            </div>
        </div>
        <div class="col-sm-3 col-md-2 link-ml" id="galeria-div2">
        <img width=200px height="200px" class="img-responsive"      src="grafica/MERAKI-2-baja.jpg">
        <div class="comprar">
            <a href="http://articulo.mercadolibre.com.ar/MLA-662052914-cepillo-de-dientes-ecologicos-de-bambu-_JM#eshop_TODOMUSICA92">COMPRAR</a>
        </div>
    </div>
        </div>

    

       
<?php include 'footer2.php'; ?>


<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
<script>
    baguetteBox.run('.tz-gallery');
</script>
</body>
</html>