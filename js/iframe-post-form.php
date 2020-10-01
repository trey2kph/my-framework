<?php include("../config.php"); ?>
// JavaScript Document

$(function ()
{
    var pagenum = $('#pagenum').val();

    /* FORGOT PASSWORD */

    $('#forgot form').iframePostForm
	({
		json : true,
		post : function ()
		{
			var forgot_msg;
			
			if (!$('.forgot_msg').length)
			{
				$('#forgot_title').after('<div class="forgot_msg" style="display:none; margin-top:10px; padding:10px; text-align:center" />');
			}
            
            if ($('#empidnum').val().length)
            {
                $('.forgot_msg')
                .html('<i class="fa fa-refresh fa-spin fa-lg"></i> Processing&hellip;')
                .css({
                    color : '#006100',
                    background : '#c6efce',
                    border : '2px solid #006100',
                    height : 'auto'
                })
                .slideDown();
            }
            else
            {
                $('.forgot_msg')
                    .html('Employee ID is required.')
                    .css({
                        color : '#9c0006',
                        background : '#ffc7ce',
                        border : '2px solid #9c0006',
                        height : 'auto'
                    })
                    .slideDown()
                    .effect('shake', {times: 3, distance: 5}, 420); 
                
                return false;
            }           
			
		},
		complete : function (response)
		{
			var style,
				width,
				html = '';
			
			
			if (!response.success)
			{
				$('.forgot_msg').slideUp(function ()
				{
					$(this)
						.html(response.error)
						.css({
							'color' : '#9c0006',
							'background' : '#ffc7ce',
							'borderColor' : '#9c0006',
                            'margin-top' : '10px',
                            'height' : 'auto'
						})
						.slideDown();
				});
			}
			
			else
			{
				html += '<p>Your password has been successfully reset and sent you your email.</p>';				
				
				$('.forgot_msg').slideUp(function ()
				{
					$(this)
						.html(html)
						.css({
							'color' : '#006100',
							'background' : '#c6efce',
							'borderColor' : '#006100',
                            'margin-top' : '10px',
                            'height' : 'auto'
						})
						.slideDown();
				});
			}
		}
	});

    /* CHANGE PASSWORD */

    $('#fpass form').iframePostForm
	({
		json : true,
		post : function ()
		{
			var fpass_msg;
			
			if (!$('.fpass_msg').length)
			{
				$('#fpass_title').after('<div class="fpass_msg" style="display:none; padding:10px; margin-top:10px; margin-bottom:10px; text-align:center" />');
			}
            
            if ($('#opassword').val().length && $('#npassword').val().length && $('#cpassword').val().length)
            {
                $('.fpass_msg')
                .html('<i class="fa fa-refresh fa-spin fa-lg"></i> Processing&hellip;')
                .css({
                    color : '#006100',
                    background : '#c6efce',
                    border : '2px solid #006100',
                    height : 'auto'
                })
                .slideDown();
            }
            else
            {
                $('.fpass_msg')
                    .html('All fields are required.')
                    .css({
                        color : '#9c0006',
                        background : '#ffc7ce',
                        border : '2px solid #9c0006',
                        height : 'auto'
                    })
                    .slideDown()
                    .effect('shake', {times: 3, distance: 5}, 420); 
                
                return false;
            }           
			
		},
		complete : function (response)
		{
			var style,
				width,
				html = '';
			
			
			if (!response.success)
			{
				$('.fpass_msg').slideUp(function ()
				{
					$(this)
						.html(response.error)
						.css({
							'color' : '#9c0006',
							'background' : '#ffc7ce',
							'borderColor' : '#9c0006',
                            'margin-top' : '10px',
                            'height' : 'auto'
						})
						.slideDown();
				});
			}
			
			else
			{
				html += '<p>Your password has been successfully changed.</p>';				
				
				$('.fpass_msg').slideUp(function ()
				{
					$(this)
						.html(html)
						.css({
							'color' : '#006100',
							'background' : '#c6efce',
							'borderColor' : '#006100',
                            'margin-top' : '10px',
                            'height' : 'auto'
						})
						.slideDown();
				});
			}
		}
	});

});