<?php
// menu.php
$d = $_GET['d'] ?? "";
?>
        <nav class="navbar navbar-default navbar-static">
            <div class="navbar-header">
                <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#b-menu-2">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="https://wordofgod.in/good-news-collections/கிறிஸ்துவின்-பிரசங்கங்கள்-உரையாடல்கள்">கிறிஸ்துவின் பிரசங்கங்கள் உரையாடல்கள்</a>
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
<?php if ($d!="false") { ?>
<center>
    <button id="installAppBtn" class="btn btn-primary top-button"> <span class="glyphicon glyphicon-phone"></span> Install as App</button>
    <button class="btn btn-primary top-button" onclick="history.back();">
        <span class="glyphicon glyphicon-chevron-left"></span> Back
    </button>
    <button class="btn btn-primary top-button" onclick="history.forward();">
        Next <span class="glyphicon glyphicon-chevron-right"></span>
    </button>
    <a class="btn btn-primary top-button" style="height: 36px;"  href="../download.php?d=false">
        <span class="glyphicon glyphicon-download"></span> Download as PDF
    </a>
</center>
<?php } ?>

<div id="container" class="container">
