$(document).ready(function() {
    
    $('#dialogoFormulario').dialog({
          // Indica si la ventana se abre de forma automática
          autoOpen: false,
          // Indica si la ventana es modal
          modal: true,
          // Largo
             
      width: 400,
      resizable: false,
          //width: 350,
          // Alto
          height: 'auto',
          //dialogClass: 'box box-solid box-warning',
         position: {
                  my: "center",
                  at: "center"
               },
          buttons: {
            Continuar: function() {
            var id=$('#seleccionado').attr('name');
            document.location = "procesar.php?action=delate&id="+id;
             $( this ).dialog( "close" );
            return true;
             
            },
            Cancelar: function() {
              // Cerramos el diálogo
             
              $( this ).dialog( "close" );
            }
          }
        });
       //
        
        $('.btn-danger').on('click', function(e){
             $(this).attr("id","seleccionado");
            $('#dialogoFormulario').dialog('open');
            //alert('delate');
                            return false;
            
        });
});