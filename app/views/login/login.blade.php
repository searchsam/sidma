<!DOCTYPE html>
<html lang="en">
  	<head>
	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <meta name="description" content="">
	    <meta name="author" content="">
	    <link rel="shortcut icon" href="img/escudo.png">

	    <title>SIDMA</title>

	    <!-- Bootstrap core CSS -->
	    <link href="{{URL::to('/')}}/css/signin.css" rel="stylesheet">	
	    <link href="{{URL::to('/')}}/css/bootstrap.min.css" rel="stylesheet">

	    <!-- Custom styles for this template -->
	    

	    <!-- Just for debugging purposes. Don't actually copy this line! -->
	    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

	    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	    <!--[if lt IE 9]>
	      	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	      	<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	    <![endif]-->
  	</head>

  	<body>
	    <div class="container">
	    	<form class="form-signin form-group" id="formulario" role="form" action="{{action('LoginController@acceso')}}" method="post">
	        	<h2 class="form-signin-heading"></h2>
	        	<input name="usuario" type="text" id="user" class="form-control requerido" placeholder="Usuario" required>
	        	<input name="contra" type="password" class="form-control requerido" placeholder="Contrase&ntilde;a" required>
	        	<button id="acceso" class="btn btn-lg btn-success btn-block">Acceder</button>
	      	</form>

	      	<div class="bs-callout bs-callout-danger" id="aviso" <?= Session::has('message')?'':'style="display:none"' ?>>
    			<h4>{{Session::get('message')}}</h4>
  			</div>
	    </div> <!-- /container -->

	    <!-- Bootstrap core JavaScript
	    ================================================== -->
	    <script src="{{URL::to('/')}}/js/jquery.min.js"></script>
	    <script src="{{URL::to('/')}}/js/validate.min.js"></script>
	    <!-- Placed at the end of the document so the pages load faster -->
	    <script>
			$('form').validate();
		</script>
  	</body>
</html>