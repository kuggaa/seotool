<?php

	/**
	 *	Environment settins.
	 */
	$ENV = "dev";

	/**
	 *	DB Settings.
	 */

	if ($ENV == "dev")
	{
		$databaseHost		= "localhost";
		$databaseUsername	= "root";
		$databasePassword	= "";
		$databaseName 		= "SEOTool";
	} else {
		$databaseHost		= "localhost";
		$databaseUsername	= "root";
		$databasePassword	= "ajeRTIyzi8";
		$databaseName 		= "seotool";
	}
?>