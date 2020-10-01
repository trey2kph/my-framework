	<?php include(TEMP."/header.php"); ?>

    <!-- BODY -->
                
                    <div id="mainsplashlog" class="mainsplashlog lefttalign">  
                        <div id="ltitle" class="lowerlist robotobold cattext whitetext centertalign">Welcome to <?php echo SYSTEMNAME; ?></div>
                        <div class="whitetext"></div>
                        <table class="margintop15 centertalign vsmalltext" width="100%" border="0" cellpadding="0" cellspacing="0">
                            <tr>
                                <td><div class="curvebox centermargin"><input type="text" name="username" id="username" placeholder="Username" class="txtbox width95" /></div></td>
                            </tr>
                            <tr>
                                <td><div class="curvebox centermargin"><input type="password" name="password" id="password" placeholder="Password" class="txtbox width95" /></div></td>
                            </tr>
                            <tr>
                                <td><input type="submit" name="btnlogin" id="btnlogin" value="LOGIN" class="bigbtn btnlogin" />  
                            <br><a href="<?php echo WEB; ?>/forgot_password" class="lgraytext">Forgot your password</a>
                            <br><span id="errortd" class="redtext"></span>  </td>
                            </tr>                            
                        </table>                        
                    </div>

    <?php include(TEMP."/footer.php"); ?>