<?php include("../../config.php"); ?>
<?php	

	$cookiename = 'session_name';

	extract($_POST);

	$checkfmem = $register->check_member($username, $password);

    //var_dump($checkfmem);

	$getmem = $register->get_member($username);
	if ($checkfmem)
	{
        
        
		$expire = time() + 60;
		$_SESSION[$cookiename] = $username;
		//AUDIT TRAIL
		//$log = $main->log_action("LOGIN", 0, $getmem[0]['emp_id']);
		$success = 1;
	}
	else
	{	
		$success = 0;		
	}	

	echo $success;

?>