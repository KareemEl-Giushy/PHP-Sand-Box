<?php

/*
	Hello This Is Task : [Learn #65 PHP]
*/



//----------------------------------------------------------------------------------------------



// All Variables

$dir      	=  	'My-Site';

$file1    	=  	'My-Site/index.html';
$file2    	=  	'My-Site/style.css';
$file3    	=  	'My-Site/plugin.js';

$subFile1 	= 	substr($file1, 8, 5);
$subFile2 	= 	substr($file2, 8, 5);
$subFile3 	= 	substr($file3, 8, 6);

$sayHi   	= 	'Hello <button onclick="myKey()"> Click Me </button>';
$sayWr    	=  	'<p>Javascript Is As A Sister Of PHP</p>';

$fill1    	=  	'<!DOCTYPE html>
				<html>
					<head>
						<meta charset="UTF-8">
						<title>Task</title>
						<link rel="stylesheet" href="style.css" />
					</head>
					<body>
						<div id="click">' . $sayHi . '</div>
						<section>Code By Em An</section>
						<script src="plugin.js"></script>
					</body>
				</html>';

$fill2    	=   'body {
					background-color: #FFF;
				}

				div {
					padding: 15px;
					width: 300px;
					height: 350px;
					margin: 50px auto;
					border-radius: 15px 15px 0 0;
					background-image: url("../I.jpg");
					background-repeat: round;
					opacity: .9;
					color: #FFF;
					font-size: 18px;
					font-weight: bold;
					border: 2px solid tomato
				}

				div:hover {
					opacity: 1
				}

				p {
					background-color: tomato;
					border-radius: 5px;
					padding: 10px;
					margin: auto;
					color: #FFF;
					text-align: center
				}

				section {
					position: fixed;
					color: #777;
					bottom: 25px;
					right: 25px
				}';

$fill3    	=   'function myKey() {
					"use strict";
					document.getElementById("click").innerHTML =
					"' . $sayWr . '";
				}';



//----------------------------------------------------------------------------------------------



// Created One Directory And Created Three Files

if(is_dir($dir) && file_exists($file1) && file_exists($file2) && file_exists($file3)) {

	echo "<div style='margin: 10px auto; text-align: center'>";
	echo "<h3>Was Created Directory " . $dir . " And Files Successfully </h3>";
	echo "<ul style='width: 100px; margin: 10px auto; text-align: left'><li>" . $subFile1 . "</li><li>" . $subFile2 . "</li><li>" . $subFile3 . "</li></ul>";
	echo "<h4>To See Page <a href='$file1' target='_blank'>Click Here</a></h4>";
	echo "</div>";


} elseif(is_dir($dir)) {


	echo "<div style='margin: 10px auto; text-align: center'>";
	echo "<h3>The Directory " . $dir . " Is Found </h3>";
	echo "<p>You Can Now Creating Three Files By PHP </p>";
	echo "<a href='task-lesson-65.php'>Click Here</a> Or Reload This Page";
	echo "</div>";

	file_put_contents($file1, $fill1);
	file_put_contents($file2, $fill2);
	file_put_contents($file3, $fill3);


} else {

	echo "<div style='margin: 10px auto; text-align: center'>";
	echo "<h3>The Directory " . $dir . " Is Not Found </h3>";
	echo "<p>But You Can Creating It By PHP </p>";
	echo "<a href='task-lesson-65.php'>Click Here</a> Or Reload This Page";
	echo "</div>";

	mkdir($dir);
}
