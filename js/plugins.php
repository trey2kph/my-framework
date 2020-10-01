<?php include("../config.php"); ?>
// JavaScript Document

function parallax(){
    var scrolled = $(window).scrollTop();
    $('.splashbg').css('top', -(scrolled * 0.2) + 'px');
}

function changeUrl(page, url) {
    if (typeof (history.pushState) != "undefined") {
        var obj = { Page: page, Url: url };
        history.pushState(obj, obj.Page, obj.Url);
    } else {
        alert("Browser does not support HTML5.");
    }
}

/* REGISTRATION */

function upperCase(strInput) {
    var theString = strInput.value;
    var strOutput = "";// Our temporary string used to build the function's output
    theString = theString.toUpperCase();  
    strOutput = theString;
    strInput.value = strOutput;
}

$(function() {	
    

    // scrollable
    $(window).scroll(function(){
        parallax();
    });


    // LATEST CYCLE
    $('#dashlatest').cycle({ 
        fx: 'scrollRight', 
        next: '#right', 
        delay: -4000, 
        easing: 'easeInOutBack' 
    });

	/* MAIN NAVIGATION */

	$("#subapp").hover(function() {		
		$(".appsubmenu").show();
	},function() {
		$(".appsubmenu").hide();
	});
                                               
    /* TABS */
                                               
    $("#tabs").tabs();

    

    /* DATE/TIME PICKER */

    $(".datepick").datepicker({ 
        dateFormat: 'mm/dd/yy',
        minDate: "08/01/2014",
        maxDate: "0D",
        changeMonth: true,
        changeYear: true
    });  

    $(".datepickchild").datepicker({ 
        dateFormat: 'yy-mm-dd',
        yearRange: "-80:+1",
        changeMonth: true,
        changeYear: true
    });  

    $(".datepick2").datepicker({ 
        dateFormat: 'yy-mm-dd',
        maxDate: "0D",
        changeMonth: true,
        changeYear: true
    }); 

    $(".datepick3").datepicker({ 
        dateFormat: 'yy-mm-dd',
        maxDate: "62D",
        changeMonth: true,
        changeYear: true
    }); 
    
    $(".datepick4").datepicker({ 
        dateFormat: 'yy-mm-dd',
        maxDate: "-1D",
        changeMonth: true,
        changeYear: true
    }); 

    $(".checkindate").datepicker({ 
        dateFormat: 'yy-mm-dd',
        minDate: "-3M",
        maxDate: "12M",
        changeMonth: true
    });

    $('.timein').timepicker({ 
        timeFormat: 'h:mmtt',
        stepHour: 1,
        stepMinute: 30,
        hourMin: 6,
	    hourMax: 22
    }); 
    
    $('.datetimepick').datetimepicker({
        dateFormat: 'yy-mm-dd',
        timeFormat: "hh:mmtt"
    });
    
    $('.timepick').timepicker({
        timeFormat: "hh:mmtt"
    });

    /* RESIZE CROP */

    $('.profile_pic').resizecrop({
        width: 100,
        height: 100,
        vertical: "center"
    });  

    $('.activity_img').resizecrop({
        width: 200,
        height: 150,
        vertical: "top"
    });  

    $('.vactivity_img').resizecrop({
        width: 400,
        height: 300,
        vertical: "top"
    });  

    $('.latestpic').resizecrop({
        width: 300,
        height: 250,
        vertical: "top"
    });   

    $('.album_thumb').resizecrop({
        width: 194,
        height: 150,
        vertical: "center"
    });   

    $('.picture_thumb').resizecrop({
        width: 194,
        height: 150,
        vertical: "center"
    });

    $('.pixpic').resizecrop({
        width: 100,
        height: 75,
        vertical: "center"
    });  

    $('.smallimg').resizecrop({
        width: 30,
        height: 30,
        vertical: "center"
    });  

    $(".shakelog").on("click", function() {	
        $("html, body").animate({ scrollTop: 0 }, 100);
        $('#errortd').html('<span class="redtext mediumtext2 bold">Please log-in</span>'); 
        $('.loginheader').effect('bounce', {times: 3, distance: 10}, 420); 
		return false;
    });

    $("#username").bind('keyup', function (e) {
        if (e.which >= 97 && e.which <= 122) {
            var newKey = e.which - 32;
            e.keyCode = newKey;
            e.charCode = newKey;
        }
    
        $("#username").val(($("#username").val()).toUpperCase());
    });

	$("#username").on("keypress", function(e) {
        if (e.keyCode == 13) {
            username = $("#username").val();
			password = $("#password").val();
		    $.ajax(
		    {
		        url: "<?php echo WEB; ?>/lib/requests/login.php",
	            data: "username=" + username + "&password=" + password,
	            type: "POST",
		        complete: function(){
		        	$("#loading").hide();
		    	},
		        success: function(data) {
		        	if (data == 0) { 
		        		//$('#errortd').html('<span class="redtext mediumtext2 bold">Access denied</span>'); 
                        $('.mainsplashlog').css({'margin-right' : '0px'}); 
		        		$('.mainsplashlog').effect('shake', {times: 3, distance: 20}, 420); 
		        	}
		        	else { 
		        		window.location.href='<?php echo WEB; ?>';
		        	}
		        }
		    })
        }
	});

	$("#password").on("keypress", function(e) {
        if (e.keyCode == 13) {
            username = $("#username").val();
            username = username.toUpperCase();
			password = $("#password").val();
		    $.ajax(
		    {
		        url: "<?php echo WEB; ?>/lib/requests/login.php",
	            data: "username=" + username + "&password=" + password,
	            type: "POST",
		        complete: function(){
		        	$("#loading").hide();
		    	},
		        success: function(data) {
		        	if (data == 0) { 
		        		//$('#errortd').html('<span class="redtext mediumtext2 bold">Access denied</span>'); 
                        $('.mainsplashlog').css({'margin-right' : '0px'}); 
		        		$('.mainsplashlog').effect('shake', {times: 3, distance: 20}, 420); 
		        	}
		        	else { 
		        		window.location.href='<?php echo WEB; ?>';
		        	}
		        }
		    })
        }
	});

	$("#btnlogin").on("click", function() {	
		username = $("#username").val();
		password = $("#password").val();
	    $.ajax(
	    {
	        url: "<?php echo WEB; ?>/lib/requests/login.php",
            data: "username=" + username + "&password=" + password,
            type: "POST",
	        complete: function(){
	        	$("#loading").hide();
	    	},
	        success: function(data) {
	        	if (data == 0) { 
	        		//$('#errortd').html('<span class="redtext mediumtext2 bold">Access denied</span>');
                    $('.mainsplashlog').css({'margin-right' : '0px'}); 
		            $('.mainsplashlog').effect('shake', {times: 3, distance: 20}, 420); 
	        	}
	        	else {                     
	        		window.location.href='<?php echo WEB; ?>';
	        	}
	        }
	    })
	});

});