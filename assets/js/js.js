/*$('#modalVideo').on('hidden.bs.modal', function() {
  $('#gayossoVideo')[0].pause();
});

// Obtener el modal y el iframe
var modal = document.getElementById("modalVideo");
var iframe = document.getElementById("youtubeVideo");
var reproductor = document.getElementById('youtubeVideo');
  var botonCerrar = document.getElementById('cerrar-modal');


  botonCerrar.addEventListener('click', function() {
    reproductor.contentWindow.postMessage('{"event":"command","func":"stopVideo","args":""}', '*');
  });


// Agregar un event listener para detectar cuando se presiona la tecla "esc"
window.addEventListener("keydown", function(event) {
  if (event.key === "Escape") {
    // Pausar el video del iframe
    iframe.contentWindow.postMessage('{"event":"command","func":"pauseVideo","args":""}', '*');
    // Ocultar el modal
    modal.style.display = "none";
  }
});

// Agregar un event listener para detectar cuando se hace clic fuera del modal
window.addEventListener("click", function(event) {
  if (event.target == modal) {
    // Pausar el video del iframe
    iframe.contentWindow.postMessage('{"event":"command","func":"pauseVideo","args":""}', '*');
    // Ocultar el modal
    modal.style.display = "none";
  }
});
*/