$(document).on("click", "#id_contenedor-boton-agregar", function () {
  var x = $("#id-ingreso-datos");
  if (x.css("display") === "none") {
    x.css("display", "block");
  } else {
    x.css("display", "none");
  }
});
``;
