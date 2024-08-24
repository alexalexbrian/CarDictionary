//Buscador web
//eb browser
function loadXMLDocRapido() {
  //console.log(entre);
  var xmlhttp;
  var n = document.getElementById('buscador_rapido').value;
  //console.log(n);

  if (n == '') {
    // document.getElementById("descripcion_termino_relacionado_en").value = "";
    document.getElementById("div_visualizador_rapido").innerHTML = "";
    return;
  }

  // Limitamos el número de caracteres de búsqueda a 3 para que aparezca el desplegable
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