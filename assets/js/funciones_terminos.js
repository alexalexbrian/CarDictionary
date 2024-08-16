// Función para eliminar la relaciones en inglés
function eliminarRelacionEn(id_formulario, id_principal, id_relacionado) {
  // buscamos el formuario por id
  var formulario = document.getElementById(id_formulario);

  document.getElementById("accion").value = "eliminarRelacionEn";
  document.getElementById("id_principal").value = id_principal;
  document.getElementById("id_relacionado").value = id_relacionado;

  // formulario.submit();
  swal({
    title: "¿Estás seguro?",
    text: "Esta acción hará que el término ya no esté relacionado",
    type: "warning",
    showCancelButton: true,
    confirmButtonColor: '#34b93f',
    confirmButtonText: 'Sí, estoy seguro',
    cancelButtonText: "No, salir",
    closeOnConfirm: false,
    closeOnCancel: false
 },
 function(isConfirm){

   if (isConfirm){
    swal("Relación eliminada", "el término ya no está relacionado", "success");
    setTimeout(function () {
      formulario.submit();
    }, 2000);

    } else {
      swal({
        title: 'Acción cancelada',
        text: 'el término sigue relacionado',
        type: 'error',
        timer: 2000
      });
    }
  });

}

// Función para eliminar la relaciones en inglés español
function eliminarRelacionEnEs(id_formulario, id_principal, id_relacionado) {
  // buscamos el formuario por id
  var formulario = document.getElementById(id_formulario);

  document.getElementById("accion").value = "eliminarRelacionEnEs";
  document.getElementById("id_principal").value = id_principal;
  document.getElementById("id_relacionado").value = id_relacionado;

  // formulario.submit();
  swal({
    title: "¿Estás seguro?",
    text: "Esta acción hará que el término ya no esté relacionado entre el inglés y español",
    type: "warning",
    showCancelButton: true,
    confirmButtonColor: '#34b93f',
    confirmButtonText: 'Sí, estoy seguro',
    cancelButtonText: "No, salir",
    closeOnConfirm: false,
    closeOnCancel: false
 },
 function(isConfirm){

   if (isConfirm){
    swal("Relación eliminada", "el término ya no está relacionado", "success");
    setTimeout(function () {
      formulario.submit();
    }, 2000);

    } else {
      swal({
        title: 'Acción cancelada',
        text: 'el término sigue relacionado',
        type: 'error',
        timer: 2000
      });
    }
  });

}

// Función para eliminar la relaciones en inglés
function eliminarRelacionVid(id_formulario, id_principal, id_relacionado) {
  // buscamos el formuario por id
  var formulario = document.getElementById(id_formulario);

  // document.getElementById("accion").value = "eliminarRelacionEn";
  document.getElementById("accion").value = "eliminarRelacionEnVid";
  document.getElementById("id_principal").value = id_principal;
  document.getElementById("id_relacionado").value = id_relacionado;

  // formulario.submit();
  swal({
    title: "¿Estás seguro?",
    text: "Esta acción hará que el término ya no sea vid",
    type: "warning",
    showCancelButton: true,
    confirmButtonColor: '#34b93f',
    confirmButtonText: 'Sí, estoy seguro',
    cancelButtonText: "No, salir",
    closeOnConfirm: false,
    closeOnCancel: false
 },
 function(isConfirm){

   if (isConfirm){
    swal("Relación eliminada", "el término ya no es vid", "success");
    setTimeout(function () {
      formulario.submit();
    }, 2000);

    } else {
      swal({
        title: 'Acción cancelada',
        text: 'el término sigue relacionado',
        type: 'error',
        timer: 2000
      });
    }
  });

}

// Función para actualizar relacion en
function actualizarTerminoRelacionEn(id_formulario) {
  // buscamos el formuario por id
  var formulario = document.getElementById(id_formulario);

  document.getElementById("accion").value = "updateTerminoRelacionEn";
  // document.getElementById("update_nom_en").value = nom_en;
  // document.getElementById("update_des_en").value = des_en;

  // alert(document.getElementById("descripcion_termino_relacionado_en").value);
  // alert(document.getElementById("des_termino_relacionado_en").value);

  formulario.submit();
}

