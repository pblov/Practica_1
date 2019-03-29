var acordeon = document.getElementsByClassName("re-boton");

for(var i=0; i < acordeon.length; i++){
    acordeon[i].onclick = function(){
        this.classList.toggle('is-open');
        var contenido = this.nextElementSibling;
        if(contenido.style.maxHeight){ //si está abierto el acordeón, se necesita cerrarlo.
            contenido.style.maxHeight = null;
        }
        else{
            contenido.style.maxHeight = contenido.scrollHeight + "px";
        }
    }
}