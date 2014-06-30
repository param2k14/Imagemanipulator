<?php
/**
	* Name:  Imagemanipulator
	*
	* Author: Paramjit Kaur
	*
	* Created:  30th June 2014
	*
	* Description:  Class contains functions to manipulate the images at run time
	*
*/
class Imagemanipulator {
		/**
		 * Imagemanipulator
		 *
		 * Creates an instance of image (constructor)
		 *
		 * @access      public
		 * @param       none
		 */
		function Imagemanipulator(){    
			
		}
		
		/**
		 * ManipulateImage
		 * Manipulate the image according to given parameters 
		 *
		 * @access      public
		 * @param       image file,effects
		 */
		function ManipulateImage($image,$arrEffects){    		
			
			if(IsValidImage($image)){
				foreach($arrEffects as $key=>$val){		//walk through all the effects of particular image				
					switch ($key) {
						case "effect1":
							$this->Effect1($image);
							break;
						case "effect2":
							$this->Effect2($image);
							break;
						case "effect3":
							$this->Effect3($image);
							break;
						case "radius":
							$this->UpdateRadius($image,$val);
							break;
						case "resizeimage":
							$this->ResizeImage($image,$val);
							break;
					}
				}					
				return $image;
			}else{
				
				return $err;
			
			}//if(IsValidImage($image))ends here
			
		}
		
		
		/**
		 * IsValidImage
		 * all the validations like size, types ect will go here
		 *
		 * @access      private
		 * @param       image file
		 */
		private function IsValidImage($image){    		
			//currently this validation is for image type only we can put more validations like size etc.
			 $mimetype = mime_content_type($image);		//format $_FILES['imagename']['tmp_name']
			if(in_array($mimetype, array('image/jpeg', 'image/gif', 'image/png'))) {	
				return true;
			} else {
				return false;
			}
			
		}
		
		/**
		 * Effect1
		 * giving special effects to image e.g. grayscale		 
		 *
		 * @access      private
		 * @param       image file
		 */
		private function Effect1($image){   		//e.g. grayscale 		
			  $image = imagecreatefrompng($image);	//imagecreatefrompng will be replaced with appropriate function 
			  imagefilter($image, IMG_FILTER_GRAYSCALE);
			  /*
			  save image on same location after giving effects
			  
			  **/
			
		}	
       	
		/**
		 * Effect2
		 * giving special effects to image e.g. blur		 
		 *
		 * @access      private
		 * @param       image file
		 */
		private function Effect2($image){   		//e.g. blur 			  
			  
			  /*
			 add  effect and save image on same location after giving effects
			  
			  **/
			
		}
			
		/**
		 * Effect3
		 * giving special effects to image e.g. blur		 
		 *
		 * @access      private
		 * @param       image file
		 */
		private function Effect3($image){   		//e.g. blur 			  
			  
			  /*
			 add  effect and save image on same location after giving effects
			  
			  **/
			
		}
		
        /**
		 * ResizeImage
		 * resize the image to given pixels		 
		 *
		 * @access      private
		 * @param       image file
		 */
		private function ResizeImage($image,$val){   		  
			  
			  /*
			 resize the image and store it 
			  
			  **/
			
		}
		 /**
		 * UpdateRadius
		 * update radius of image	 
		 *
		 * @access      private
		 * @param       image file
		 */
		private function UpdateRadius($image,$val){   		  
			  
			  /*
			 update radius of image and store it 
			  
			  **/
			
		}
        
    } 
	
?>