
<?php
/**
 * Header template for the theme
 *
 * Displays all of the <head> section and everything up till <div id="main">.
 *
 * @package WordPress
 * @subpackage MTM6303_Assg2
 * @since MTM6303_Assg2 1.0
 */
//Assigning the value of session variable to the $title variable

?>

<html>
<head>
  <meta charset="UTF-8">
  <meta content="IE=edge" http-equiv="X-UA-Compatible">
  <meta content="width=device-width,initial-scale=1" name="viewport">
  <meta content="description" name="description">
  <meta name="google" content="notranslate" />
  <meta content="Mashup templates have been developped by Orson.io team" name="author">

  <!-- Disable tap highlight on IE -->
  <meta name="msapplication-tap-highlight" content="no">
  
  <link href="<?php echo get_stylesheet_directory_uri()?>/assets/apple-touch-icon.png" rel="apple-touch-icon">
  <link href="<?php echo get_stylesheet_directory_uri()?>/assets/favicon.ico" rel="icon">

 

  <title><?php echo $title;?></title>  

  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri()?>/assets/css/main.a3f694c0.css"/>
</head>

<!-- Start Body tag -->
<body>

<header>
  <nav class="navbar  navbar-fixed-top navbar-default">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle uarr collapsed" data-toggle="collapse" data-target="#navbar-collapse-uarr">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="./index.html" title="">
          <img src="./assets/images/mashuptemplate.svg" class="navbar-logo-img" alt="">
        </a>
      </div>
    
      <div class="collapse navbar-collapse" id="navbar-collapse-uarr">
      <?php wp_nav_menu( array(
       'theme_location' => 'top',
       'container_class' => 'custom-menu-class') );
     ?>
        <ul class="nav navbar-nav navbar-right">
   
          <li><a href="./index.html" title="" class="active">Home</a></li>
          <li><a href="/page.html" title=""> About</a></li>
          <li><a href="./contact.html" title=""> Contact Us </a></li>
        </ul>
      </div>
    </div>
  </nav>
</header>