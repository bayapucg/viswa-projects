<?php
    if(isset($_POST['image']) && $_POST['image']!=""){
		if(isset($_POST['image']) && $_POST['image']!=""){
			 $img     = $_POST['image'];
			$pNumber = $_POST['phone_number'];
			$folderPath = "upload/";
			$image_parts = explode(";base64,", $img);
			$image_type_aux = explode("image/", $image_parts[0]);
			$image_type = $image_type_aux[1];
		  
			$image_base64 = base64_decode($image_parts[1]);
			$fileName = uniqid() . '.png';
		  
			$file = $folderPath . $fileName;
			file_put_contents($file, $image_base64);
			
			$dataS = array(
				'mobile'   => $pNumber,
				'fileName' => 'https://mygiftcardpool.com/webcam/upload/'.$fileName
			);
			echo json_encode(array('status'=>TRUE,'output'=>$dataS));exit; 	
		}else{
			echo json_encode(array('status'=>FALSE,'output'=>"Phone number is required."));exit; 	
		} 
	}else{
		echo json_encode(array('status'=>FALSE,'output'=>"Image is required."));exit; 	
	} 
?>