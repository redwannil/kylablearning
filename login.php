<?php 
    //session_start(); 
    //if(isset($_SESSION['UserName'])){
       // header("Location:pdo_loggin.php");
    //}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/Content/AssetsBS3/img/favicon.ico">

    <title>Sign Page</title>

    <!-- Bootstrap core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="style.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="~/Scripts/AssetsBS3/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="/Scripts/AssetsBS3/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<style>
    .red{
      color:red;
    }
    </style>
  </head>

  <body>

    <div class="container">

      <form class="form-signin" role="form" action="pdo_loggin.php" method="post">
        <h2 class="form-signin-heading">Please sign in</h2>
        <label for="inputAcc" class="sr-only">Acc</label>
        <input type="Acc" name="acc" id="inputAcc" class="form-control" placeholder="Account" required autofocus>
        <label for="inputPw" class="sr-only">Pw</label>
        <input type="Pw" name="pw" id="inputPw" class="form-control" placeholder="Password" required>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div>
           <h3>Look here</h3>
		    <div>
            <label class="red"> <?php
                if(isset( $_GET["q"] ) && $_GET["q"]==1){
                    echo "please check!";
                } ?>
            </label>
        </div>
			<div>
           
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      </form>

    </div> <!-- /container -->

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="/Scripts/AssetsBS3/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>

