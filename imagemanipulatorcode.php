<?php
/**
	This code will be executed once image form is submitted	
*/
try {
	$arrEffect = array();
	//get all the values of effects in one array i.e. in $arrEffect
	$image; //this variable contains the value of $_FILES['userfile']['tmp_name']
    // Get instance
	if(isset($image) && !empty($image)){
		$objImagizer = new Imagemanipulator();
		$img = $objImagizer->ManipulateImage($image,$arrEffect);
		echo $img;
    }
} catch (Imagemanipulator $e) {
   // errors can be displayed or logged here
} 
	
?>