// Función para actualizar relacion vid
function actualizarTerminoRelacionVid(id_formulario) {
  // buscamos el formuario por id
  var formulario = document.getElementById(id_formulario);

  document.getElementById("accion").value = "updateTerminoRelacionVid";
  // document.getElementById("update_nom_en").value = nom_en;
  // document.getElementById("update_des_en").value = des_en;

  formulario.submit();
}

// Función para actualizar relacion en-es
function actualizarTerminoRelacionEnEs(id_formulario) {
  // buscamos el formuario por id
  var formulario = document.getElementById(id_formulario);

  document.getElementById("accion").value = "updateTerminoRelacionEnEs";
  // document.getElementById("update_nom_en").value = nom_en;
  // document.getElementById("update_des_en").value = des_en;

  // alert(document.getElementById("descripcion_termino_relacionado_en").value);
  // alert(document.getElementById("des_termino_relacionado_en").value);

  formulario.submit();
}

// Función para actualizar termino relacionado (en) en la modal de editar
function actualizarTerminoRelacionEditarModalEn(id_formulario, id_relacionado) {

  // buscamos la id del término a actualizar
  var a='nombre_termino_relacionado_editar_en'+id_relacionado;
  document.getElementById("id_relacionado").value = id_relacionado;
  document.getElementById('nombre_termino_relacionado_editar_en').value=document.getElementById(a).value;
  document.getElementById('des_termino_relacionado_editar_en').value=$('#descripcion_termino_relacionado_editar_en'+id_relacionado).code();
    //alert(document.getElementById('desc_termino_relacionado_editar_en').value);
  // buscamos el formuario por id
  // var formulario = document.getElementById(id_formulario);
  var formulario = document.getElementById(id_formulario);


  document.getElementById("accion").value = "actualizarTerminoRelacionadoDesdeModal";

  // alert(document.getElementById("descripcion_termino_relacionado_en").value);
  // alert(document.getElementById("des_termino_relacionado_en").value);

  formulario.submit();
}

// Función para actualizar termino relacionado (en-es) en la modal de editar
function actualizarTerminoRelacionEditarModalEnEs(id_formulario, id_relacionado) {

  // buscamos la id del término a actualizar
  var a='nombre_termino_relacionado_editar_enes'+id_relacionado;
  document.getElementById("id_relacionado").value = id_relacionado;
  document.getElementById('nombre_termino_relacionado_editar_enes').value=document.getElementById(a).value;
  document.getElementById('des_termino_relacionado_editar_enes').value=$('#descripcion_termino_relacionado_editar_enes'+id_relacionado).code();
    //alert(document.getElementById('desc_termino_relacionado_editar_en').value);
  // buscamos el formuario por id
  // var formulario = document.getElementById(id_formulario);
  var formulario = document.getElementById(id_formulario);


  document.getElementById("accion").value = "actualizarTerminoRelacionadoDesdeModalEnEs";

  // alert(document.getElementById("descripcion_termino_relacionado_en").value);
  // alert(document.getElementById("des_termino_relacionado_en").value);

  formulario.submit();
}

function changeVistaEdicion() {
  // ocultar terminos en vista
  document.getElementById("vista2_termino").style.display = "none";
  document.getElementById("edicion_termino").style.display = "block";
  // $( "#vista_termino" ).hide();
  // $( "#edicion_termino" ).show();
}

function changeVistaTermino() {
  // ocultar terminos en vista
  document.getElementById("vista2_termino").style.display = "block";
  document.getElementById("edicion_termino").style.display = "none";
  // $( "#vista_termino" ).show();
  // $( "#edicion_termino" ).hide();
}

