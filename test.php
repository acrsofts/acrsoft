<?php
   $result = shell_exec( "./modharbour test.prg" );
   print( substr( $result, strpos( $result, chr( 10 ).chr( 10 ) ) + 1 ) );
?>
