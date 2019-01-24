$(document).ready(function(){
    $('#screenNameTable').DataTable();
});
$(document).ready(function(){
    $("#color1").click(function(){
      $("#subBody").css("opacity", 0.30);
    });
    $("#color2").click(function(){
      $("#subBody").css("opacity", 0.30);
    });
    $("#color3").click(function(){
      $("#subBody").css("opacity", 0.30);
    });
    $("#color4").click(function(){
      $("#subBody").css("opacity", 0.30);
    });
    $("#bgColor1").click(function(){
      $("#subBody").css("opacity", 0.30);
    });
    $("#textColor1").click(function(){
      $("#subBody").css("opacity", 0.30);
    });
});
$(document).ready(function(){
    $("#view_modes").click(function(){
      $("body").css("background-color", '#d9534f');
      $("#subBody").css("opacity",1);
    });
});

function colorPick(form) {
  var bgColor = form.bgColor.value;
  var textColor = form.textColor.value;
    $("body").css("background-color", bgColor);
    $("body").css("color", textColor);
    $("#subBody").css("opacity",1);
}
