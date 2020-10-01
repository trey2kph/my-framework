<?php

    if ($logged == 1 && $profile_level != 8) {

		# PAGINATION
		$page = isset($_GET["page"]) ? (int)$_GET["page"] : 1 ;
		$start = NUM_ROWS * ($page - 1);
		
		//*********************** MAIN CODE START **********************\\
			
		# ASSIGNED VALUE
		$page_title = "Change Password";	
		
		//***********************  MAIN CODE END  **********************\\
		
		global $sroot, $profile_id, $unix3month;

		if ($_POST['opassword'] && $_POST['npassword'] && $_POST['cpassword']) :
            $idnum = $_POST['empnum'];
            $oldpass = $_POST['opassword'];
            $newpass = $_POST['npassword'];
            $conpass = $_POST['cpassword'];
            $chkmem = $register->check_member($idnum, $oldpass);                
            if (!$chkmem) : 
                echo '{"success":false,"error":"Error: Invalid old password"}';
                exit(); 
            endif;
            if ($newpass != $conpass) : 
                echo '{"success":false,"error":"Error: Password mismatch"}';
                exit(); 
            endif;
                    
            $edit_password = $register->change_password($newpass, $idnum);
        
            //AUDIT TRAIL
            //$log = $main->log_action("UPDATE_PASSWORD", $add_user, $add_user);
            echo '{"success":true}';
            exit(); 
        endif;

	}
	else
	{
		echo "<script language='javascript' type='text/javascript'>window.location.href='".WEB."/main'</script>";
	}

	
?>