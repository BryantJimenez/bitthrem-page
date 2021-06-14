/*
=========================================
|                                       |
|           Scroll To Top               |
|                                       |
=========================================
*/ 
$('.scrollTop').click(function() {
  $("html, body").animate({scrollTop: 0});
});


$('.navbar .dropdown.notification-dropdown > .dropdown-menu, .navbar .dropdown.message-dropdown > .dropdown-menu ').click(function(e) {
  e.stopPropagation();
});

/*
=========================================
|                                       |
|       Multi-Check checkbox            |
|                                       |
=========================================
*/

function checkall(clickchk, relChkbox) {

  var checker = $('#' + clickchk);
  var multichk = $('.' + relChkbox);


  checker.click(function () {
    multichk.prop('checked', $(this).prop('checked'));
  });    
}


/*
=========================================
|                                       |
|           MultiCheck                  |
|                                       |
=========================================
*/

/*
    This MultiCheck Function is recommanded for datatable
    */

    function multiCheck(tb_var) {
      tb_var.on("change", ".chk-parent", function() {
        var e=$(this).closest("table").find("td:first-child .child-chk"), a=$(this).is(":checked");
        $(e).each(function() {
          a?($(this).prop("checked", !0), $(this).closest("tr").addClass("active")): ($(this).prop("checked", !1), $(this).closest("tr").removeClass("active"))
        })
      }),
      tb_var.on("change", "tbody tr .new-control", function() {
        $(this).parents("tr").toggleClass("active")
      })
    }

/*
=========================================
|                                       |
|           MultiCheck                  |
|                                       |
=========================================
*/

function checkall(clickchk, relChkbox) {

  var checker = $('#' + clickchk);
  var multichk = $('.' + relChkbox);


  checker.click(function () {
    multichk.prop('checked', $(this).prop('checked'));
  });    
}

/*
=========================================
|                                       |
|               Tooltips                |
|                                       |
=========================================
*/

$('.bs-tooltip').tooltip();

/*
=========================================
|                                       |
|               Popovers                |
|                                       |
=========================================
*/

$('.bs-popover').popover();


/*
================================================
|                                              |
|               Rounded Tooltip                |
|                                              |
================================================
*/

$('.t-dot').tooltip({
  template: '<div class="tooltip status rounded-tooltip" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>'
})


/*
================================================
|            IE VERSION Dector                 |
================================================
*/

function GetIEVersion() {
  var sAgent = window.navigator.userAgent;
  var Idx = sAgent.indexOf("MSIE");

  // If IE, return version number.
  if (Idx > 0) 
    return parseInt(sAgent.substring(Idx+ 5, sAgent.indexOf(".", Idx)));

  // If IE 11 then look for Updated user agent string.
  else if (!!navigator.userAgent.match(/Trident\/7\./)) 
    return 11;

  else
    return 0; //It is not IE
}

