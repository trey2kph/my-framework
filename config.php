<?php

# IP TO BLOCK
$iptoaccess = $_SERVER['REMOTE_ADDR'];

session_start();

# ERROR HANDLING
error_reporting(0);
ini_set('error_reporting', E_ALL-E_NOTICE);
ini_set('display_errors', 0);

# TEMPLATE VERSION
if ($_GET['temp']) define("VERSION", $_GET['temp']); 
else define("VERSION", "2015"); 

	# DATABASE CONNECTION
	define("DBHOST", "localhost"); 
	define("DBUSER", "root");
	define("DBPASS", "");
    define("DBNAME", "DB");

	$doc_root = dirname(__FILE__);
	
	# WEB FOLDERS
	define("ROOT", "http://site.com/framework");
	define("WEB", ROOT);
	define("JSCRIPT", WEB."/js");
	define("JS", WEB."/script");
	define("CSS", WEB."/css");
	define("UFILE", WEB."/files");
	define("LIB_WEB", WEB."/lib");
	define("CLASSES_WEB", WEB."/lib/class");	
	define("IMG_WEB", WEB."/images");
	define("REQUEST_WEB", WEB."/requests");
	define("OBJ_WEB", WEB."/objects/".VERSION);
	define("TEMP_WEB", WEB."/template/".VERSION);
	
	define("DOCUMENT", $doc_root);
	define("LIB", DOCUMENT."/lib");
	define("CLASSES", DOCUMENT."/lib/class");
	define("IMG", DOCUMENT."/images");
	define("FILES_DIR", DOCUMENT."/images/files");	
	define("REQUEST", DOCUMENT."/requests");
	define("OBJROOT", DOCUMENT."/objects");
	define("OBJ", DOCUMENT."/objects/".VERSION);
	define("TEMP", DOCUMENT."/template/".VERSION);

define("SITENAME", "Sitename");
define("SYSTEMNAME", "System Name");
define("COMPNAME", "Comapny Name");

define("ADMIN_CONTACT", "911-1111");
define("ADMIN_EMAIL", "support@company.com");

define("NOTIFICATION_EMAIL", "noreply@company.com");

$sroot = ROOT;
$wwwroot = WWW;

# INCLUDE CLASS
include(CLASSES."/mainsql.class.php");
include(CLASSES."/regsql.class.php");
//include(CLASSES."/validation.class.php");
//include(CLASSES."/extra.class.php");

# INITIATE CLASS
$mainsql		 		= new main;
$register			 	= new register;
//$validation		 	= new validation;
//$extra  			 	= new extra;

# PAGINATION
define("QS_VAR", "page"); // the variable name inside the query string (don't use this name inside other links)
define("STR_FWD", "&gt;"); // the string is used for a link (step forward)
define("STR_BWD", "&lt;"); // the string is used for a link (step backward)
define("NUM_LINKS", 5); // the number of links inside the navigation (the default value)
define("NUM_ROWS", 10);
define("NOTI_NUM_ROWS", 8); // row numbers of notifications 
define("APPR_NUM_ROWS", 10); // row numbers of approvers management
define("MEMO_NUM_ROWS", 10); // row numbers of memo 
define("GAL_NUM_ROWS", 12);
define("DIR_NUM_ROWS", 20);

# USER COOKIE
$usercook = unserialize($_COOKIE['cookiename']);
$cookname = $usercook['user_name'];
define("COOKNAME", $cookname);

if (isset($_COOKIE['cookiename'])){
	$spot_cookie = 1;
	define("COOKNAME", strtoupper(COOKNAME));
	define("COOKNAME2", COOKNAME);
}

#DATE VARIABLE
date_default_timezone_set('UTC+8');

$date10year = date("Y-m-d", strtotime("-10 year"));
$date1year = date("Y-m-d", strtotime("-1 year"));
$date6month = date("Y-m-d", strtotime("-6 month"));
$date3month = date("Y-m-d", strtotime("-3 month"));
$date1month = date("Y-m-d", strtotime("-1 month"));
$date2week = date("Y-m-d", strtotime("-2 weeks"));
$date1week = date("Y-m-d", strtotime("-1 weeks"));
$date1day = date("Y-m-d", strtotime("-1 days"));
$datenow = date("Y-m-d");

$unix3month = date("U", strtotime("+3 month"));

define("UNIX3MONTH", $unix3month);

//WELCOME REMARKS
$welcome = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?";

//WEB FOOTER
$wfooter = "Should you have any questions regarding ".SITENAME." contents you can draft an email and send to ".ADMIN_EMAIL.".<br>If you are encountering technical issues, please consult our Information Technology by sending an email to ".ADMIN_EMAIL." with a clear description of the issue. For urgent assistance please call at ".ADMIN_CONTACT.".";

//DEFAULT TIME IN AND OUT
$def_timein = '08:30:00';
$def_timeout = '17:30:00';

$adminarray = array("2015-07-0008", "2015-09-0057"); //admin's employee ID separated by comma

$timearray = array("06:00:00"=>"6:00AM","06:30:00"=>"6:30AM","07:00:00"=>"7:00AM","07:30:00"=>"7:30AM","08:00:00"=>"8:00AM","08:30:00"=>"8:30AM","09:00:00"=>"9:00AM","09:30:00"=>"9:30AM","10:00:00"=>"10:00AM","10:30:00"=>"10:30AM","11:00:00"=>"11:00AM","11:30:00"=>"11:30AM","12:00:00"=>"12:00NN","12:30:00"=>"12:30PM","13:00:00"=>"1:00PM","13:30:00"=>"1:30PM","14:00:00"=>"2:00PM","14:30:00"=>"2:30PM","15:00:00"=>"3:00PM","15:30:00"=>"3:30PM","16:00:00"=>"4:00PM","16:30:00"=>"4:30PM","17:00:00"=>"5:00PM","17:30:00"=>"5:30PM","18:00:00"=>"6:00PM","18:30:00"=>"6:30PM","19:00:00"=>"7:00PM","19:30:00"=>"7:30PM","20:00:00"=>"8:00PM","20:30:00"=>"8:30PM","21:00:00"=>"9:00PM","21:30:00"=>"9:30PM","22:00:00"=>"10:00PM","22:30:00"=>"10:30PM","23:00:00"=>"11:00PM");

// CONNECT TO DB
$con = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME);
if (mysqli_connect_errno($con))
{
	echo "Failed to connect to database: " . mysqli_connect_error();
}
/*$con = mssql_connect(DBHOST, DBUSER, DBPASS);
if (!$con) {
    die('Something went wrong while connecting to MSSQL');
}*/

//EMAIL INIT
ini_set("SMTP", "mail.company.com");                     
ini_set("smtp_port", "25");                     
ini_set("sendmail_from", "email@company.com");

?>