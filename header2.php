
<header>

<div class="container-fluid">
  <div class="row">
    <div style="width: 100%;">
      <div>
        <img class="foto-header" src="grafica/bambu-background-baja.jpg">
      </div>
			<div class="div-logo">
			    <img class="logo-header" src="grafica/logo.png">
			</div>
	    </div>
  </div>
</div>
<div class="imagen-header">
<nav class="menu-navigation-basic">
	<a href="index2.php">Inicio</a>
	<a href="conocenos2.php">Conocenos</a>
	<a href="producto2.php">Producto</a>
	<a href="galeria2.php">Galeria</a>
	<a href="colaboradores2.php">Colaboradores</a>
	<a href="contacto2.php">Contacto</a>
	<a target="_blank" href="http://articulo.mercadolibre.com.ar/MLA-662052914-cepillo-de-dientes-ecologicos-de-bambu-_JM#eshop_TODOMUSICA92"> <img id="carrito" src="grafica/cart.png"></a>
</nav>
</div>
</header>


<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="js/jquery.slicknav.min.js"></script>

<script>

	$(function(){

        var menu = $('.menu-navigation-basic');

        menu.slicknav();

        // Mark the clicked item as selected

        menu.on('click', 'a', function(){
            var a = $(this);

            a.siblings().removeClass('selected');
            a.addClass('selected');
        });
    });

</script>
