$(document).ready(function() {
    $('#example').DataTable( {
        ajax: './jsonUsers.php',
        columns: [
        	{data: "id"},
        	{data : "nombre"},
        	{data : "apellidos"},
        	{data : "usuario"},
        	{data : "password"},
        	{data : "rol"}


        ]
    } );
    
} );