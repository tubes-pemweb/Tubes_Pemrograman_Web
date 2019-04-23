<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		body{
			background: url("<?php echo base_url('assets/images/man.jpg'); ?>");
			background-repeat: no-repeat;
			background-attachment: fixed;
			width: 100%;
			height: auto;
		}

	</style>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/style.css">
</head>
<body>
	<div class="tombol_exit">
		<a href="<?php echo base_url() ?>index.php/c_news"><img src="<?php echo base_url() ?>assets/images/exit.png"></a>
	</div>
	<div class="kotak_login">
		<a href="<?php echo base_url() ?>index.php/c_news">
		<img src="<?php echo base_url() ?>assets/images/logo.png"><a>
		<p class="tulisan_signIn"><b>Sing in</b></p>

		<form action="<?php echo site_url('c_login/Login'); ?>" method="post">
			<label>Email</label>
			<input type="text" name="Email" class="form_login" placeholder="Email">

			<label>Password</label>
			<input type="password" name="Password" class="form_login" placeholder="Password">

			<input type="submit" class="tombol_login" value="Sign in">

			<h3>Need help signing in?</h3>

			<hr/>
			<h2>Don't have BBC account</h2>
			<a href="<?php echo base_url(); ?>index.php/c_news/register">Register now</a>

			<br/>
			<br/>
		</form>
	</div>

	 <div id="explore">
            <div class="explore2">
                <p id="exploreHeading">
                    Find out more about BBC accounts
                </p>
            </div>
            <hr id="xHr">
            <div id="fotter">
                <p>
                    <a href="http://">Terms of Use</a>
                    <a href="http://">About the BBC</a>
                    <a href="http://">Privacy Policy</a>
                    <a href="http://">Cookies</a>
                    <a href="http://">Accessibility Help</a>
                    <a href="http://">Parental Guidance</a>
                    <a href="http://">Contact the BBC</a>
                    <a href="http://">Get Personalised Newsletters</a>
                </p>
                <p>
                    <a href="http://">Advertise with us</a>
                    <a href="http://">Ad choices</a>
                </p>
                <p>Copyright &copy 2019 BBC. The BBC is not responsible for the content of external sites.
                    <a href="http://">Read about our approach to external linking.</a>
                </p>
            </div>

        </div>

</body>
</html>