// Función para eliminar la relaciones en inglés
function actualizarTerminoCompletoEn(id_formulario) {

  // buscamos el formuario por id
  var formulario = document.getElementById(id_formulario);

  document.getElementById("accion").value = "updateTerminoCompletoEn";
  // document.getElementById("update_nom_en").value = nom_en;
  // document.getElementById("update_des_en").value = des_en;

  formulario.submit();
//   swal({
//     title: "¿Estás seguro?",
//     text: "Esta acción modificará la base de datos",
//     type: "warning",
//     showCancelButton: true,
//     confirmButtonColor: '#34b93f',
//     confirmButtonText: 'Si, estoy seguro',
//     cancelButtonText: "No, seguir editando",
//     closeOnConfirm: false,
//     closeOnCancel: false
//  },
//  function(isConfirm){
//
//    if (isConfirm){
//      formulario.submit();
//     } else {
//       swal("Cancelado", "Seguimos editando", "error");
//     }
// });

//   $('#id_formulario').submit(function() {
//     swal(   'Good job!',   'You clicked the button!',   'success' );
//     return true;
// });
}

// Nuevo Borrar término
// Función para eliminar la relaciones en inglés
function eliminarTerminoEn(id_formulario, id_principal) {
  // buscamos el formuario por id
  var formulario = document.getElementById(id_formulario);

  document.getElementById("accion").value = "borrarTerminoEn";
  document.getElementById("id_principal").value = id_principal;

  // formulario.submit();
  swal({
    title: "¿Estás seguro?",
    text: "Esta acción eliminará el término la base de datos",
    type: "warning",
    showCancelButton: true,
    confirmButtonColor: '#34b93f',
    confirmButtonText: 'Sí, estoy seguro',
    cancelButtonText: "No, salir",
    closeOnConfirm: false,
    closeOnCancel: false
 },
 function(isConfirm){

   if (isConfirm){
    swal("Eliminado", "el término ha sido borrado", "success");
    // formulario.submit();
    //  window.location = "./";
    setTimeout(function () {
      // window.location.href = "index.php";
      formulario.submit();
    }, 2000);

    } else {
      // swal("Cancelado", "el término sigue vivo", "error");
      swal({
        title: 'Cancelado',
        text: 'el término sigue vivo',
        type: 'error',
        timer: 2000
      });
    }
  });

}

// /Nuevo Borrar término

// Funciones para buscador de nuevo término relacionado en
function loadXMLDoc() {
  // alert("entre");
  var xmlhttp;

  var n = document.getElementById('nombre_termino_relacionado_en').value;
  // alert(n);

  if (n == '') {
    // document.getElementById("descripcion_termino_relacionado_en").value = "";
    // document.getElementById("descripcion_termino_relacionado_en").innerHTML = "";
    document.getElementById("des_termino_relacionado_en").innerHTML = "";
    return;
  }

  if (window.XMLHttpRequest) { // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp = new XMLHttpRequest();
  } else { // code for IE6, IE5
    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange = function() {
    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
      // document.getElementById("descripcion_termino_relacionado_en").value = xmlhttp.responseText;
      // document.getElementById("descripcion_termino_relacionado_en").innerHTML = xmlhttp.responseText;
      // $('textarea[name="descripcion_termino_relacionado_en"]').code(xmlhttp.responseText);
      document.getElementById("des_termino_relacionado_en").innerHTML = xmlhttp.responseText;
      $('textarea[name="des_termino_relacionado_en"]').code(xmlhttp.responseText);
      // alert(xmlhttp.responseText);
    }
  }
  xmlhttp.open("POST", "proc.php", true);
  xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xmlhttp.send("q=" + n);


}
// /Funciones para buscador de nuevo término relacionado en

