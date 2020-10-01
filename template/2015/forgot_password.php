	<?php include(TEMP."/header.php"); ?>

    <!-- BODY -->
    
            <div id="mainsplashlog" class="mainsplashlog centertalign">  
                <div id="forgot" class="div9 minheight150">                    
                    <span id="ltitle" class="lowerlist robotobold cattext whitetext centertalign">Send My Password</span>
                    <i id="forgot_title" class="whitetext">The password will sent to your account's email address</i>
                    <form name="formforget" method="post" enctype="multipart/form-data" class="margintop25">
                        <input type="text" name="empidnum" id="empidnum" class="txtbox width250" placeholder="Username" /><br><br>
                        <input type="submit" name="btnforgot" id="btnforgot" value="Reset and Send My New Password" class="btn" />&nbsp;<input type="button" value="Cancel" class="redbtn" onClick="parent.location='<?php echo WEB; ?>'" />
                    </form>   
                    
                </div>
            </div>

    <?php include(TEMP."/footer.php"); ?>