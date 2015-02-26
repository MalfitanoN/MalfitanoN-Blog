<?php
//links config file and the login verify page
require_once(__DIR__ . "/../model/config.php");
require_once(__DIR__ . "/../controller/login-verify.php");


//if authenticated user it will go to index
if (!authenticateUser()) {
    header("Location: " . $path . "index.php");
    die();
}
?>

<!--this will link bootstrap and css-->
<link rel="icon" href="http://fc08.deviantart.net/fs70/i/2012/091/d/9/troll_face_ios_style_icon_image_by_farias2696-d4unc2r.png" type="image/png">
<link type="text/css" rel="stylesheet" href="Design.css">
<link type="text/css" rel="stylesheet" href="css/bootstrap-theme.css">
<link type="text/css" rel="stylesheet" href="css/bootstrap.css">

<!--title-->
<h1>Create a Blog Post</h1>

<script type="text/javascript"
        src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script></div>
<div class="open"> <span class="cls"></span> <span>
        <ul class="sub-menu ">
            <li> <a href="index.php">Home</a> </li>
            <li> <a href="login.php">Login</a> </li>
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

<form method="post" action="<?php echo $path . "controller/create-post.php" ?>">

    <div class="container">
        <div class="row">
            <div class="col-xs-3">
            </div>
            <div class="col-xs-6"> 
                <input type="text" name="title" class="form-control" placeholder="Title">
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <div>
                            <label>

                            </label>
                        </div>
                    </div>
                </div>
                <textarea name="post" class="form-control" placeholder="Text" rows="3"></textarea>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <div>
                            <label>

                            </label>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-default">Post to Blog</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>