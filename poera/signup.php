<?php 
/*-------connecting to mysql database------*/
require_once "dbcon.inc.php" ;

/*-----function to send the html confirmation email ------*/
function sendmail( $token , $reciptent ){
	$from_address = 'mahendra@thecodestuff.com' ;

	$header = array() ;

	$header[] = 'MIME-VERSION: 1.0' ;
	$header[] ='Content-type: text/html; charset=iso-8859-1' ;
	$header[] ='Content-Transfer-Encoding: 7bit' ;
	$header[] ='From:'.$from_address ;
	
	$subject = "confirm your email " ;
	//$link = "https://poera.000webhostapp.com/confirm.php?token=".$token."&recpt=".$reciptent."" ;
	$message = '<html>' ;
	$message .='<p>please click on the link below to confirm your email from_address</p>' ;
	$message .='<p><a href="https://poera.000webhostapp.com/confirm.php?token=".$token."&recpt=".$reciptent."" ">click here to confirm</a></p>' ;

	/*-----sending mail to user-----*/

	$mail_status = mail($from_address , $subject , $message , $header ) ;

	if($mail_status){
	  echo"<h1>Pending confirmation !!</h1>" ;
	  echo '<p>A confirmation email is send to your registered email eddress.kinldy confirm your email</p>';
	}
	else{
		echo" mail not send -".mysqli_error($conn) ;
	}
		


}


/*
 *  ------fetching form data-----
 */

if( isset( $_POST['submit'] ) ){

	$firstName = $_POST['firstname'] ;
	$lastName  = $_POST['lastname']  ;
	$email     = $_POST['mail']      ;
	$upass  = $_POST['upass']     ;

	print_r($_POST) ;

	$query = 'INSERT INTO user_info( id , fname , lname , email , upass)
	          VALUES( NULL , "'.$firstName.'" , "'.$lastName.'" , "'.$email.'" , "'.$upass.'" ) ' ;

	/*---executing sql query-----*/

	$result =  mysqli_query( $conn , $query )  ;

	if( $result )
		echo "new record created" ;
	else
		echo mysqli_error($conn) ;

	/*----retriving auto generated id as token ----*/
	$token = mysqli_insert_id( $conn ) ;


	//mysqli_free_result($result) ;

	/*----sending confirmation mail to user----*/
	sendmail( $token , $email ) ;

}
else{
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>welcome to poera | sign up here</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width , intial-scale=1">

		<link rel="stylesheet" type="text/css"  href="css/bootstrap.css" />
		<link rel="stylesheet" type="text/css" href="css/custom.css" />

		<!---bootstrap js-------->

		<script src="js/jquery-3.2.1.min.js"></script>
    	<script type="text/javascript" src="js/bootstrap.js"></script>

	</head>
<body>

<div class="container-fluid">
	<div class="row">
		<div class="col-sm-6 box" id="hiddenBox">
			 <span>
			 	<h3>GET STRARTED TODAY</h3>
			 </span>
		</div>

		<div class="col-sm-6 box" style="background-color:#16262E">
			<p align="center"><img src="img/icon.png" width="100px" height="100px" /></p>
			<p>
			<form class="form-horizontal" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post"  >
				<div class="form-group">
					
					<div class="col-lg-6 col-xs-6">
						<input type="text" name="firstname" class="form-control input-lg" placeholder="First Name" >
					</div>
					<div class="col-lg-6 col-xs-6">
						<input type="text" name="lastname" class="form-control input-lg" placeholder="Last Name">
					</div>
				</div>

				<div class="form-group">	
					<div class="col-sm-12 ">
						<input type="text" name="mail" class="form-control input-lg" placeholder="Email"/>					
					</div>
				</div>

				<div class="form-group">	
					<div class="col-sm-12 ">
						<input type="password" name="upass" class="form-control input-lg" placeholder="Password"/>						
				    </div>
				</div>

				<div class="form-group">	
					<div class="col-sm-12 ">
						<input type="submit" class="btn btn-primary" name="submit" value="sign up"/>						
					</div>
				</div>
			</form>
		</p>
		<p>By signing up, you agree to poera's Terms of Service.<br/><br/>already have account ? login here </p>

		</div>
	</div>
</div>

</body>
</html>

<?php
	
}
?>
