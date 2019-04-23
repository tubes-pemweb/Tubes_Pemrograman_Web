<!DOCTYPE html>
<html>
<head>
	<title>BBC - Homepage</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/bbc_home.css">
</head>
<body>
        <!--welcome & time-->
        <div class="clear"></div>

        <div class="menuBarContainer">
            <h1>Welcome to BBC.com<span id="time"></span></h1>
            <script>
				var d = new Date();
				document.getElementById("time").innerHTML = d.toDateString();
			</script>
        </div>

        <!--page container part/ Article part-->
        <div class="clear"></div>

    	<div class="headline">
    	<!--headline-->
        <div class="gallery_main">
 		 <a target="_blank" href="https://www.bbc.com/news/world-asia-48016994">
		    <img src="<?php echo base_url(); ?>images/home/headline_main.jpg" alt="Sri Lankan military inspect St Sebastian church where a bomb blast took place in the town of Negombo, Sri Lanka, on April 22 2019">
 		 </a>
 		 <div class="desc">
 		  <h3>Sri Lanka attacks 'linked to foreign network'</h3>
 		  <p> Suicide bomb attacks on churches and hotels on Easter Sunday left 290 dead and hundreds injured.</p>
 		</div>
		</div>

		<div class="gallery">
		  <a target="_blank" href="https://www.bbc.com/news/world-asia-48016994">
		    <img src="<?php echo base_url(); ?>images/home/headline1.jpg" alt="Kochikade Colombo">
		  </a>
		  <div class="desc"><h3> Latest: Sri Lanka reels from deadly attacks </h3></div>
		</div>

		<div class="gallery">
		  <a target="_blank" href="https://www.bbc.com/news/world-africa-48011113">
		    <img src="<?php echo base_url(); ?>images/home/headline2.jpg" alt="Gorillas posing for selfie in Virunga National Park, DR Congo">
		  </a>
		  <div class="desc"><h3>Gorillas pose for selfie with rescuers</h3></div>
		</div>

		<div class="gallery">
		  <a target="_blank" href="http://www.bbc.com/culture/story/20190422-game-of-thrones-episode-2-series-8-five-stars">
		    <img src="<?php echo base_url(); ?>images/home/headline3.jpg" alt="(Credit: HBO)">
		  </a>
		  <div class="desc"><h3>Five stars for Game of Thrones’ latest</h3></div>
		</div>

		<div class="gallery">
		  <a target="_blank" href="http://www.bbc.com/capital/story/20190422-how-the-ikea-effect-subtly-influences-how-you-spend">
		    <img src="<?php echo base_url(); ?>images/home/headline4.jpg" alt="(Credit: Getty Images)">
		  </a>
		  <div class="desc"><h3>What is 'the IKEA effect'?</h3></div>
		</div>		
	</div>

        <!--this is our whole page-->
        <div class="clear"></div>
        <div id="pageContainer">
            <hr id="endHr2">
            <div class="clear"></div>
            <!--news headlines-->
            <h2 id="news">NEWS</h2>

            <!--this is our article container which will be divided into more part-->
            <div id="articleContainer">
            <div class="clear"></div>

                <!--article part-->
			 	<div class="gallery_alt">
				  <a target="_blank" href="https://www.bbc.com/news/world-middle-east-48011496">
				    <img src="<?php echo base_url(); ?>images/home/news1.jpg" alt="File photo showing Iranian oil tanker docked at the oil facility in the Khark Island (12 March 2017)">
				  </a>
				  <div class="desc">
				   <h3>US to end Iran oil sanctions exemptions</h3>
 		  			<p>The move, which could affect five countries, is intended "to bring Iran's oil exports to zero".</p>
 					</div>
				</div>

				<div class="gallery_alt">
				  <a target="_blank" href="<?php echo base_url(); ?>http://www.bbc.com/travel/story/20190422-the-swiss-language-that-few-know">
				    <img src="<?php echo base_url(); ?>images/home/news2.jpg" alt="Volodymyr Zelensky celebrates in Kiev. 21 April 2019">
				  </a>
				  <div class="desc">
			  		<h3>Comedian wins Ukrainian presidency</h3>
 		  			<p>Political novice Volodymyr Zelensky wins by a landslide as incumbent Petro Poroshenko admits defeat.</p>
 		  		</div>
				</div>

				<div class="gallery_alt">
				  <a target="_blank" href="https://www.bbc.com/news/world-europe-48012965">
				    <img src="<?php echo base_url(); ?>images/home/news3.jpg" alt="Greta Thunberg">
				  </a>
				  <div class="desc">
				  		<h3>Greta Thunberg: 'Climate fight will never stop' </h3>
	 		  			<p>Greta Thunberg, the 16-year-old Swedish activist, addresses the Extinction Rebellion protest in London.</p>
				  </div>
				</div>
            </div>
        </div>
		
		<div class="clear"></div>
		<div id="pageContainer">
			<hr id="endHr2">
			<div class="clear"></div>
			<!--sport headlines-->
			<h2 id="sport">SPORT</h2>

            <!--this is our article container which will be divided into more part-->
            <div class="clear"></div>
            <div id="articleContainer">

                <!--article part-->
			 	<div class="gallery_alt">
				  <a target="_blank" href="<?php echo base_url(); ?>https://www.bbc.com/sport/cricket/48015702">
				    <img src="<?php echo base_url(); ?>images/home/sport1.jpg" alt="Steve Smith in action for Rajasthan Royals">
				  </a>
				  <div class="desc">
				   <h3>Rajasthan Royals v Delhi Capitals - IPL scorecard </h3>
 		  			<p>Full scorecard from the IPL game between Rajasthan Royals and Delhi Capitals in Jaipur.</p>
 					</div>
				</div>

				<div class="gallery_alt">
				  <a target="_blank" href="<?php echo base_url(); ?>https://www.bbc.com/sport/football/47924121">
				    <img src="<?php echo base_url(); ?>images/home/sport2.jpg" alt="Jurgen Klopp">
				  </a>
				  <div class="desc">
			  		<h3>Liverpool motivated by fans - Klopp</h3>
 		  			<p>Liverpool are not simply motivated by the "Holy Grail" of a first Premier League title win, says manager Jurgen Klopp</p>
 		  		</div>
				</div>

				<div class="gallery_alt">
				  <a target="_blank" href="https://www.bbc.com/sport/football/48015841">
				    <img src="<?php echo base_url(); ?>images/home/sport3.jpg" alt="Man Utd trio Anthony Martial, Nemanja Matic and Paul Pogba look dejected during their defeat at Everton">
				  </a>
				  <div class="desc">
				  		<h3>'Man Utd sucked into vacuum of negativity'</h3>
	 		  			<p>Manchester United's lack of desire as they lost 4-0 at Everton raises questions as to whether players are eyeing moves elsewhere, says MOTD2 pundit Jermaine Jenas.</p>
				  </div>
				</div>
            </div>
        </div>
        <div class="clear"></div>
       
    </body>

</html>