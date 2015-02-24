<?php
//This connects the header.php page to this page
    require_once(__DIR__ . '/../view/header.php');
    require_once(__DIR__ . '/../model/config.php');
?>

<nav>
    <ul>
        <!--this is so it will link to the Blog post  form and this can be modified at any time-->
        <li><a href="<?php echo $path . "post.php"?>">Blog Post Form</a></li>
    </ul>
</nav>