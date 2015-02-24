         <link rel="icon" href="http://fc08.deviantart.net/fs70/i/2012/091/d/9/troll_face_ios_style_icon_image_by_farias2696-d4unc2r.png" type="image/png">
         <link type="text/css" rel="stylesheet" href="Design.css">
         <link type="text/css" rel="stylesheet" href="css/bootstrap-theme.css">
         <link type="text/css" rel="stylesheet" href="css/bootstrap.css">
    <?php
//This connects the header.php page to this page
    require_once(__DIR__ . '/controller/login-verify.php');

//This connects the header.php page to this page
    require_once(__DIR__ . '/view/header.php');
    if(authenticateUser()){
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

