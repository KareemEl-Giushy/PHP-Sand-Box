<?php
/**
 * First the function missing parameter, how the function can accept and deal with what we want ( like "ahmed")
 * the correction will be :
 * function namey( $name ) {
 */
function namey($name) {
	// $name  = $_GET["name"];
	/**
	 * The $_GET and $_POST is global reserved variables in PHP 
	 * for example if you have a URL like "http://example.com/?name=ahmed" in this case you can get the URL parameter using $_GET
	 * The correction : 
	 * actually we don't need this line at all so we will remove it "$name  = $_GET["name"];"
	 * Note: the variable $name is already passed throw the function
	 */
	$namec = strlen($name);

	$temp_name = $name;

	for ($i = 0; $i < $namec; $i++) {
		// $temp_name =  str_replace($name[$i], $i + 1, $name) . "<br>";
		
		/**
		 * Here you are looping using the original variable ($name) every time so the replacement will be in one character only and that is not we want
		 *  Your line will give : ( 1hmed a2med ah3ed ahm4d ahme5 ) 
		 *  What we want is the replacement for all looped character ( 1hmed 12med 123ed 1234d 12345 )
		 *  so we need to create a temporary variable that store the last loop result to start with it instead of starting with the original variable
		 *  The correction :
		 *  Adding this line and change your loop line so the result will be :
		 *  
		 */
		
		$temp_name =   str_replace($name[$i], $i + 1, $temp_name);
		echo $temp_name;
		echo "<br>";
		
	}
}
namey('ahmed');
?>