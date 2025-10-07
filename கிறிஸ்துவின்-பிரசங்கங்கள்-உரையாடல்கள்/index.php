<?php
include 'counter.php';
if (isset($_GET['v'])) {
    $version = $_GET['v'];
} else {
    $version = "2025.01";
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="format-detection" content="telephone=no" />
    <meta name="msapplication-tap-highlight" content="no" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="/good-news-collections/கிறிஸ்துவின்-பிரசங்கங்கள்-உரையாடல்கள்/manifest.json?v=<?php echo $version; ?>">
    <meta name="theme-color" content="#2196f3">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css"/>
    <link rel="stylesheet" href="css/styles.css?v=<?php echo $version; ?>">
    <title>கிறிஸ்துவின் பிரசங்கங்கள் உரையாடல்கள் - விரிவுரை - Sermons and discourse of Jesus Tamil Bible Commentary, published by Good News, hosted by Word of God Team, www.WordOfGod.in</title>
    <meta name="description" content="கிறிஸ்துவின் பிரசங்கங்கள் உரையாடல்கள் - விரிவுரை - Sermons and discourse of Jesus Tamil Bible Commentary, published by Good News, hosted by Word of God Team, www.WordOfGod.in" />

    <script async src="https://www.googletagmanager.com/gtag/js?id=G-8ZYHRZG9B8"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', 'G-8ZYHRZG9B8');
    </script>

</head>

<body>

        <nav class="navbar navbar-default navbar-static">
            <div class="navbar-header">
                <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#b-menu-2">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="http://wordofgod.in/good-news-collections/கிறிஸ்துவின்-பிரசங்கங்கள்-உரையாடல்கள்">கிறிஸ்துவின் பிரசங்கங்கள் உரையாடல்கள்</a>
            </div>

            <!-- submenu elements for #b-menu-2 -->
            <div class="collapse navbar-collapse" id="b-menu-2">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="https://wordofgod.in/good-news-collections/கிறிஸ்துவின்-பிரசங்கங்கள்-உரையாடல்கள்"><span class="glyphicon glyphicon-home"></span> Home</a></li>
                    <li><a href="https://wordofgod.in/good-news-collections/" target="_blank"><span class="glyphicon glyphicon-gift"> </span> Good News Collections</a> </li>
                    <li><a href="https://wordofgod.in/bibledictionary/" target="_blank"><span class="glyphicon glyphicon-list-alt"> </span> Other Dictionaries</a> </li>
                    <li><a href="https://wordofgod.in/bible-wallpapers/" target="_blank"><span class="glyphicon glyphicon-picture"></span> Bible Wallpapers</a></li>
                    <li><a href="https://wordofgod.in/bible-app-modules/" target="_blank"><span class="glyphicon glyphicon-gift"></span> Bible App Modules</a></li>
                    <li><a href="https://wordofgod.in/" target="_blank"><span class="glyphicon glyphicon-book"></span> Free Christian Resources</a></li>
                </ul>
            </div><!-- /.nav-collapse-->
        </nav>
<center>
    <button id="installAppBtn" class="btn btn-primary top-button"> <span class="glyphicon glyphicon-phone"></span> Install as App</button>
</center>

<div id="container" class="container">

<center>
    <img src="assets/address.gif"><br/><br/>
    <a href="html/book name.php"><img src="assets/arrow-right.png"></a>
    <audio autoplay>
        <source src="assets/clocktow.wav" type="audio/wav">
    </audio>
</center>

<center style="padding-top: 0px; padding-bottom: 70px;">
    <?php include 'credits.php'; ?>
</center>

</div>
<div class="zoom-controls">
    <button class="zoom-btn" onclick="zoomIn()">+</button>
    <button class="zoom-btn" onclick="zoomOut()">−</button>
    <button class="zoom-btn" onclick="resetZoom()">⟳</button>
  </div>
    <footer>
	    <nav class="navbar navbar-default navbar-fixed-bottom" role="navigation">
		    <p class="navbar-text">&nbsp; &nbsp; No Copyright, Freely Copy and Distribute (as per Matthew 10:8), <a target="_blank" href="https://www.wordofgod.in/">www.WordOfGod.in</a> 
    		| Visitors: <?= $visitors2 ?>
	    	</p>
	    </nav>
    </footer>

    <script src="js/jquery-1.12.2.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/script.js?v=<?php echo $version; ?>"></script>

</body>
</html>