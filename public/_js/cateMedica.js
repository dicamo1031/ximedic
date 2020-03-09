$(document).ready(function(){
  $("#idCategoriaMedicamento").change(function(){

    $("#medicamento").html("");
    var idcategoria = $("#idCategoriaMedicamento").val();

  $.getJSON('medicamento/'+idcategoria, function(resultado){
      $.each(resultado, function(i, objeto){


      $("#medicamento") .append("<option value='"+objeto.idMedicamento+"' >"+ objeto.Nombre +"</option>");
    });
  });
});
});
