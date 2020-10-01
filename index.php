<?php

	include("config.php");
	
	//**************** USER MANAGEMENT - START ****************\\

	include(LIB."/login/chklog.php");

    $logged = $logstat;
    $profile_full = $logfname;
	$profile_name = $lognick;
	$profile_id = $userid;
	$profile_idnum = $logname;
	$profile_email = $email;

    if (in_array($profile_idnum, $adminarray)) :
	   $profile_level = 9;
    else :
        $profile_level = 0;
    endif;

    $profile_hash = md5($profile_idnum);

    $profile_taxdesc = $taxdesc;

	$GLOBALS['level'] = $profile_level;
	
	//***************** USER MANAGEMENT - END *****************\\
    		
	$section = $_REQUEST['section'];
		
	if ($section) :
		include(OBJ."/".$section.".php");
		include(TEMP."/".$section.".php");
	else :	
		$ishome = 1;
		include(OBJ."/index.php");
		include(TEMP."/index.php");
    endif;
	
?>