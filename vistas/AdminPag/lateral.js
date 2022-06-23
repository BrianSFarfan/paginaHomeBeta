
$(document).ready(function() {
    $('#sidebarCollapse').on('click', function() {
      $('#sidebar, #content').toggleClass('active');
      $('.collapse.in').toggleClass('in');
      $('a[aria-expanded=true]').attr('aria-expanded', 'false');
      document.getElementById("bodyContent").style.width="100%";
    });
});


// FECHA Y HORA //
function fechayhora(){
//FECHA//
  date = new Date();
  anio = date.getFullYear();
  mes = date.getMonth() + 1;
  dia = date.getDate();
  
  dia=('0'+dia).slice(-2);
  mes=('0'+mes).slice(-2);

 //NOMBRE DEL DIA//
  actualDia=date.getDay();
  let Dias = ['Dom','Lun','Mar','Mier','Jue','Vie','Sab']
  let mostrarDias= (Dias[actualDia]);
  //Resultado//
  document.getElementById("FechaHoy_Date").innerHTML = mostrarDias+" "+ dia + "/" + mes + "/" + anio;

//HORA//
  momentoActual=new Date();
  hora =momentoActual.getHours();
  minuto=momentoActual.getMinutes();
  segundo= momentoActual.getSeconds();

  hora=('0'+hora).slice(-2);
  minuto=('0'+minuto).slice(-2);
  horaImprimible=hora+" : "+minuto;
    //Resultado//
  document.getElementById('mostrarHora').innerHTML=horaImprimible;
}
  setInterval(() =>{
    fechayhora()
  },1000);


 //PREVIEW FOTO DE PERFIL//
 function readURL(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    reader.onload = function(e) {
      // Asignamos el atributo src a la tag de imagen
      $('#imagenmuestra').attr('src', e.target.result);
    }
    reader.readAsDataURL(input.files[0]);
  }
}



  

