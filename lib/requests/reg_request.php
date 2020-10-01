<?php 

	include("../../config.php"); 
	//**************** USER MANAGEMENT - START ****************\\

	include(LIB."/login/chklog.php");
    include(LIB."/init/settinginit.php");

	$logged = $logstat;
    $profile_full = $logfname;
	$profile_name = $lognick;
	$profile_id = $userid;
	$profile_idnum = $logname;
	$profile_email = $email;
	$profile_comp = $company;
	$profile_pos = $position;
	$profile_dept = $department;
	$profile_sss = $sss;
	$profile_tin = $tin;
	$profile_phealth = $phealth;
	$profile_pagibig = $pagibig;
    $profile_acctnum = $acctnum;
    $profile_location = $location;

    if (in_array($profile_idnum, $adminarray)) :
	   $profile_level = 9;
    else :
        $profile_level = 0;
    endif;

    $profile_hash = md5('2014'.$profile_idnum);

    $profile_taxdesc = $taxdesc;

	$GLOBALS['level'] = $profile_level;
	
	//***************** USER MANAGEMENT - END *****************\\
?>

<?php	

    $sec = $_GET['sec'];

    switch ($sec) {
        case 'clear_search':	
            unset($_SESSION['searchuser']);
        break;
        case 'dir_clear_search':	
            unset($_SESSION['searchdir']);
            unset($_SESSION['searchdirdept']);
        break;
        case 'checkid':
            $uid = $_POST['id'];

            $member = $register->get_member_by_empid($uid);
            
            if ($member[0]['user_id']) echo md5('2014'.$member[0]['user_id']);
            else echo "0";
        
        break;     
    }            
	
?>			