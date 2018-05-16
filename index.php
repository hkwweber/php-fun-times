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

 include 'messin.php';
 use \doingStuff\myFunClass as Funnest;

	$havingFun = new Funnest;
	echo "<div>" . $havingFun->specialVar . "</div>";
	echo "<div>" . $havingFun->sayMyName() . "</div>";



 	const MY_FIRST_CONSTANT = "HELLO WORLD";
 	echo "<h1>" . MY_FIRST_CONSTANT . "</h1>";
 	echo $_SERVER["HTTP_USER_AGENT"];
 	$myVar = "hannah weber";
 	echo "<div id='my-name'>". $myVar . "</div>";
 	$coolStuff = array("my dog", "new york", "not being in new york");
 	foreach ($coolStuff as $coolThing) {
 		echo "<li class='cool-thing'>" . $coolThing . "</li>";
 	}

 	forEach ()

 ?>
 </body>
</html>

<!--  	// include 'messin.php';
 	// use messingAround\myFunClass as Classy;
 	// $trying = Classy->$specialVar;
 	// echo $trying; -->
