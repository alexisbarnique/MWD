<?php include('server_login.php'); ?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" href="assets/img/icono.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>MWD Holding Group</title>
	
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    
    <link href="cms/assets/css/bootstrap.css" rel="stylesheet" />
    <link href="cms/assets/css/ct-paper.css" rel="stylesheet"/>
    <link href="cms/assets/css/demo.css" rel="stylesheet" /> 
    <link href="cms/assets/css/examples.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />
        
    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
      
</head>
<body>
    <div class="wrapper">
        <div class="register-background"> 
            <div class="filter-black"></div>

            <div class="container">
                <div class="row">
                    <div class="col-md-6 form">
			           <div class="row">
				           <div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1">
				             <div class="logo-form trans">
				               <img src="assets/img/logo-login.png" alt="MWD">
				             </div>
				            </div>
			           </div>
			           <div class="row">
			             <div class="col inputs-login">
			               <form id="login-form" action="login.php" method="post">
			               <?php include('cms/error.php'); ?>

			                <div class="form-group">
			                  <input name="username" type="text" class="form-login text-center" placeholder="username">
			                </div>
			                <div class="form-group">
			                  <input name="password" type="password" class="form-login text-center" />
			                </div>
			                <div class="col text-center log">
			                  <button type="submit" class="btn-login" name="login_user">Log In</button>
			                </div>
			              </form>
			             </div>
			           </div>
			        </div>
                </div>
            </div> 

            <!-- FOOTER -->

            <div class="footer register-footer text-center">
                <h6>&copy; 2018 MWD MANAGEMENT COMPANY LLC</h6>
            </div>
        </div>
    </div>

</body>

<script src="cms/assets/js/jquery-1.10.2.js" type="text/javascript"></script>
<script src="cms/assets/js/jquery-ui-1.10.4.custom.min.js" type="text/javascript"></script>

<script src="cms/assets/js/bootstrap.js" type="text/javascript"></script>

<!--  Plugins -->
<script src="cms/assets/js/ct-paper-checkbox.js"></script>
<script src="cms/assets/js/ct-paper-radio.js"></script>
<script src="cms/assets/js/bootstrap-select.js"></script>
<script src="cms/assets/js/bootstrap-datepicker.js"></script>
<script src="cms/assets/js/ct-paper.js"></script>
    
</html>

