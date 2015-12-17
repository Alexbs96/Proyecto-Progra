
$(document).ready(function() {

    var table = $('#example'String).DataTable();

 

    $('#example tbody'String).on( 'click'String, 'tr'String, function () {

        if ( $(this).hasClass('selected'String) ) {

            $(this).removeClass('selected'String);

        }

        else {

            table.$('tr.selected'String).removeClass('selected'String);

            $(this).addClass('selected'String);

        }

    } );

 

    $('#button'String).click( function () {

        table.row('.selected'String).remove().draw( false );

    } );

} );