// Funciones para buscador de nuevo término relacionado es
function loadXMLDocEs() {
  // alert("entre");
  var xmlhttp;

  var n = document.getElementById('nombre_termino_relacionado_en').value;
  // alert(n);

  if (n == '') {
    // document.getElementById("descripcion_termino_relacionado_en").value = "";
    // document.getElementById("descripcion_termino_relacionado_en").innerHTML = "";
    document.getElementById("des_termino_relacionado_en").innerHTML = "";
    return;
  }

  if (window.XMLHttpRequest) { // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp = new XMLHttpRequest();
  } else { // code for IE6, IE5
    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange = function() {
    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
      // document.getElementById("descripcion_termino_relacionado_en").value = xmlhttp.responseText;
      // document.getElementById("descripcion_termino_relacionado_en").innerHTML = xmlhttp.responseText;
      // $('textarea[name="descripcion_termino_relacionado_en"]').code(xmlhttp.responseText);
      document.getElementById("des_termino_relacionado_en").innerHTML = xmlhttp.responseText;
      $('textarea[name="des_termino_relacionado_en"]').code(xmlhttp.responseText);
      // alert(xmlhttp.responseText);
    }
  }
  xmlhttp.open("POST", "proces.php", true);
  xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xmlhttp.send("q=" + n);


}
// /Funciones para buscador de nuevo término relacionado es

// Funciones para buscador de nuevo término vid
function loadXMLDocVid() {
  // alert("entre");
  var xmlhttp;

  var n = document.getElementById('nombre_termino_relacionado_vid').value;
  // alert(n);

  if (n == '') {
    // document.getElementById("descripcion_termino_relacionado_en").value = "";
    document.getElementById("descripcion_termino_relacionado_vid").innerHTML = "";
    return;
  }

  if (window.XMLHttpRequest) { // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp = new XMLHttpRequest();
  } else { // code for IE6, IE5
    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange = function() {
    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
      // document.getElementById("descripcion_termino_relacionado_en").value = xmlhttp.responseText;
      document.getElementById("descripcion_termino_relacionado_vid").innerHTML = xmlhttp.responseText;
      $('textarea[name="descripcion_termino_relacionado_vid"]').code(xmlhttp.responseText);
      // alert(xmlhttp.responseText);
    }
  }
  // xmlhttp.open("POST", "proc_vid.php", true);
  // ya no utilizamos el prod_vid porque la busqueda será la misma que en relaciones usando la misma funcion
  xmlhttp.open("POST", "proc.php", true);
  xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xmlhttp.send("q=" + n);


}
// /Funciones para buscador de nuevo término vid

// Funciones para buscador de nuevo término vid Es
function loadXMLDocVidEs() {
  // alert("entre");
  var xmlhttp;

  var n = document.getElementById('nombre_termino_relacionado_vid').value;
  // alert(n);

  if (n == '') {
    // document.getElementById("descripcion_termino_relacionado_en").value = "";
    document.getElementById("descripcion_termino_relacionado_vid").innerHTML = "";
    return;
  }

  if (window.XMLHttpRequest) { // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp = new XMLHttpRequest();
  } else { // code for IE6, IE5
    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange = function() {
    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
      // document.getElementById("descripcion_termino_relacionado_en").value = xmlhttp.responseText;
      document.getElementById("descripcion_termino_relacionado_vid").innerHTML = xmlhttp.responseText;
      $('textarea[name="descripcion_termino_relacionado_vid"]').code(xmlhttp.responseText);
      // alert(xmlhttp.responseText);
    }
  }
  // xmlhttp.open("POST", "proc_vid.php", true);
  // ya no utilizamos el prod_vid porque la busqueda será la misma que en relaciones usando la misma funcion
  xmlhttp.open("POST", "proces.php", true);
  xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xmlhttp.send("q=" + n);


}
// /Funciones para buscador de nuevo término vid Es

