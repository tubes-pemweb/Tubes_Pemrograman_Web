<!DOCTYPE html>
<html>
    <head></head>
    <body>
        <div id="topbanner">
            <!--logo-->
            <a href="<?php echo base_url(); ?>index.php/c_news/">
            <img id="logo" src="<?php echo base_url(); ?>images/logo.png" alt="logo"><a>

            <!--signin section-->
            <div id="signinDiv" class="topbarSection">
                <img id="signinImage" src="<?php echo base_url(); ?>images/signin.png" alt="signin">
                <a href=""><span id="signinText"> Sign in</span><a>
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
                <a href="">Earth</a>
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

        <!--menu bar container-->
        <div class="clear"></div>

        <div class="menuBarContainer">
        <a href="<?php echo base_url(); ?>index.php/c_news/"><h1>NEWS</h1><a>
        </div>

        <!--menu bar container 2-->
        <div class="clear"></div>
        <div class="menuBarContainer2">
            <div class="container2menu home">
                <a href="http://">Home</a>
            </div>
            <div class="container2 container2menu">
                <a href="http://">Video</a>
            </div>
            <div class="container2 container2menu">
                <a href="http://">World</a>
            </div>
            <div class="container2 container2menu">
                <a href="http://">Asia</a>
            </div>
            <div class="container2 container2menu">
                <a href="http://">UK</a>
            </div>
            <div class="container2 container2menu">
                <a href="http://">Business</a>
            </div>
            <div class="container2 container2menu">
                <a href="<?php echo base_url(); ?>index.php/c_news/tech">Tech</a>
            </div>
            <div class="container2 container2menu">
                <a href="http://">Science</a>
            </div>
            <div class="container2 container2menu">
                <a href="http://">Magazine</a>
            </div>
            <div class="container2 container2menu">
                <a href="http://">Entertainment & Arts</a>
            </div>
            <div class="container2 container2menu">
                <a href="http://">Health</a>
            </div>
            <div class="container2 container2menu">
                <a href="http://">World News TV</a>
            </div>
            <div class="container2 container2menu">
                <a href="http://">More</a>
                <a href="http://"><img id="con2more" src="<?php echo base_url(); ?>images/more3.png" alt="moreicon"></a>
            </div>
        </div>
    </body>
</html>
