window.onload = funciones;

function funciones(){
	var hamburguesa = document.querySelector(".fa-bars");
	hamburguesa.addEventListener("click", mostrar);
	function mostrar(){
		if(document.querySelector(".menu-oculto").hasAttribute("style", "display:none") === true){
			document.querySelector(".menu-oculto").removeAttribute("style", "display:none");
			document.querySelector(".menu-oculto").setAttribute("style", "display:inline-block");
		};	
	};


	hamburguesa.addEventListener("click", ocultar);
	function ocultar(){
		if (document.querySelector(".menu-oculto").hasAttribute("style", "display:inline-block") === true){
			document.querySelector(".menu-oculto").removeAttribute("style", "display:inline-block");
			document.querySelector(".menu-oculto").setAttribute("style", "display:none");
		};
	};
}