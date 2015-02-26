<link rel="icon" href="http://fc08.deviantart.net/fs70/i/2012/091/d/9/troll_face_ios_style_icon_image_by_farias2696-d4unc2r.png" type="image/png">
<link type="text/css" rel="stylesheet" href="Design.css">
<link type="text/css" rel="stylesheet" href="css/bootstrap-theme.css">
<link type="text/css" rel="stylesheet" href="css/bootstrap.css">
<link href='http://fonts.googleapis.com/css?family=Exo:800' rel='stylesheet' type='text/css'>

<div class="jumbotron" style="height: 500px;">
    <h1>
        <div class="container">
            <div class="content">
                <div class="box-with-text" id="Title">BLOG</div>
            </div>
        </div></h1>
</div>

<?php
//This connects the header.php page to this page
require_once(__DIR__ . '/controller/login-verify.php');

//This connects the header.php page to this page
require_once(__DIR__ . '/view/header.php');
if (authenticateUser()) {
//This connects the navigation.php page to this page
    require_once(__DIR__ . '/view/navigation.php');
}
//This connects the create_db.php page to this page
require_once(__DIR__ . '../controller/create-db.php');

//This connects the footer.php page to this page
require_once(__DIR__ . '/view/footer.php');

//this connects read-posts page to the index page 
require_once(__DIR__ . "/controller/read-posts.php");
?>

<script type="text/javascript"
        src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script></div>
<div class="open"> <span class="cls"></span> <span>
        <ul class="sub-menu ">
            <li> <a href="login.php">Login</a> </li>
            <li> <a href="post.php">Post</a> </li>
            <li> <a href="register.php">Register</a> </li>
            <li><a href="controller/logout-user.php">Logout</a></li>
        </ul>
    </span> <span class="cls"></span> </div>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> 
<script>
            $(document).ready(function() {
                $(document).delegate('.open', 'click', function(event) {
                    $(this).addClass('oppenned');
                    event.stopPropagation();
                })
                $(document).delegate('body', 'click', function(event) {
                    $('.open').removeClass('oppenned');
                })
                $(document).delegate('.cls', 'click', function(event) {
                    $('.open').removeClass('oppenned');
                    event.stopPropagation();
                });
            });
</script>

<script type="text/javascript">

    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-36251023-1']);
    _gaq.push(['_setDomainName', 'jqueryscript.net']);
    _gaq.push(['_trackPageview']);

    (function() {
        var ga = document.createElement('script');
        ga.type = 'text/javascript';
        ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(ga, s);
    })();

</script>