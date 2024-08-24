// Función para validar el formulario
  function ValidarFiltrosWord(event) {

    //event.preventDefault();
    var empiezaPor = document.getElementById('empieza_por');
    var terminaCon = document.getElementById('termina_con');
    var idioma = document.getElementById('idioma');
    var palabra = document.getElementById('palabra').value;


    // Validar que se haya seleccionado una letra para empieza_por
    if (empiezaPor.value === '') {
      alert('Por favor, elige una letra "Empieza por".');
      empiezaPor.focus();
      return false; // Detener el envío del formulario
    }

    // Validar que se haya seleccionado un idioma
    if (idioma.value === '') {
      alert('Por favor, elige un idioma.');
      idioma.focus();
      return false; // Detener el envío del formulario
    }

    if (empiezaPor.value === "0" && palabra.trim() === '') {
      alert('Por favor, escribe una palabra');
      return false; // Detener el envío del formulario
    }

    return true; // Permitir el envío del formulario si todas las validaciones pasan

  }