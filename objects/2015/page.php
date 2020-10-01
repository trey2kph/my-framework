<?php

	if ($logged == 1 && ($profile_level == 9 || $profile_level == 10)) {
	
		# PAGINATION
		$page = isset($_GET["page"]) ? (int)$_GET["page"] : 1 ;
		$start = NUM_ROWS * ($page - 1);                           
		
		//*********************** MAIN CODE START **********************\\
			
		# ASSIGNED VALUE
		$page_title = "Page";	
		
		//***********************  MAIN CODE END  **********************\\
		
		global $sroot, $profile_id;

        $searchuser_sess = $_SESSION['searchuser'];
		if ($_POST) {        
            $searchuser = $_POST['searchuser'] ? $_POST['searchuser'] : 0;
            $_SESSION['searchuser'] = $searchuser;
        }
        elseif ($searchuser_sess) {
            $searchuser = $searchuser_sess ? $searchuser_sess : 0;
            $_POST['searchuser'] = $searchuser != 0 ? $searchuser : NULL;
        }
        else {
            $searchuser = 0;
            $_POST['searchuser'] = NULL;
        }

		$pages = $main->pagination("user", $users_count[0]['usercount'], NUM_ROWS, 9);

	}
	else
	{
		echo "<script language='javascript' type='text/javascript'>window.location.href='".WEB."/main'</script>";
	}
	
?>