// Funciones para buscador de nuevo término relacionado en-es
function loadXMLDocEnEs() {
  // alert("entre");
  var xmlhttp;

  var n = document.getElementById('nombre_termino_relacionado_enes').value;
  // alert(n);

  if (n == '') {
    // document.getElementById("descripcion_termino_relacionado_en").value = "";
    // document.getElementById("descripcion_termino_relacionado_en").innerHTML = "";
    document.getElementById("des_termino_relacionado_enes").innerHTML = "";
    return;
  }

  if (window.XMLHttpRequest) { // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp = new XMLHttpRequest();
  } else { // code for IE6, IE5
    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange = function() {
    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
      // document.getElementById("descripcion_termino_relacionado_en").value = xmlhttp.responseText;
      // document.getElementById("descripcion_termino_relacionado_en").innerHTML = xmlhttp.responseText;
      // $('textarea[name="descripcion_termino_relacionado_en"]').code(xmlhttp.responseText);
      document.getElementById("des_termino_relacionado_enes").innerHTML = xmlhttp.responseText;
      $('textarea[name="des_termino_relacionado_enes"]').code(xmlhttp.responseText);
      // alert(xmlhttp.responseText);
    }
  }
  xmlhttp.open("POST", "proc_es.php", true);
  xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xmlhttp.send("q=" + n);

}
// /Funciones para buscador de nuevo término relacionado en-es

// Funciones para buscador de nuevo término relacionado es-en
function loadXMLDocEsEn() {
  // alert("entre");
  var xmlhttp;

  var n = document.getElementById('nombre_termino_relacionado_enes').value;
  // alert(n);

  if (n == '') {
    // document.getElementById("descripcion_termino_relacionado_en").value = "";
    // document.getElementById("descripcion_termino_relacionado_en").innerHTML = "";
    document.getElementById("des_termino_relacionado_enes").innerHTML = "";
    return;
  }

  if (window.XMLHttpRequest) { // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp = new XMLHttpRequest();
  } else { // code for IE6, IE5
    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange = function() {
    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
      // document.getElementById("descripcion_termino_relacionado_en").value = xmlhttp.responseText;
      // document.getElementById("descripcion_termino_relacionado_en").innerHTML = xmlhttp.responseText;
      // $('textarea[name="descripcion_termino_relacionado_en"]').code(xmlhttp.responseText);
      document.getElementById("des_termino_relacionado_enes").innerHTML = xmlhttp.responseText;
      $('textarea[name="des_termino_relacionado_enes"]').code(xmlhttp.responseText);
      // alert(xmlhttp.responseText);
    }
  }
  xmlhttp.open("POST", "proc_en.php", true);
  xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xmlhttp.send("q=" + n);

}
// /Funciones para buscador de nuevo término relacionado es-en

// Funciones para buscador rápido
function loadXMLDocRapido() {
  // alert("entre");
  var xmlhttp;

  var n = document.getElementById('buscador_rapido').value;
  // alert(n);

  if (n == '') {
    // document.getElementById("descripcion_termino_relacionado_en").value = "";
    document.getElementById("div_visualizador_rapido").innerHTML = "";
    return;
  }

  // limitamos el número de caracteres de búsqueda a 3 para que aparezca el desplegable
  if (n.length < 3) {
    document.getElementById("div_visualizador_rapido").innerHTML = "";
    return;
  }

  if (window.XMLHttpRequest) { // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp = new XMLHttpRequest();
  } else { // code for IE6, IE5
    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange = function() {
    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
      // document.getElementById("descripcion_termino_relacionado_en").value = xmlhttp.responseText;
      document.getElementById("div_visualizador_rapido").innerHTML = xmlhttp.responseText;
      // alert(xmlhttp.responseText);
    }
  }
  xmlhttp.open("POST", "search.php", true);
  xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xmlhttp.send("q=" + n);
}
// /Funciones para buscador rápido

// Funciones para buscador rápido Es
function loadXMLDocRapidoEs() {
  // alert("entre");
  var xmlhttp;

  var n = document.getElementById('buscador_rapido').value;
  // alert(n);

  if (n == '') {
    // document.getElementById("descripcion_termino_relacionado_en").value = "";
    document.getElementById("div_visualizador_rapido").innerHTML = "";
    return;
  }

  // limitamos el número de caracteres de búsqueda a 3 para que aparezca el desplegable
  if (n.length < 3) {
    document.getElementById("div_visualizador_rapido").innerHTML = "";
    return;
  }

  if (window.XMLHttpRequest) { // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp = new XMLHttpRequest();
  } else { // code for IE6, IE5
    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange = function() {
    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
      // document.getElementById("descripcion_termino_relacionado_en").value = xmlhttp.responseText;
      document.getElementById("div_visualizador_rapido").innerHTML = xmlhttp.responseText;
      // alert(xmlhttp.responseText);
    }
  }
  xmlhttp.open("POST", "search_es.php", true);
  xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xmlhttp.send("q=" + n);
}
// /Funciones para buscador rápido Es

