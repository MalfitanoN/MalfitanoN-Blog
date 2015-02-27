<?php
//links cofig file here
require_once(__DIR__ . "/../model/config.php");
?>

<!--links bootstrap and css-->
<link rel="icon" href="http://fc08.deviantart.net/fs70/i/2012/091/d/9/troll_face_ios_style_icon_image_by_farias2696-d4unc2r.png" type="image/png">
<link type="text/css" rel="stylesheet" href="Design.css">
<link type="text/css" rel="stylesheet" href="css/bootstrap-theme.css">
<link type="text/css" rel="stylesheet" href="css/bootstrap.css">

<!--title-->
<h1>Login</h1>

<!--this is for the links in the nav bar-->
<div class="open"> <span class="cls"></span> <span>
        <ul class="sub-menu ">
            <li> <a href="index.php">Home</a> </li>
            <li> <a href="post.php">Post</a> </li>
            <li> <a href="register.php">Register</a> </li>
            <li><a href="controller/logout-user.php">Logout</a></li>
        </ul>
    </span> <span class="cls"></span> </div>

<!--this is to link the jquery to this page-->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

<!--more js for nav bar-->
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

<!--this is js for the nav bar-->
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

<!--this is a redirect to the login-user-->
<form method="post" action="<?php echo $path . "controller/login-user.php" ?>">
    <div class="container">
        <div class="row">
            <div class="col-xs-2">
            </div>
            <div class="col-xs-7">  
                <!--this  is the username box-->
                <div class="form-group">
                    <label for="username" class="col-sm-2 control-label"></label>
                    <div class="col-sm-10">
                        <input type="text" name="username" class="form-control" id="inputEmail3" placeholder="Username">
                    </div>
                </div>
                <!--password text box-->
                <div class="form-group">
                    <label for="password" class="col-sm-2 control-label"></label>
                    <div class="col-sm-10">
                        <input type="password" name="password" class="form-control" id="inputPassword3" placeholder="Password">
                    </div>
                </div>
                <!--this is the remember me box-->
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox"> Remember me
                            </label>
                        </div>
                    </div>
                </div>
                <!--this is the sign in button-->
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-default">Sign in</button>
                    </div>
                </div>
            </div>
        </div>
    </div>  
</form>
