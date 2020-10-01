<?php

	$cookiename = 'session_name';

	$username = $_SESSION[$cookiename];	
	
	if ($username) {	        
		$redirectUrl = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
		$_SESSION['login_url'] = $redirectUrl;
		$_SESSION['logout_url'] = $redirectUrl;	
		
		$checkname = $register->check_user($username);
		
		if (!$checkname) 
		{
			$logstat = 0;		
		}
		else 
		{
			$userdata = $register->get_member($username);
            
            //var_dump($userdata);
			
			$logstat = 1;
			$logfname = $userdata[0]['FName'].' '.$userdata[0]['LName'];
            $lognick = $userdata[0]['FName'];
			$logname = $userdata[0]['FName'];
			$userid = $userdata[0]['UserID'];	
			$email = $userdata[0]['EmailAdd'];	
		}		
	}
	else
	{
		$logstat = 0;
	}

?>