//////// Scripts ////////
$(document).ready(function() {
  //Validación para introducir solo números
  $('.number, #phone').keypress(function() {
    return event.charCode >= 48 && event.charCode <= 57;
  });
  //Validación para introducir solo letras y espacios
  $('#name, #lastname, .only-letters').keypress(function() {
    return event.charCode >= 65 && event.charCode <= 90 || event.charCode >= 97 && event.charCode <= 122 || event.charCode==32;
  });
  //Validación para solo presionar enter y borrar
  $('.date').keypress(function() {
    return event.charCode == 32 || event.charCode == 127;
  });

  //select2
  if ($('.select2').length) {
    $('.select2').select2({
      language: "es",
      placeholder: "Seleccione",
      tags: true
    });
  }

  //Datatables normal
  if ($('.table-normal').length) {
    $('.table-normal').DataTable({
      "oLanguage": {
        "oPaginate": { "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>', "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>' },
        "sInfo": "Resultados del _START_ al _END_ de un total de _TOTAL_ registros",
        "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
        "sSearchPlaceholder": "Buscar...",
        "sLengthMenu": "Mostrar _MENU_ registros",
        "sProcessing":     "Procesando...",
        "sZeroRecords":    "No se encontraron resultados",
        "sEmptyTable":     "Ningún resultado disponible en esta tabla",
        "sInfoEmpty":      "No hay resultados",
        "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
        "sInfoPostFix":    "",
        "sUrl":            "",
        "sInfoThousands":  ",",
        "sLoadingRecords": "Cargando...",
        "oAria": {
          "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
          "sSortDescending": ": Activar para ordenar la columna de manera descendente"
        }
      },
      "stripeClasses": [],
      "lengthMenu": [10, 20, 50, 100, 200, 500],
      "pageLength": 10
    });
  }

  if ($('.table-export').length) {
    $('.table-export').DataTable({
      dom: '<"row"<"col-md-12"<"row"<"col-md-6"B><"col-md-6"f> > ><"col-md-12"rt> <"col-md-12"<"row"<"col-md-5"i><"col-md-7"p>>> >',
      buttons: {
        buttons: [
        { extend: 'copy', className: 'btn' },
        { extend: 'csv', className: 'btn' },
        { extend: 'excel', className: 'btn' },
        { extend: 'print', className: 'btn' }
        ]
      },
      "oLanguage": {
        "oPaginate": { "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>', "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>' },
        "sInfo": "Resultados del _START_ al _END_ de un total de _TOTAL_ registros",
        "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
        "sSearchPlaceholder": "Buscar...",
        "sLengthMenu": "Mostrar _MENU_ registros",
        "sProcessing":     "Procesando...",
        "sZeroRecords":    "No se encontraron resultados",
        "sEmptyTable":     "Ningún resultado disponible en esta tabla",
        "sInfoEmpty":      "No hay resultados",
        "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
        "sInfoPostFix":    "",
        "sUrl":            "",
        "sInfoThousands":  ",",
        "sLoadingRecords": "Cargando...",
        "oAria": {
          "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
          "sSortDescending": ": Activar para ordenar la columna de manera descendente"
        },
        "buttons": {
          "copy": "Copiar",
          "print": "Imprimir"
        }
      },
      "stripeClasses": [],
      "lengthMenu": [10, 20, 50, 100, 200, 500],
      "pageLength": 10
    });
  }

  //dropify para input file más personalizado
  if ($('.dropify').length) {
    $('.dropify').dropify({
      messages: {
        default: 'Arrastre y suelte una imagen o da click para seleccionarla',
        replace: 'Arrastre y suelte una imagen o haga click para reemplazar',
        remove: 'Remover',
        error: 'Lo sentimos, el archivo es demasiado grande'
      },
      error: {
        'fileSize': 'El tamaño del archivo es demasiado grande ({{ value }} máximo).',
        'minWidth': 'El ancho de la imagen es demasiado pequeño ({{ value }}}px mínimo).',
        'maxWidth': 'El ancho de la imagen es demasiado grande ({{ value }}}px máximo).',
        'minHeight': 'La altura de la imagen es demasiado pequeña ({{ value }}}px mínimo).',
        'maxHeight': 'La altura de la imagen es demasiado grande ({{ value }}px máximo).',
        'imageFormat': 'El formato de imagen no está permitido (Debe ser {{ value }}).'
      }
    });
  }

  //datepicker material
  if ($('.dateMaterial').length) {
    $('.dateMaterial').bootstrapMaterialDatePicker({
      lang : 'es',
      time: false,
      cancelText: 'Cancelar',
      clearText: 'Limpiar',
      format: 'DD-MM-YYYY',
      maxDate : new Date()
    });
  }

  // flatpickr
  if ($('#flatpickr').length) {
    flatpickr(document.getElementById('flatpickr'), {
      locale: 'es',
      enableTime: false,
      dateFormat: "d-m-Y",
      maxDate : "today"
    });
  }

  //CKeditor plugin
  if ($('#content_article').length) {
    CKEDITOR.config.height=300;
    CKEDITOR.config.width='auto';
    CKEDITOR.replace('content_article');
  }

  if ($('#content_article_en').length) {
    CKEDITOR.config.height=250;
    CKEDITOR.config.width='auto';
    CKEDITOR.replace('content_article_en');
  }

  // International Telephone Input Jquery
  if ($('.international-phone').length) {
    var international_phone=document.querySelector(".international-phone"), errorMsg=document.querySelector("#international-phone-error-msg"), validMsg=document.querySelector("#international-phone-valid-msg");

    // here, the index maps to the error code returned from getValidationError - see readme
    var errorMap = ["Número Invalido", "Código de País Invalido", "Muy Corto", "Muy Largo", "Número Invalido"];

    var iti = window.intlTelInput(international_phone, {
      utilsScript: "/admins/vendor/intltelinput/js/utils.js"
    });

    var reset = function() {
      international_phone.classList.remove("is-invalid");
      errorMsg.innerHTML = "";
      errorMsg.classList.add("d-none");
      validMsg.classList.add("d-none");
    };

    // on blur: validate
    international_phone.addEventListener('blur', function() {
      reset();
      $('button[type="submit"]').attr('disabled', false);
      if (international_phone.value.trim()) {
        if (iti.isValidNumber()) {
          validMsg.classList.remove("d-none");
          $('button[type="submit"]').attr('disabled', false);
          $('#international-phone-complete').val(iti.getNumber());
        } else {
          international_phone.classList.add("is-invalid");
          var errorCode = iti.getValidationError();
          errorMsg.innerHTML = errorMap[errorCode];
          errorMsg.classList.remove("d-none");
          $('button[type="submit"]').attr('disabled', true);
          $('#international-phone-complete').val('');
        }
      }
    });

    // on keyup / change flag: reset
    international_phone.addEventListener('change', reset);
    international_phone.addEventListener('keyup', reset);
  }
});

// funcion para cambiar el input hidden al cambiar el switch de estado
$('#stateCheckbox').change(function(event) {
  if ($(this).is(':checked')) {
    $('#stateHidden').val(1);
  } else {
    $('#stateHidden').val(0);
  }
});

//funciones para desactivar y activar
function deactiveUser(slug) {
  $("#deactiveUser").modal();
  $('#formDeactiveUser').attr('action', '/admin/usuarios/' + slug + '/desactivar');
}

function activeUser(slug) {
  $("#activeUser").modal();
  $('#formActiveUser').attr('action', '/admin/usuarios/' + slug + '/activar');
}

function deactiveCategory(slug) {
  $("#deactiveCategory").modal();
  $('#formDeactiveCategory').attr('action', '/admin/categorias/' + slug + '/desactivar');
}

function activeCategory(slug) {
  $("#activeCategory").modal();
  $('#formActiveCategory').attr('action', '/admin/categorias/' + slug + '/activar');
}

function deactiveQuestion(slug) {
  $("#deactiveQuestion").modal();
  $('#formDeactiveQuestion').attr('action', '/admin/preguntas/' + slug + '/desactivar');
}

function activeQuestion(slug) {
  $("#activeQuestion").modal();
  $('#formActiveQuestion').attr('action', '/admin/preguntas/' + slug + '/activar');
}

function deactiveHelp(slug) {
  $("#deactiveHelp").modal();
  $('#formDeactiveHelp').attr('action', '/admin/ayudas/' + slug + '/desactivar');
}

function activeHelp(slug) {
  $("#activeHelp").modal();
  $('#formActiveHelp').attr('action', '/admin/ayudas/' + slug + '/activar');
}

function deactiveArticle(slug) {
  $("#deactiveArticle").modal();
  $('#formDeactiveArticle').attr('action', '/admin/articulos/' + slug + '/desactivar');
}

function activeArticle(slug) {
  $("#activeArticle").modal();
  $('#formActiveArticle').attr('action', '/admin/articulos/' + slug + '/activar');
}

function deactiveBest(slug) {
  $("#deactiveBest").modal();
  $('#formDeactiveBest').attr('action', '/admin/mejores/' + slug + '/desactivar');
}

function activeBest(slug) {
  $("#activeBest").modal();
  $('#formActiveBest').attr('action', '/admin/mejores/' + slug + '/activar');
}

//funciones para preguntar al eliminar
function deleteUser(slug) {
  $("#deleteUser").modal();
  $('#formDeleteUser').attr('action', '/admin/usuarios/' + slug);
}

function deleteCategory(slug) {
  $("#deleteCategory").modal();
  $('#formDeleteCategory').attr('action', '/admin/categorias/' + slug);
}

function deleteQuestion(slug) {
  $("#deleteQuestion").modal();
  $('#formDeleteQuestion').attr('action', '/admin/preguntas/' + slug);
}

function deleteHelp(slug) {
  $("#deleteHelp").modal();
  $('#formDeleteHelp').attr('action', '/admin/ayudas/' + slug);
}

function deleteArticle(slug) {
  $("#deleteArticle").modal();
  $('#formDeleteArticle').attr('action', '/admin/articulos/' + slug);
}

function deleteBest(slug) {
  $("#deleteBest").modal();
  $('#formDeleteBest').attr('action', '/admin/mejores/' + slug);
}

// funcion para cambiar el tipo de categoria
$('#select_type_help').change(function(event) {
  if ($(this).val()=="2") {
    $(".categories_helps textarea").attr('disabled', false);
    $(".categories_helps").removeClass("d-none");
  } else {
    $(".categories_helps").addClass("d-none");
    $(".categories_helps textarea").attr('disabled', true);
  }
});