// Funciones para buscador nuevo
function loadXMLDocNuevo() {
  // alert("entre");
  var xmlhttp;

  var n = document.getElementById('nombre_termino_principal').value;
  // alert(n);

  if (n == '') {
    // document.getElementById("descripcion_termino_relacionado_en").value = "";
    document.getElementById("div_visualizador_nuevo").innerHTML = "";
    return;
  }

  // limitamos el número de caracteres de búsqueda a 3 para que aparezca el desplegable
  // if (n.length < 3) {
  //   document.getElementById("div_visualizador_nuevo").innerHTML = "";
  //   return;
  // }

  if (window.XMLHttpRequest) { // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp = new XMLHttpRequest();
  } else { // code for IE6, IE5
    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange = function() {
    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
      // document.getElementById("descripcion_termino_relacionado_en").value = xmlhttp.responseText;
      document.getElementById("div_visualizador_nuevo").innerHTML = xmlhttp.responseText;
      // alert(xmlhttp.responseText);
    }
  }
  xmlhttp.open("POST", "search.php", true);
  xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xmlhttp.send("q=" + n);
}
// /Funciones para buscador nuevo

// Funciones para buscador nuevo Es
function loadXMLDocNuevoEs() {
  // alert("entre");
  var xmlhttp;

  var n = document.getElementById('nombre_termino_principal').value;
  // alert(n);

  if (n == '') {
    // document.getElementById("descripcion_termino_relacionado_en").value = "";
    document.getElementById("div_visualizador_nuevo").innerHTML = "";
    return;
  }

  // limitamos el número de caracteres de búsqueda a 3 para que aparezca el desplegable
  // if (n.length < 3) {
  //   document.getElementById("div_visualizador_nuevo").innerHTML = "";
  //   return;
  // }

  if (window.XMLHttpRequest) { // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp = new XMLHttpRequest();
  } else { // code for IE6, IE5
    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange = function() {
    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
      // document.getElementById("descripcion_termino_relacionado_en").value = xmlhttp.responseText;
      document.getElementById("div_visualizador_nuevo").innerHTML = xmlhttp.responseText;
      // alert(xmlhttp.responseText);
    }
  }
  xmlhttp.open("POST", "search_es.php", true);
  xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xmlhttp.send("q=" + n);
}
// /Funciones para buscador nuevo Es

// Funciones limpiar campos
function limpiarCamposModalRelacionadosEn() {
  document.getElementById("nombre_termino_relacionado_en").value = "";
  document.getElementById("des_termino_relacionado_en").innerHTML = "";
  $('textarea[name="des_termino_relacionado_en"]').code("");
}
function limpiarCamposModalRelacionadosVid() {
  document.getElementById("nombre_termino_relacionado_vid").value = "";
  document.getElementById("descripcion_termino_relacionado_vid").innerHTML = "";
  $('textarea[name="descripcion_termino_relacionado_vid"]').code("");
}
function limpiarCamposModalRelacionadosEnEs() {
  document.getElementById("nombre_termino_relacionado_enes").value = "";
  document.getElementById("des_termino_relacionado_enes").innerHTML = "";
  $('textarea[name="des_termino_relacionado_enes"]').code("");
}
// /Funciones limpiar campos

// Funciones restablecer campos de la edición del término principal
// - Para la versión inglés
function restablecerCamposPrincipalEn(nombre_principal, descripcion_principal, notas_principal) {
  var nombre_principal = nombre_principal;
  var descripcion_principal = descripcion_principal;
  var notas_principal = notas_principal;
  document.getElementById("nombre_termino_principal").value = nombre_principal;
  var valor_textarea_des = document.getElementById('summernote_des_ppal');
  valor_textarea_des.innerHTML = descripcion_principal;
  $(valor_textarea_des).code(descripcion_principal);
  var valor_textarea_not = document.getElementById('summernote_not_ppal');
  valor_textarea_not.innerHTML = notas_principal;
  $(valor_textarea_not).code(notas_principal);
}
// /Funciones restablecer campos de la edición del término principal

