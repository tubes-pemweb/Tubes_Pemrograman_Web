<!DOCTYPE html>
<html>
<head></head>
<body>
<!--header-->
<div id="topbanner">
            <!--logo-->
            <a href="<?php echo base_url(); ?>index.php/c_news/">
            <img id="logo" src="<?php echo base_url(); ?>images/logo.png" alt="logo"><a>

            <!--signin section-->
            <div id="signinDiv" class="topbarSection">
            <a href="<?php echo base_url(); ?>index.php/c_news/login">
                <img id="signinImage" src="<?php echo base_url(); ?>images/signin.png" alt="signin">
                <span id="signinText"> Sign in</span><a>
            </div>

            <!--others section-->
            <div class="topbarSection topbarMenu">
                <a href="<?php echo base_url(); ?>index.php/c_news/news"> News</a>
            </div>
            <div class="topbarSection topbarMenu">
                <a href="<?php echo base_url(); ?>index.php/c_news/sport">Sport</a>
            </div>
            <div class="topbarSection topbarMenu">
                <a href="<?php echo base_url(); ?>index.php/c_news/weather">Weather</a>
            </div>
            <div class="topbarSection topbarMenu">
                <a href="http://">Shop</a>
            </div>
            <div class="topbarSection topbarMenu">
                <a href="http://">Earth</a>
            </div>
            <div class="topbarSection topbarMenu">
                <a href="<?php echo base_url(); ?>index.php/c_news/travel">Travel</a>
            </div>
            <div class="topbarSection topbarMenuMore">
                <a href="http://">More</a>
                <a href="http://"><img id="moreArrow" src="<?php echo base_url(); ?>images/more.png" alt="more"></a>
            </div>

            <!--Search section-->
            <div class="topbarSection">
                <input id="searchBar" type="text" placeholder="Search">
                <input type="image" id="searchIcon" src="<?php echo base_url(); ?>images/search.png" alt="search">
            </div>
        </div>
    </body>
</html>
