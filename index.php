<html>
 <head>
 	<link>
  <title>PHP Test</title>
  <link rel="stylesheet" type="text/css" href="style.css">
 </head>
 <body>
 	<form action="process.php" method="post">
 		Color: <input name="color" type="text"/>
 		<input type="submit"/>
 	</form>
 <?php
 	echo "<p>Hello World</p>";
 	$myVar = "hannah weber";
 	echo "<div id='my-name'>". $myVar . "</div>";
 	$coolStuff = array("my dog", "new york", "not being in new york");
 	foreach ($coolStuff as $coolThing) {
 		echo "<div class='cool-thing'>" . $coolThing . "</div>";
 	}
 ?>
 </body>
</html>
