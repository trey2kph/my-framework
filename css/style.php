<?php 

	include("../config.php");
	
	//**************** USER MANAGEMENT - START ****************\\

	//include(LIB."/login/chklog.php");
    //include(LIB."/init/settinginit.php");

	$logged = $logstat;
    $profile_full = $logfname;
	$profile_name = $lognick;
	$profile_pic = $logpic;
	$profile_id = $userid;
	$profile_idnum = $logname;
	$profile_email = $email;
	$profile_level = $level;
    $profile_hash = md5('2014'.$profile_idnum);

	$GLOBALS['level'] = $level;

    header('Content-Type: text/css'); 

?>
/*
 * HTML5 Boilerplate
 *
 * What follows is the result of much research on cross-browser styling.
 * Credit left inline and big thanks to Nicolas Gallagher, Jonathan Neal,
 * Kroc Camen, and the H5BP dev community and team.
 */

/* ==========================================================================
   Base styles: opinionated defaults
   ========================================================================== */

html,
button,
input,
select,
textarea {
    color: #222;
}

body {
    display: block;
    font-size: 1em;
    line-height: 1.4;
		margin: 0px;
		font: normal 11px Verdana, Geneva, sans-serif;
		background: #FFF;
}

/*
 * Remove text-shadow in selection highlight: h5bp.com/i
 * These selection rule sets have to be separate.
 * Customize the background color to match your design.
 */

::-moz-selection {
    background: #b3d4fc;
    text-shadow: none;
}

::selection {
    background: #b3d4fc;
    text-shadow: none;
}

/*
 * A better looking default horizontal rule
 */

hr {
    display: block;
    height: 1px;
    border: 0;
    border-top: 1px solid #ccc;
    margin: 1em 0;
    padding: 0;
}

/*
 * Remove the gap between images and the bottom of their containers: h5bp.com/i/440
 */

img {
    vertical-align: middle;
	border: none;
}

/*
 * Remove default fieldset styles.
 */

fieldset {
    border: 0;
    margin: 0;
    padding: 0;
}

/*
 * Allow only vertical resizing of textareas.
 */

textarea {
    resize: vertical;
}

/* ==========================================================================
   Chrome Frame prompt
   ========================================================================== */

.chromeframe {
    margin: 0.2em 0;
    background: #ccc;
    color: #000;
    padding: 0.2em 0;
}

