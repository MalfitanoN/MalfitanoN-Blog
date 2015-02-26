<?php
 require_once(__DIR__ . "/../model/config.php");
 require_once(__DIR__ . "/../controller/login-verify.php");
 
 if (!authenticateUser()){
     header("Location: " . $path . "index.php");
     die();
 }
 
?>

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
		$(document).delegate('.open', 'click', function(event){
			$(this).addClass('oppenned');
			event.stopPropagation();
		})
		$(document).delegate('body', 'click', function(event) {
			$('.open').removeClass('oppenned');
		})
		$(document).delegate('.cls', 'click', function(event){
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
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

<form method="post" action="<?php echo $path . "controller/create-post.php"?>">
    <div>
        <label for="title">Title: </label>
        <input type="text" name="title" />
    </div>
    
    
    <div>
        <label for="post">Post: </label>
        <textarea name="post"></textarea>
    </div>
    
    <div>
        <button type="submit">Submit</button>
    </div>
</form>