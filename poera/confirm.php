<?php 
/*-----importing database connection file ------*/
require_once("dbcon.inc.php") ;

/*----fecthing authentication token and email id of register user to confirm mail -----*/

$token_id = $_GET["token"] ;
$recpt= $_GET["recpt"] ;
//echo gettype($token_id) ;
$query = 'SELECT token , email  FROM user_info WHERE token = "'.$token_id.'" and email = "'.$recpt.'" ' ;
//echo $query ;

/*----executing query----*/

$result = mysqli_query( $conn , $query ) or die( "----->".mysqli_error($conn) ) ;

/*-----if any result fetch then its valid email -----*/

if( mysqli_num_rows( $result ) > 0 ){
    echo "<h2>EMAIL confirmed</h2>" ;
    echo'<p>thank you for confirming your email <a href="login.php">login here</a></p>' ;
    /*---updating the status of user----*/
    
    $query = 'UPDATE user_info SET status = 1 WHERE token = "'.$token_id.'" ' ;
    
    $result = mysqli_query($conn , $query) or die("status not updated successfully !!") ;
    
}
else{
    echo '<h2>oops !!! email not confirmed</h2>' ;
}

 
?>