a { text-decoration: none; color: #333; }

/* ==========================================================================
   Author's custom styles
	 Author: 
   ========================================================================== */





/* PAGINATION */

.pagination {
	display: block;
	margin: 20px 0px;
	width: 100%;
	height: auto;
	padding: 5px 0px;
	background-color: #FFF;
	text-align: center; 
}

.artpagination {
	display: block;
	margin: 20px 0px;
	width: 644px;
	height: auto;
	padding: 5px 0px;
	background-color: #FFF;
	text-align: center; 
}

.pagination2 {
	display: none; 
}

.pageactive {
	display: inline-block;
	margin: 0px 3px 5px 3px;
	height: auto;
	padding: 5px;
	background-color: #022B5D;
	text-align: center;  
    border: 0px solid #022B5D;
    border-radius: 10px; 
}

.pagelink {
	display: inline-block;
	margin: 0px 3px 5px 3px;
	height: auto;
	padding: 5px;
	text-align: center;
}

.pagelink:hover {
	display: inline-block;
	margin: 0px 3px;
	height: auto;
	padding: 5px;
	background-color: #022B5D;
	text-align: center;
	color: #CCC !important;
    border: 0px solid #022B5D;
    border-radius: 10px; 
}

/* TABLE */

.tdata, tdatablk, .tdataform { 
	border: none;
}

.tdatahead { 
    table-layout: fixed;
    clear: both;
    width: 100%;
}

.tdatamid { 
    table-layout: fixed;
    width: 100%;
}

.tdata .trdata:hover { background: #FFF !important; color: #333 !important; }

.tdata th { color: #DDD; text-align: center; }

.tdatablk th { color: #333; text-align: center; }

.fc-content td, .tdata tr, .tdataform tr { color: #FFF; }

.tdatablk tr { color: #111; }

.tdataform input, .tdataform select, .tdataform2 input, .tdataform2 select { 
    font-size: 11px; 
    font-family: "Verdana"; 
    border: 1px solid #999; 
}

th, td { padding: 5px; }

.tdata th, .tdata td { border: none none solid none; border-bottom: 1px solid #888; }

.tdatablk th { border: none none solid none; border-bottom: 1px solid #444; }


#activity_table table, #memo_table table, #directory_table table, #user_table table { border-collapse: collapse; }
#activity_table table tr, #directory_table table td, #user_table table td { border: 1px solid #999; padding: 5px 10px; background: #f9f9f9; }
#memo_table table tr td { height: 60px; border: 1px solid #999; padding: 0px 10px; }

/* LISTS */

.noliststyle {
    list-style: none;
}

/* JQUERY DATEPICKER */

.ui-datepicker {
    z-index: 40 !important;
}

/* IMAGE SIZES */

.hugeimage {
	width: 642px;
	height: 429px;
}

.largeimage {
	width: 190px;
	height: 127px;
}

.mediumimageover {
	width: 150px;
	height: 100px;
}

.mediumimage {
	width: 150px;
	height: 100px;
}

.mediumimage2 {
	width: 140px;
	height: 93px;
}

.smallimg {
    border-radius: 3px;
    -moz-border-radius: 3px;
    -webkit-border-radius: 3px;
}

.leftalign {
	float: left;
	margin-right: 18px;
}

.rightalign {
	float: right;
	margin-left: 18px;
}

.lefttalign {
	text-align: left;
}

.centertalign {
	text-align: center;
}

.righttalign {
	text-align: right;
}

.centerimage {
	margin: 0px auto;
}

.bottomimage {
	position: absolute;
	bottom: 0px;
}

/* COLUMN */

.column2 {
    -webkit-column-count: 2;
    -moz-column-count: 2;
    column-count: 2;
    -webkit-column-gap: 20px;
    -moz-column-gap: 20px;
    column-gap: 20px;
}

.column3 {
    -webkit-column-count: 3;
    -moz-column-count: 3;
    column-count: 3;
    -webkit-column-gap: 10px;
    -moz-column-gap: 10px;
    column-gap: 10px;
}

/* FONTS AND TEXTS */

.arttitle:hover {
	color: #494949 !important;
}

@font-face {
    font-family: 'Roboto';
    src: url('../lib/font/robot.eot');
    src: url('../lib/font/robot.eot?#iefix') format('embedded-opentype'),
         url('../lib/font/robot.woff') format('woff'),
         url('../lib/font/robot.ttf') format('truetype'),
         url('../lib/font/robot.svg#Roboto') format('svg');
    font-weight: normal;
    font-style: normal;
}

@font-face {
    font-family: 'RobotoBold';
    src: url('../lib/font/robotbold.eot');
    src: url('../lib/font/robotbold.eot?#iefix') format('embedded-opentype'),
         url('../lib/font/robotbold.woff') format('woff'),
         url('../lib/font/robotbold.ttf') format('truetype'),
         url('../lib/font/robotbold.svg#RobotoBold') format('svg');
    font-weight: normal;
    font-style: normal;
}

@font-face {
    font-family: 'RobotoLight';
    src: url('../lib/font/robotlight.eot');
    src: url('../lib/font/robotlight.eot?#iefix') format('embedded-opentype'),
         url('../lib/font/robotlight.woff') format('woff'),
         url('../lib/font/robotlight.ttf') format('truetype'),
         url('../lib/font/robotlight.svg#RobotoLight') format('svg');
    font-weight: normal;
    font-style: normal;
}

@font-face {
    font-family: 'Noodles';
    src: url('../lib/font/noodles.eot');
    src: url('../lib/font/noodles.eot?#iefix') format('embedded-opentype'),
         url('../lib/font/noodles.woff') format('woff'),
         url('../lib/font/noodles.ttf') format('truetype'),
         url('../lib/font/noodles.svg#Noodles') format('svg');
    font-weight: normal;
    font-style: normal;
}

@font-face {
    font-family: 'Serif';
    src: url('../lib/font/serif.eot');
    src: url('../lib/font/serif.eot?#iefix') format('embedded-opentype'),
         url('../lib/font/serif.woff') format('woff'),
         url('../lib/font/serif.ttf') format('truetype'),
         url('../lib/font/serif.svg#Serif') format('svg');
    font-weight: normal;
    font-style: normal;
}

@font-face {
    font-family: 'SerifItalic';
    src: url('../lib/font/serifitalic.eot');
    src: url('../lib/font/serifitalic.eot?#iefix') format('embedded-opentype'),
         url('../lib/font/serifitalic.woff') format('woff'),
         url('../lib/font/serifitalic.ttf') format('truetype'),
         url('../lib/font/serifitalic.svg#SerifItalic') format('svg');
    font-weight: normal;
    font-style: normal;
}

@font-face {
    font-family: 'Gabrielle';
    src: url('../lib/font/gabrielle.eot');
    src: url('../lib/font/gabrielle.eot?#iefix') format('embedded-opentype'),
         url('../lib/font/gabrielle.woff') format('woff'),
         url('../lib/font/gabrielle.ttf') format('truetype'),
         url('../lib/font/gabrielle.svg#Gabrielle') format('svg');
    font-weight: normal;
    font-style: normal;
}

.roboto {
	font-family: 'Noodles';
}

.robotobold {
	font-family: 'Noodles';
}

.robotolight {
	font-family: 'RobotoLight';
}

.serif {
	font-family: 'Serif';
}

.serifitalic {
	font-family: 'SerifItalic';
}

.gabrielle {
    font-family: 'Gabrielle';
}

.whitetext {
	color: #fff;
}

.redtext {
	color: #ea171f !important;
}

.lredtext {
	color: #ffafaf !important;
}
	
.lgraytext {
	color: #d2d2d2 !important;
}

.lgraytext2 {
	color: #b9b9b9 !important;
}

.mgraytext {
	color: #494949;
}

.mgraytext2 {
	color: #666;
}

.dgraytext {
	color: #1d1d1d;
}

.yellowtext {
	color: #FF0;
}

.greentext {
	color: #093;
}

.dbluetext {
	color: #022B5D;
}

.lgreentext {
	color: #00d94a;
}

.lbluetext {
	color: #59caff;
}

.blacktext {
	color: #000;
}

.orangetext {
    color: #963600;
}

.lorangetext {
    color: #ffb649;
}

.bold {
	font-weight: bold;
}

.italic {
	font-style: italic;
}

.hugetext2 {
	font-size: 36px;
	line-height: 38px;
}

.hugetext {
	font-size: 30px;
	line-height: 31px;
}

.cattext {
	font-size: 36px;
	line-height: 30px;
}

.titletext {
	font-size: 21px;
	line-height: 23px;
}

.titletext2 {
	font-size: 23px;
	line-height: 24px;
}

.cattext2 {
	font-size: 18px;
	line-height: 19px;
}

.mediumtext {
	font-size: 16px;
	line-height: 18px;
}

.mediumtext2 {
	font-size: 14px;
	line-height: 18px;
}

.mediumtext3 {
	font-size: 15px;
	line-height: 20px;
}

.artbodytext {
	font-size: 15px;
	line-height: 24px;
}

.artexcerpttext {
	font-size: 14px;
	line-height: 17px;
}

.smalltext2 {
	font-size: 13px;
	line-height: 14px;
}

.smalltext {
	font-size: 12px;
	line-height: 18px;
}

.vsmalltext {
	font-size: 11px !important;
}

.tinytext {
	font-size: 9px !important;
}

.letterspace {
	letter-spacing: 1px;
}

.captalize {
	text-transform: capitalize;
}

.nodecor {
	text-decoration: none !important;
}

.antiitaly {
	font-style: normal !important;
}

.cursorpoint {
	cursor: pointer;
}

.blinked {
    text-decoration: blink !important;
}

.underlined {
    text-decoration: underline !important;
}

/* FLOAT */

.clearboth {
	clear: both;
}

.clearright {
	clear: right;
}

.floatleft {
	float: left !important;
}

.floatright {
	float: right !important;
}

/* SHADOW */

.downshadow {
    -webkit-box-shadow: 1px 11px 10px 0px rgba(0,0,0,0.28);
    -moz-box-shadow: 1px 11px 10px 0px rgba(0,0,0,0.28);
    box-shadow: 1px 11px 10px 0px rgba(0,0,0,0.28);
}

.upshadow {
    -webkit-box-shadow: 1px 0px 10px 0px rgba(0,0,0,0.75);
    -moz-box-shadow: 1px 0px 10px 0px rgba(0,0,0,0.75);
    box-shadow: 1px 0px 10px 0px rgba(0,0,0,0.75);
}

.insetupshadow {
    -webkit-box-shadow: inset 1px 4px 10px 0px rgba(0,0,0,0.28);
    -moz-box-shadow: inset 1px 4px 10px 0px rgba(0,0,0,0.28);
    box-shadow: inset 1px 4px 10px 0px rgba(0,0,0,0.28);
}

.txtshadow {
    text-shadow: 2px 2px rgba(0,0,0,0.75);
}

/* COLUMN */

.twocolumn {
    -webkit-column-count: 2;
    -moz-column-count: 2;
    column-count: 2;
    -webkit-column-gap: 20px;
    -moz-column-gap: 20px;
    column-gap: 20px;
}
    
/* MARGIN AND PADDING */

.valigntop {
	vertical-align: top;
}

.centermargin {
	margin: 0px auto;
}

.rightmargin {
	margin: 0px 0px 0px auto;
}

.nomargin {
	margin: 0px !important;
}

.nomargintop {
	margin-top: 0px !important;
}

.nomargintopbot {
	margin-top: 0px !important;
	margin-bottom: 0px !important;
}

.margintopbot20 {
	margin-top: 20px !important;
	margin-bottom: 20px !important;
}

.nomarginbottom {
	margin-bottom: 0px !important;
}

.marginlr10 {
	margin-left: 10px !important;
	margin-right: 10px !important;
}

.paddingtop10 {
	padding-top: 10px !important;
}

.paddingtop45 {
	padding-top: 45px !important;
}

.paddingtop55 {
	padding-top: 55px !important;
}

.margintop10 {
	margin-top: 10px !important;
}

.margintop15 {
	margin-top: 15px;
}

.margintop25 {
	margin-top: 25px;
}

.margintop30 {
	margin-top: 30px;
}

.margintop45 {
	margin-top: 45px;
}

.margintop50 {
	margin-top: 50px;
}

.margintop3 {
	margin-top: 3px;
}

.margintop100 {
	margin-top: 100px;
}

.marginbottom2 {
	margin-bottom: 2px;
}

.marginbottom3 {
	margin-bottom: 3px;
}

.marginbottom5 {
	margin-bottom: 5px !important;
}

.marginbottom12 {
	margin-bottom: 12px;
}

.marginbottom15 {
	margin-bottom: 15px;
}

.marginbottom10 {
	margin-bottom: 10px;
}

.marginbottom20 {
	margin-bottom: 20px;
}

.marginbottom25 {
	margin-bottom: 25px;
}

.marginbottom30 {
	margin-bottom: 30px;
}

.marginright5 {
	margin-right: 5px;
}

.marginright10 {
	margin-right: 10px;
}

.marginright15 {
	margin-right: 15px;
}

.marginright20 {
	margin-right: 20px;
}

.marginright30 {
	margin-right: 30px;
}

.inlinefirst {
	margin-left: 0px !important;
}

.topfirst {
	margin-top: 0px !important;
	border-top: none !important;
}

/* BG AND BORDER */

.blkbg {
	background-color: #000 !important;
	color: #FFF;
}

.redbg {
	background-color: #ea171f !important;
}

.redbgarrow {
	background: url(../images/arrowup.png) bottom center no-repeat #ea171f !important;
}

.whitebg {
	background-color: #FFF !important;
}

.dwhitebg {
	background-color: #EEE !important;
}

.blkbg2 {
	background-color: #000;
}

.blkbg3 {
	background-color: #1c1610;
}

.lyellowbg {
	background-color: #FFC;
}

.redborder {
	background-color: #ea171f !important;
	height: 4px;
	width: 314px;
}

.twoborder {
	border: 2px dotted #000 !important;
}

.dropshadow {
	-webkit-box-shadow: 10px 10px 5px -6px rgba(255,255,255,0.75);
	-moz-box-shadow: 10px 10px 5px -6px rgba(255,255,255,0.75);
	box-shadow: 10px 10px 5px -6px rgba(255,255,255,0.75);
}

/* DIV PROPERTY */

.hrborder {
    border-top: 1px solid #e0e0e0;
    height: 3px;
    margin-top: 4px;
}

.topbotborder {
	border: 1px solid #e0e0e0;
	border-left: none;
	border-right: none;
}

.topborder {
    border-top: 1px solid #e0e0e0;
}

.nobg {
	background: none !important;
}

.noborder {
	border: none !important;
}

.nobordertop {
	border-top: none !important;
}

.invisible {
	display: none !important;
}

.visible {
	display: block !important;
}

.width100per {
	width: 100%;
}

.width95per {
	width: 95%;
}

.width50 {
	width: 50px;
}

.width55 {
	width: 55px;
}

.width75 {
	width: 75px;
}

.width85 {
	width: 75px;
}

.width80 {
	width: 80px;
}

.width95 {
	width: 95px;
}

.width135 {
	width: 135px;
}

.width160 {
	width: 160px;
}

.width200 {
	width: 200px;
}

.width250 {
	width: 250px;
}

.width300 {
	width: 300px;
}

.width430 {
	width: 430px;
}

.minheight150 {
    min-height: 150px;
}

.minheight350 {
    min-height: 350px;
}

.width90per {
	width: 90%;
}

.nopadding {
	padding: 0px;
}

.padding3 {
	padding: 3px;
}

.padding7 {
	padding: 7px;
}

.padding10 {
	padding: 10px;
}

.padding510 {
	padding: 5px 10px;
}

.tbpadding10 {
	padding: 10px 0px !important;
}

.inline {
    display: inline;
}

.inlineblock {
	display: inline-block;
	vertical-align: bottom;
	margin-left: 90px;
}

.circlediv {
	display: inline-block;
	height: 16px;
	width: 18px;
	-webkit-border-radius: 16px;
	-moz-border-radius: 16px;
	border-radius: 16px;
	background: #1d1d1d;
	margin-right: 5px;
	vertical-align: top;
	text-align: center;
	padding: 8px;
}

.circlediv2 {
	display: inline-block;
	height: 24px;
	width: 24px;
	-webkit-border-radius: 24px;
	-moz-border-radius: 24px;
	border-radius: 24px;
	background: #d2d2d2;
	margin: 15px 5px;
	vertical-align: top;
	text-align: center;
	padding: 8px;
}

.sqrdiv {
	display: inline-block;
	height: 25px;
	background: #1d1d1d;
	margin-right: 5px;
	vertical-align: top;
	text-align: center;
	padding: 8px 8px 0px 8px;1
}

.balloonholder, .balloonholderrev {	
	margin: 10px 6px 0px 6px;
	display: inline-block;
	min-height: 55px;
	height: auto;
	text-align: center;
	vertical-align: top;
	cursor: pointer;
}

.balloonholder {
	background: url(../images/redbtip.png) bottom center no-repeat;
}	

.balloonholderrev {
	background: url(../images/redbtip2.png) bottom center no-repeat;
}	

.wballoonholder {
	margin: 10px 10px 0px 10px;
	display: inline-block;
	min-height: 55px;
	height: auto;
	text-align: center;
	vertical-align: top;
	cursor: pointer;
}	

.tballoonholder {
	display: block;
	height: auto;
	background: url(../images/redbtip.png) top center no-repeat;
	cursor: pointer;
}	

.balloonholder2 {
	background: url(../images/blkbtip.png) bottom center no-repeat !important;
}	

.tballoonholder2 {
	background: url(../images/blkbtip.png) top center no-repeat !important;
}	

.balloontop {
	display: block;
	min-height: 18px;
	height: auto;
	-webkit-border-radius: 5px;
	-moz-border-radius: 5px;
	border-radius: 5px;
	background: #ea171f;
	text-align: center;
	margin: 0px auto;
	padding: 14px;
}

.balloontop2 {
	background: #000 !important;
}

.paddright7 {	
	padding-right: 7px !important;
}

.paddright10 {	
	padding-right: 10px !important;
}
	

/* ==========================================================================
   Helper classes
   ========================================================================== */

/*
 * Image replacement
 */

.ir {
    background-color: transparent;
    border: 0;
    overflow: hidden;
    /* IE 6/7 fallback */
    *text-indent: -9999px;
}

.ir:before {
    content: "";
    display: block;
    width: 0;
    height: 150%;
}

/*
 * Hide from both screenreaders and browsers: h5bp.com/u
 */

.hidden {
    display: none !important;
    visibility: hidden;
}

/*
 * Hide only visually, but have it available for screenreaders: h5bp.com/v
 */

.visuallyhidden {
    border: 0;
    clip: rect(0 0 0 0);
    height: 1px;
    margin: -1px;
    overflow: hidden;
    padding: 0;
    position: absolute;
    width: 1px;
}

/*
 * Extends the .visuallyhidden class to allow the element to be focusable
 * when navigated to via the keyboard: h5bp.com/p
 */

.visuallyhidden.focusable:active,
.visuallyhidden.focusable:focus {
    clip: auto;
    height: auto;
    margin: 0;
    overflow: visible;
    position: static;
    width: auto;
}

/*
 * Hide visually and from screenreaders, but maintain layout
 */

.invisible {
    visibility: hidden;
}

/*
 * Clearfix: contain floats
 *
 * For modern browsers
 * 1. The space content is one way to avoid an Opera bug when the
 *    `contenteditable` attribute is included anywhere else in the document.
 *    Otherwise it causes space to appear at the top and bottom of elements
 *    that receive the `clearfix` class.
 * 2. The use of `table` rather than `block` is only necessary if using
 *    `:before` to contain the top-margins of child elements.
 */

.clearfix:before,
.clearfix:after {
    content: " "; /* 1 */
    display: table; /* 2 */
}

.clearfix:after {
    clear: both;
}

/*
 * For IE 6/7 only
 * Include this rule to trigger hasLayout and contain floats.
 */

.clearfix {
    *zoom: 1;
}

@media print,
       (-o-min-device-pixel-ratio: 5/4),
       (-webkit-min-device-pixel-ratio: 1.25),
       (min-resolution: 120dpi) {
    /* Style adjustments for high resolution devices */
}

/* ==========================================================================
   Print styles.
   Inlined to avoid required HTTP connection: h5bp.com/r
   ========================================================================== */

@media print {
}