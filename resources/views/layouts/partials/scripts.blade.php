<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 2.1.4 -->
<script src="{{ asset('/plugins/jQuery/jQuery-2.1.4.min.js') }}"></script>
<!-- Bootstrap 3.3.2 JS -->
<script src="{{ asset('/js/bootstrap.min.js') }}" type="text/javascript"></script>
<!-- AdminLTE App -->
<script src="{{ asset('/js/app.min.js') }}" type="text/javascript"></script>

<!-- Optionally, you can add Slimscroll and FastClick plugins.
      Both of these plugins are recommended to enhance the
      user experience. Slimscroll is required when using the
      fixed layout. -->
<!--Habilitacion de Datepicker y creacion de script-->
  <!--<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  
  -->
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#datepicker" ).datepicker({changeMonth: true,changeYear: true});
    $( "#datepicker" ).datepicker( "option", "dateFormat", 'yy-mm-dd');/*Configuracion de fecha en ISO 8601*/
  } );
  </script>

  <script>
  $( function() {
    $( "#datepicker2" ).datepicker({changeMonth: true,changeYear: true});
    $( "#datepicker2" ).datepicker( "option", "dateFormat", 'yy-mm-dd');/*Configuracion de fecha en ISO 8601*/
  } );
  </script>
<!--
    <script>
  $( function() {
    $( "#datepicker" ).datepicker();
    $( "#format" ).on( "change", function() {
      $( "#datepicker" ).datepicker( "option", "dateFormat", $( this ).val() );
    });
  } );
  </script>
yy MM, d
  -->