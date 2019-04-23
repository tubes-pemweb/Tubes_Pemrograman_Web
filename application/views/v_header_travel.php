<!DOCTYPE html>
<html>
<head></head>
<body>
<div id="topbanner">
		<!--gambar logo-->
		<a href="<?php echo base_url(); ?>index.php/c_news/">
		<img id="logo" src="<?php echo base_url(); ?>images/logo.png" alt="logo"><a>

		<!--bagian tombol sign in-->
		<div id="signinDiv" class="topbarSection">
			<img id="singinImage" src="<?php echo base_url(); ?>images/signin.png" alt="signin">
			<span id="singinText"> Sign In</span>	
		</div>

		<!--section yang lainnya-->
		<div class="topbarSection topbarMenu">
			<a href="<?php echo base_url(); ?>index.php/c_news/">News</a>
		</div>
		<div class="topbarSection topbarMenu">
			<a href="<?php echo base_url(); ?>index.php/c_news/sport">Sport</a>
		</div>
		<div class="topbarSection topbarMenu">
			<a href="<?php echo base_url(); ?>index.php/c_news/weather">Weather</a>
		</div>
		<div class="topbarSection topbarMenu">
			<a href="">Shop</a>
		</div>
		<div class="topbarSection topbarMenu">
			<a href="">Earth</a>
		</div>
		<div class="topbarSection topbarMenu">
			<a href="<?php echo base_url(); ?>index.php/c_news/travel">Travel</a>
		</div>
		<div class="topbarSection topMenuMore">
			<a href="">More</a>
			<a href=""><img id="moreArrow" src="<?php echo base_url(); ?>images/more.png" alt="more"></a>
		</div>

		<!--bagian search-->
		<div class="topbarSection ">
			<input id="searchBar" type="text" placeholder="Search" >
			<input type="image" id="searchIcon" src="<?php echo base_url(); ?>images/search.png" alt="search">
		</div>
	</div>

	<!--bagian iklan-->
	<div class="advertisement"></div>

	<!--gambar tangan-->
	<div class="topbar2">
		<a href="">
		<img id="tangan" src="<?php echo base_url(); ?>images/travel/hand.jpg">
		</a>
		<a href="<?php echo base_url(); ?>index.php/c_news/travel"><div class="travel" style="font-family: Helvetica; color: white; font-size: 40px">travel</div><a>
		<div class="submenu">
			<ul >
				<li style="color: white;font-size:15px">Culture</li>
				<li style="color: white;font-size:15px">Food</li>
				<a href="<?php echo base_url(); ?>index.php/c_news/discovery"><li style="color: white;font-size:15px">Discovery</li><a>
				<li style="color: white;font-size:15px">Experiences</li>
				<li style="color: white;font-size:15px">Destinations</li>
				<li style="color: white;font-size:15px">Series</li>
				<li style="color: white;font-size:15px">About us</li>
			</ul>
		</div>
</div>
</body>
</html>