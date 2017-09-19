<!DOCTYPE html>
<html>
<head>
	<title>Memory!</title>
	 <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <!-- custom css -->
	<link rel="stylesheet" type="text/css" href="/css/landing.css">
	<link href="https://fonts.googleapis.com/css?family=Bungee+Outline|Frijole" rel="stylesheet">




<!-- Include a polyfill for ES6 Promises (optional) for IE11 and Android browser -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
</head>
<body>
	<div class="container firstContainer secondContainer">
<!-- 	row -->
		<div class="row"> 
			<div class="container col-xs-1 col-md-2 col-lg-2" id="firstContainer">

			</div> <!--  closes first smaller container -->
			
			<div class="container col-xs-8 col-lg-8 col-xl-8" id="firstContainer">

			<button type="button" class="btn btn-lg btn-danger start col-sm-3 col-md-4">START</button>
			<h2 id="winningMessage">Congratulations! You won!</h2>
			</div>  <!-- closes second smaller container -->
		</div> <!-- closes row -->
	</div> <!-- closes container --> 
	<!-- game plan is to add sweet alerts and replace red button -->

	<script src="/js/jQuery.js"></script>
	<script src="/js/bootstrap.min.js"></script>
	<script src="/js/memory.js"></script>



</body>
</html>