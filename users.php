<?PHP 
	
	add_shortcode("custom_login_form", "custom_login_form");
	function custom_login_form(){
		return wp_login_form(array("echo"=>false));
	}
	
	add_shortcode("forget_pass_form", "forget_pass_form");
	function forget_pass_form(){
		ob_start();?>
            <form name="lostpasswordform" id="lostpasswordform" action="<?php echo wp_lostpassword_url(); ?>" method="post">
        <p class="login-username">
            <label>Username or E-mail:</label>
            <input type="text" name="user_login" id="user_login" class="input" value="" size="20" tabindex="10">
        </p>
        <input type="hidden" name="redirect_to" value="<?php echo $redirect ?>">
        <p class="submit"><input type="submit" name="wp-submit" id="wp-submit" class="button-primary" value="Get New Password" tabindex="100"></p>
    </form>
	<?PHP 
		$content = ob_get_clean();	
		return $content;
	}
	
?>
<style>
/* Login page form*/
.cm_login_form{
	max-width: 515px;
    margin: 40px auto;
	position: relative;
    overflow: hidden;
    padding: 26px 24px 36px;
    -webkit-box-shadow: 2px 2px 3px rgba(0,0,0,.25);
    box-shadow: 2px 2px 3px rgba(0,0,0,.25);
    border-radius: 5px;
    border: 1px solid #ddd;
}
.cm_login_form input[type="text"], .cm_login_form input[type="password"]{
	height: 36px;
    padding: 4px 8px;
    width: 100%;
	color:#FFF;
	border: 1px solid #808080;
}
.cm_login_form .login-username input {
    background: none;
    padding-left: 10px !important;
}
.cm_login_form .login-password input {
    background: none;
    padding-left: 10px !important;
}
.cm_login_form .login-submit{
	text-align:center;
}
.cm_login_form input[type="submit"] {
	border: 0 none;
	border-radius: 5px;
	font-size: 16px;
	height: 36px;
	line-height: 36px;
	padding: 0 30px;
	-webkit-transition: all 0.3s ease 0s;
	transition: all 0.3s ease 0s;
	display: inline-block;
	background-color: #d4983e;
	color:#FFF;	
	width:100%;
	cursor:pointer;
	font-weight: 700;
}
.cm_login_form input[type="submit"]:hover {
	border: 1px solid #FFF;
	background:none;
}
.cm_login_form .forgetLink {
	color:#000;
	text-decoration: underline;
}

.forgetlinks{
	margin-top: 20px;
}
.forgetlinks a.createaccount{
	/*width: 100%;
	border: 1px solid #FFF;
	display: block;
	padding: 10px;
	text-align: center;*/
	
	border: 1px solid #fff;
	border-radius: 5px;
	font-size: 16px;
	height: 36px;
	line-height: 30px;
	padding: 0 30px;
	-webkit-transition: all 0.3s ease 0s;
	transition: all 0.3s ease 0s;
	display: inline-block;
	color: #fff;
	width: 100%;
	cursor: pointer;
	font-weight: 700;
	text-align: center;
}
.forgetlinks .forgetaccount{
	display: inline-block;
	width: 100%;
	text-align: right;
	margin-top:10px;
	color:#d4983e;
}
</style>