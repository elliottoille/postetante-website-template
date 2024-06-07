<!DOCTYPE html>
<html>
    <head>
        <title>Postetante</title>
        <link rel="stylesheet" type="text/css" href="styles/main.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head> 
    <body>
        <div class="content">
            <div class="navigation">
                <div id="nav-bar-left">
                    <h1>POSTETANTE</h1>
                </div>
                <div id="nav-bar-right">
                    <ul>
                        <li><a href="index.php?page=pages/home.html">Home</a></li>
                        <li><a href="index.php?page=pages/posts.php">Posts</a></li>
                        <li><a href="index.php?page=pages/contact.html">Contact</a></li>
                    </ul>
                </div>
                </div>
            <div class="main-frame">
                <iframe name="main-frame" src="<?php if ( empty($_GET) ) { echo "pages/home.html"; } else { echo $_GET['page']; } ?>"></iframe>
            </div>
            <div class="footer">
                <div id="footer-bar-left">
                    <p>Made by Elliot Lewis in 2024, find this template <a href="https://github.com/elliottoille/postetante-website-template">here</a> :)</p>
                </div>
                <div id="footer-bar-right">
                    <ul>
                        <li><a href="#">Github</a></li>
                        <li><a href="#">LinkedIn</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </body>
</html>
