 	<?php	
 	$json_str = file_get_contents('php://input'); //接收request的body	
 	$json_obj = json_decode($json_str);//轉JSON格式	
 	 	
 	$myfile = fopen("log.txt","w+") or die("Unable to open file");	
 	fwrite($myfile, "\xEF\xBB\xBF".$json_str);	
 	fclose($myfile)	
 	 	
 	?>	