// Funciones restablecer campos con el botón cancelar en la edición modal
// - Para la versión inglés
function restablecerCamposModalRelacionadosEn(id_relacionado, nombre_relacionado, descripcion_relacionado) {
  var id_relacionado = id_relacionado;
  var nombre_relacionado = nombre_relacionado;
  var descripcion_relacionado = descripcion_relacionado;
  document.getElementById("nombre_termino_relacionado_editar_en"+id_relacionado).value = nombre_relacionado;
  var valor_textarea = document.getElementById('descripcion_termino_relacionado_editar_en'+id_relacionado);
  valor_textarea.innerHTML = descripcion_relacionado;
  $(valor_textarea).code(descripcion_relacionado);
}
function restablecerCamposModalRelacionadosEnEs(id_relacionado, nombre_relacionado, descripcion_relacionado) {
  var id_relacionado = id_relacionado;
  var nombre_relacionado = nombre_relacionado;
  var descripcion_relacionado = descripcion_relacionado;
  document.getElementById("nombre_termino_relacionado_editar_enes"+id_relacionado).value = nombre_relacionado;
  var valor_textarea = document.getElementById('descripcion_termino_relacionado_editar_enes'+id_relacionado);
  valor_textarea.innerHTML = descripcion_relacionado;
  $(valor_textarea).code(descripcion_relacionado);
}
// - Para la versión español
function restablecerCamposModalRelacionadosEs(id_relacionado, nombre_relacionado, descripcion_relacionado) {
  var id_relacionado = id_relacionado;
  var nombre_relacionado = nombre_relacionado;
  var descripcion_relacionado = descripcion_relacionado;
  document.getElementById("nombre_termino_relacionado_editar_en"+id_relacionado).value = nombre_relacionado;
  var valor_textarea = document.getElementById('descripcion_termino_relacionado_editar_en'+id_relacionado);
  valor_textarea.innerHTML = descripcion_relacionado;
  $(valor_textarea).code(descripcion_relacionado);
}
// /Funciones restablecer campos con el botón cancelar en la edición modal

// Funciones para conseguir terminos por ajax en la modal
function loadXMLDocTerminos() {
  // alert("entre");
  var n = 1;
  var xmlhttp;

  if (window.XMLHttpRequest) { // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp = new XMLHttpRequest();
  } else { // code for IE6, IE5
    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange = function() {
    // alert("entra2");
    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
      // document.getElementById("descripcion_termino_relacionado_en").value = xmlhttp.responseText;
      // alert("entra3");
      document.getElementById("registros_total").innerHTML = xmlhttp.responseText;
      // alert(xmlhttp.responseText);
      // alert("entra4");
    }
  }
  xmlhttp.open("POST", "search_terminos.php", true);
  xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xmlhttp.send("q=" + n);
}
// /Funciones para conseguir terminos por ajax en la modal

// Funciones para conseguir terminos por ajax en la modal Es
function loadXMLDocTerminosEs() {
  // alert("entre");
  var n = 1;
  var xmlhttp;

  if (window.XMLHttpRequest) { // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp = new XMLHttpRequest();
  } else { // code for IE6, IE5
    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange = function() {
    // alert("entra2");
    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
      // document.getElementById("descripcion_termino_relacionado_en").value = xmlhttp.responseText;
      // alert("entra3");
      document.getElementById("registros_total").innerHTML = xmlhttp.responseText;
      // alert(xmlhttp.responseText);
      // alert("entra4");
    }
  }
  xmlhttp.open("POST", "search_terminos_es.php", true);
  xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xmlhttp.send("q=" + n);
}
// /Funciones para conseguir terminos por ajax en la modal Es
