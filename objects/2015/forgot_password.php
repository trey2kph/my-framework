<?php    
	
	if ($logged == 1) :

		echo "<script language='javascript' type='text/javascript'>window.location.href='".WEB."'</script>";		

	else :
	        
        //*********************** MAIN CODE START **********************\\
			
		# ASSIGNED VALUE
		$page_title = "Forgot Password";	
		
		//***********************  MAIN CODE END  **********************\\
        
        global $sroot;
        
        if ($_POST['btnforgot'] || $_POST['btnforgot_x']) :                    
            
            $emp_info = $register->get_member($_POST['empidnum']);

            if ($emp_info) :

                $message = "<div style='display: block; border: 5px solid #024485; padding: 10px; font-size: 12px; font-family: Verdana; width: 100%;'><span style='font-size: 18px; color: #024485; font-weight: bold;'>Title</span><br><br>Hi ".$emp_info[0]['NickName'].",<br><br>";
                $message .= "Your account password has been successfully reset.<br><br>";
                $message .= "<b>".$emp_info[0]['Password']."</b><br><br>";
                $message .= "Please click <a href='".WEB."'>here</a> to log in<br><br>";
                $message .= "Thanks,<br>";
                $message .= "Admin";
                $message .= "<hr />".MAILFOOT."</div>";
                
                $headers = "From: noreply@company.com\r\n";
                $headers .= "Reply-To: noreply@company.com\r\n";
                $headers .= "MIME-Version: 1.0\r\n";
                $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
        
                $sendmail = mail($emp_info[0]['EmailAdd'], "Subject Password Change", $message, $headers);   

                if ($sendmail) :
                    echo '{"success": true}';
                    exit();
                else :
                    echo '{"success": false; "error": "mail"}';
                    exit();
                endif;
            else :
                echo '{"success": false}';
                exit();
            endif;
    
        endif;

	endif;
	
?>