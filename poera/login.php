<?php 
//including database connection file 
require_once("dbcon.inc.php") ;


//fetching login form credentials for authrization 
if( isset( $_POST['submit'] ) ){

$user_email = $_POST['email'] ;
$user_pwd   = $_POST['upass'] ;
$redirect = 'home.php' ;
$error = ""  ;

//filtering @we do this later
 print_r( $_POST ) ;
//authenticate input credential with database entries
 $sql = 'SELECT email , upass FROM user_info 
         WHERE email = "'.$user_email.'" AND upass = "'.$user_pwd.'" ' ;

 $result = mysqli_query($conn , $sql) or die("query not performed due to error (*-*)") ;
  if( mysqli_num_rows( $result ) > 0 ){
    echo"<p>redirecting....</p>";
    header( 'location:home.php' ) ;
  }else{
    $error = ' style = "border-color:red" ' ;
  }
}else{
  echo"<p><em>form is not submited</em><p>";
}

?>
<!DOCTYPE html>
<html lang="en-us">
	<head>
		<title>login | poera</title>
		<meta charset="utf-8" >
		<meta name="viewport" content="width=device-width , intial-scale=1 ">

		<!----------link bootstrap css here------>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
		<link rel="stylesheet" type="text/css" href="fontawesome/css/font-awesome.css"/>
		<link rel="stylesheet" type="text/css" href="css/custom.css"  />

        <!---bootstrap js-------->

		<script src="js/jquery-3.2.1.min.js"></script>
    	<script type="text/javascript" src="js/bootstrap.js"></script>

	</head>
<body>
	
     <div class="container" style="margin-top: 100px;">
     	
           <div class="row" >
           	  <div class="col-sm-4"></div><!--decoy div-->
              <div class="col-sm-4">
             
              	<div class="panel panel-default">
              		<div style="margin-top: -95px"><img class="img responsive img-circle" src="img/icon2.jpg" width="100px" height="100px" style="background-color: #fff;" /></div>
              		<h4>Login with</h4>

              		<span><i class="fa fa-facebook"></i></span>
              		<span><i class="fa fa-twitter"></i></span>
              		<span><i class="fa fa-google-plus"></i></span>
              		<br/><br/>

              		<h4>OR</h4><hr/>

           			<div class="panel-body">

           				<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method = "post" >

           				<div class="form-group">
           					<input type="email" name="email" class="form-control textfield" placeholder="Email ..."   />
           				</div><!--from group 1-->

           				<div class="form-group">
           					<input type="password" name="upass" class="form-control textfield" placeholder="password" <?php if( isset( $_POST['submit'] ) ) echo $error ;?> />
           				</div><!--from group 1-->

           				<div class="form-group">
           					<input type="submit" name="submit" class="btn btn-success btn-lg btn-block textfield" value="log in"  />
           				</div><!--from group 1-->

           			</form><!----form end ---->

           			</div><!--end panel body-->
           		</div> 	

              </div> 
                <div class="col-sm-4"></div><!----decoy right div---->
     
           </div><!----end of row ---->

     </div><!----end of container---->

</body>
</html>