$(document).ready(function() {
    $('#summernote_des_ppal').summernote({
      styleWithSpan: false,
      toolbar: [
        //[groupname, [button list]]

        ['style', ['bold', 'italic', 'underline', 'clear']],
        // ['font', ['strikethrough', 'superscript', 'subscript']],
        // ['fontsize', ['fontsize']],
				['font', ['strikethrough', 'superscript', 'subscript']],
				['color', ['color']],
        // ['para', ['ul', 'ol', 'paragraph']],
        // ['height', ['height']],

				// incluyo vista código | 20160220
				['view', [/*'fullscreen', */'codeview']],
				// /incluyo vista código | 20160220

      ]
    });
    $('#summernote_not_ppal').summernote({
      styleWithSpan: false,
      toolbar: [
        //[groupname, [button list]]

        ['style', ['bold', 'italic', 'underline', 'clear']],
        // ['font', ['strikethrough', 'superscript', 'subscript']],
        // ['fontsize', ['fontsize']],
				['font', ['strikethrough', 'superscript', 'subscript']],
				['color', ['color']],
        // ['para', ['ul', 'ol', 'paragraph']],
        // ['height', ['height']],

				// incluyo vista código | 20160220
				['view', [/*'fullscreen', */'codeview']],
				// /incluyo vista código | 20160220

      ]
    });

    $('#descripcion_termino_principal').summernote({
      styleWithSpan: false,
      toolbar: [
        ['style', ['bold', 'italic', 'underline', 'clear']],
				['font', ['strikethrough', 'superscript', 'subscript']],
				['color', ['color']],
      ]
    });
    $('#notas_termino_principal').summernote({
      styleWithSpan: false,
      toolbar: [
        ['style', ['bold', 'italic', 'underline', 'clear']],
				['font', ['strikethrough', 'superscript', 'subscript']],
				['color', ['color']],

				// incluyo vista código | 20160220
				['view', [/*'fullscreen', */'codeview']],
				// /incluyo vista código | 20160220

      ]
    });

    // $('#descripcion_termino_relacionado_en').summernote({
    $('#des_termino_relacionado_en').summernote({
      styleWithSpan: false,
      toolbar: [
        ['style', ['bold', 'italic', 'underline', 'clear']],
				['font', ['strikethrough', 'superscript', 'subscript']],
				['color', ['color']],

				// incluyo vista código | 20160220
				['view', [/*'fullscreen', */'codeview']],
				// /incluyo vista código | 20160220

      ]
    });
    $('#descripcion_termino_relacionado_vid').summernote({
      styleWithSpan: false,
      toolbar: [
        ['style', ['bold', 'italic', 'underline', 'clear']],
				['font', ['strikethrough', 'superscript', 'subscript']],
				['color', ['color']],

				// incluyo vista código | 20160220
				['view', [/*'fullscreen', */'codeview']],
				// /incluyo vista código | 20160220

      ]
    });
		$('#des_termino_relacionado_enes').summernote({
      styleWithSpan: false,
      toolbar: [
        ['style', ['bold', 'italic', 'underline', 'clear']],
				['font', ['strikethrough', 'superscript', 'subscript']],
				['color', ['color']],

				// incluyo vista código | 20160220
				['view', [/*'fullscreen', */'codeview']],
				// /incluyo vista código | 20160220

      ]
    });

    $('.descripcion_termino_relacionado_editar_en').summernote({
      styleWithSpan: false,
      toolbar: [
        ['style', ['bold', 'italic', 'underline', 'clear']],
				['font', ['strikethrough', 'superscript', 'subscript']],
				['color', ['color']],

				// incluyo vista código | 20160220
				['view', [/*'fullscreen', */'codeview']],
				// /incluyo vista código | 20160220

      ]
    });

		$('.descripcion_termino_relacionado_editar_enes').summernote({
      styleWithSpan: false,
      toolbar: [
        ['style', ['bold', 'italic', 'underline', 'clear']],
				['font', ['strikethrough', 'superscript', 'subscript']],
				['color', ['color']],

				// incluyo vista código | 20160220
				['view', [/*'fullscreen', */'codeview']],
				// /incluyo vista código | 20160220
				
      ]
    });

  });
  function postForm() {
    $('textarea[name="notas_termino_principal"]').html($('#summernote_des_ppal').code());
    $('textarea[name="descripcion_termino_principal"]').html($('#summernote_not_ppal').code());
    // $('textarea[name="descripcion_termino_relacionado_en"]').html($('#descripcion_termino_relacionado_en').code());
    $('textarea[name="des_termino_relacionado_en"]').html($('#des_termino_relacionado_en').code());
    $('textarea[name="des_termino_relacionado_enes"]').html($('#des_termino_relacionado_enes').code());


    $('textarea[name="descripcion_termino_principal"]').html($('#descripcion_termino_principal').code());
    $('textarea[name="notas_termino_principal"]').html($('#notas_termino_principal').code());

    // Nuevo usado en editar termino relacionado desde modal
    $('textarea[name="descripcion_termino_relacionado_editar_en"]').html($('#descripcion_termino_relacionado_editar_en').code());

		// Nuevo usado en editar termino relacionado ES desde modal
    $('textarea[name="descripcion_termino_relacionado_editar_enes"]').html($('#descripcion_termino_relacionado_editar_enes').code());
  };