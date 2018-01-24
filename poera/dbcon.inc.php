<?php 
/*------database conncectoin variables--------*/

$host = "localhost" ;
$username = "root" ;
$dbpass = "" ;
$db = "poera" ;

/*-----connecting to mysql database --------*/
$conn = mysqli_connect( $host , $username , $dbpass  , $db ) ;

if(!$conn)
   echo">>connection not established --<h4>".mysqli_error($conn)."</h4>" ;
?>