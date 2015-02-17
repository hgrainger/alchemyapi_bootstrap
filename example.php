<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Text</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
  </head>
<body>

<?php	

	require_once 'alchemyapi.php';
	$alchemyapi = new AlchemyAPI();
	
    $response = $alchemyapi->text('url',$_POST["urlfull"],null);
    echo 'text: ', $response['text'], PHP_EOL;


?>
<br>
<center>
	<h3><a href="/alchemyapi_php-master">New Search</a></h3>
</center>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>
</html>