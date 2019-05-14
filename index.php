<?php
require "app/View.php";


echo "<p> Começou <p/>";
echo "<html><head>";
$link = new Link();
$link->href="css/modernize.css";
$link->Run();

$scrip = new Script();
$scrip->src="modernize.js"; 
$scrip->Run();


echo "</head>";
echo "<body><h3>Ola mUndo </h3></body>";
echo "</html>";

echo "<p> Acabou <p/>";

exit();






require "app/start.php";
App::run();
?> 