<!doctype html>
<html>
<head>
	<title>Limonade</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link rel="stylesheet" type="text/js" href="js/bootstrap.js">
	<!--<link rel="stylesheet" type="text/css" href="css/knacss.css">-->
	<!--<?php
	mb_internal_encoding('UTF-8');
	?>-->
</head>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Interface de gestion</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
       <!-- class="active" --> <li><a href="http://localhost/framework/rentree/?/fichiers">Fichiers <span class="sr-only">(current)</span></a></li>
        <li><a href="http://localhost/framework/rentree/?/promotions">Promotions</a></li>
       <li><a href="http://localhost/framework/rentree/?/donnees">Données</a></li>
      </ul> 
    </div>
  </div>
</nav>

<?php
  echo $content;
  ?>

<body>
</html>