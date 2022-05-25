$(document).ready(function () {
  $("#ocult").click(function () {
    $("#texto2").toggle();
    $("#ocult").toggleClass("vermenos");
    $("#ocult").toggleClass("vermas");
  });

  $(".mas").click(function () {
    $(this).toggle();
    $(this).siblings("p").children("span").toggle();
    $(this).siblings(".menos").toggle();
  });

  $(".menos").click(function () {
    $(this).toggle();
    $(this).siblings("p").children("span").toggle();
    $(this).siblings(".mas").toggle();
  });

  $("#boton-caps").click(function () {
    var val = $("#capitulos").val();

    var total = 100 / (7 / val);

    $("p.resp").text(
      "El porcentaje visto de la Temporada 1 es un " + total + "%"
    );
  });

  $("#boton-caps1").click(function () {
    var val = $("#capitulos1").val();

    var total = 100 / (13 / val);

    $("p.resp1").text(
      "El porcentaje visto de la Temporada 2 es un " + total + "%"
    );
  });

  $("#boton-caps2").click(function () {
    var val = $("#capitulos2").val();

    var total = 100 / (13 / val);

    $("p.resp2").text(
      "El porcentaje visto de la Temporada 3 es un " + total + "%"
    );
  });

  $("#boton-caps3").click(function () {
    var val = $("#capitulos3").val();

    var total = 100 / (13 / val);

    $("p.resp3").text(
      "El porcentaje visto de la Temporada 4 es un " + total + "%"
    );
  });

  $("#boton-caps4").click(function () {
    var val = $("#capitulos4").val();

    var total = 100 / (16 / val);

    $("p.resp4").text(
      "El porcentaje visto de la Temporada 5 es un " + total + "%"
    );
  });
});
