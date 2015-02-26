<?php
require_once(__DIR__ . "/../model/config.php");
?>
<link rel="icon" href="http://fc08.deviantart.net/fs70/i/2012/091/d/9/troll_face_ios_style_icon_image_by_farias2696-d4unc2r.png" type="image/png">
<link type="text/css" rel="stylesheet" href="Design.css">
<link type="text/css" rel="stylesheet" href="css/bootstrap-theme.css">
<link type="text/css" rel="stylesheet" href="css/bootstrap.css">

<h1>Register</h1>

<script type="text/javascript"
        src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script></div>
<div class="open"> <span class="cls"></span> <span>
        <ul class="sub-menu ">
            <li> <a href="index.php">Home</a> </li>
            <li> <a href="login.php">Login</a> </li>
            <li> <a href="post.php">Post</a> </li>
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

<form method="post" action="<?php echo $path . "controller/create-user.php" ?>">
    <div class="container">
        <div class="row">
            <div class="col-xs-2">
            </div>
            <div class="col-xs-7"> 
                <div class="form-group">
                    <label for="email" class="col-sm-2 control-label"></label>
                    <div class="col-sm-10">
                        <input type="text" name="email" class="form-control" id="inputEmail3" placeholder="Email">
                    </div>
                </div>
                <div class="form-group">
                    <label for="username" class="col-sm-2 control-label"></label>
                    <div class="col-sm-10">
                        <input type="text" name="username" class="form-control" id="inputEmail3" placeholder="username">
                    </div>
                </div>
                <div class="form-group">
                    <label for="password" class="col-sm-2 control-label"></label>
                    <div class="col-sm-10">
                        <input type="password" name="password" class="form-control" id="inputPassword3" placeholder="Password">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <div>
                            <label>

                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-default">Register</button>
                    </div>
                </div>
            </div>
        </div>
    </div>  
</form>