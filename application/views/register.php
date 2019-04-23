
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>BBC-register</title>
	<style>
		body{
			background-image: url("<?php echo base_url('assets/images/man.jpg'); ?>");
			background-repeat: no-repeat;
			background-attachment: fixed;
			width: 100%;
			height: auto;
		}
	</style>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/regis.css">
</head>
<body>
	<div class="tombol_exit">
		<a href="<?php echo base_url() ?>index.php/c_news"><img src="<?php echo base_url() ?>assets/images/exit.png"></a>
	</div>
	<div class="kotak_login">
		<a href="<?php echo base_url() ?>index.php/c_news">
		<img src="<?php echo base_url() ?>assets/images/logo.png"><a>
		<p class="tulisan_signIn"><b>Register with the BBC</b></p>

		<form action="<?php echo site_url('c_login/Register'); ?>" method="POST">
			<label>Email</label>
			<input type="Email" name="Email" class="form_login" placeholder="Email">
			<label>Password</label>
			<input type="password" name="Password" class="form_login" placeholder="Password">

			<h5>Password need to include</h5>
			<ul type="circle">
				<li>Eight or more characters</li>
				<li>At least one letter</li>
				<li>At least one number or symbol</li>
			</ul>

			<select class="countries">
				<option>Indonesia</option>
				<option>India</option>
				<option>Malaysia</option>
				<option>Germany</option>
				<option>United states</option>
			</select>
			<p style="font-size: 10pt"> By clicking Register, you accept our <a class="link" href="#" style="color: black; text-decoration: none;"><u><b>Terms of Use</b></u></a>. Find out about our <a class="link" href="#" style="color: black; text-decoration: none;" ><u><b>Privacy and Cookies Policy</b></u></a>.</p>

			<input type="submit" class="tombol_login" value="Register">

		</form>
	</div>

	 <div id="explore">
	 	<div class="down">
            <div class="explore2" style="clear: both;">
                <p id="exploreHeading">
                    Already got a BBC account?<a href="login.html" style="color: black; text-decoration:none;"><b><span class="signin"> Sign in</span><b></a>
                </p>
                <p id="exploreHeading1">
            		Find out more about BBC accounts
            	</p>
            </div>
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
