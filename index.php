<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Article Analyzer 0.9</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/justified-nav.css" rel="stylesheet">
  </head>

	<body>
		<body>

    <div class="container">

      <div class="masthead">
        <h3 class="text-muted">Article Analyzer 0.9</h3>
        <nav>
          <ul class="nav nav-justified">
            <li class="active"><a href="/alchemyapi_php-master">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Github</a></li>
          </ul>
        </nav>
      </div>

      <!-- Jumbotron -->
      <div class="jumbotron">
        <h1><b>text</b> and <b>article</b> analysis</h1>
        <p class="lead">I have put together this simple <b>PHP</b> web application to show an<br>example of the <b>alchemyapi</b> and Twitter's <b>bootstrap</b> </p>
      </div>

      <center>
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-lg-4">
          <h2>Full Article</h2>
          <p>
            <form action="fullarticle.php" method="post">
        		<h4>Enter url:</h4><input type="text" name="urlfull"><br><br>
        		<button class="btn btn-primary" type="submit">Grab Text</button>
            </form>
          </p>
        </div>
        <div class="col-lg-4">
          <h2>Keywords</h2>
		      <p>
          <form action="keywords.php" method="post">
            <h4>Enter url:</h4><input type="text" name="urlkw"><br><br>
            <button class="btn btn-primary" type="submit">Find Keywords</button>
          </form>
          </p>
       </div>
        <div class="col-lg-4">
          <h2>Sentiment</h2>
          <p>
           <form action="sentiment.php" method="post">
            <h4>Enter url:</h4><input type="text" name="urlsent"><br><br>
            <button class="btn btn-primary" type="submit">Discover Sentiment</button>
            </form>
          </p>
        </div>
      </div>
  </center>
      <!-- Site footer -->
      <footer class="footer">
        <p>&copy; Company 2014</p>
      </footer>

    </div> <!-- /container -->
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html> 

