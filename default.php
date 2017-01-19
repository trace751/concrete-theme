<!DOCTYPE html>
<html>
<head>
    <?php Loader::element('header_required'); ?>
    <meta name="viewport" content="width=device-width">
    <link href="https://fonts.googleapis.com/css?family=Arimo" rel="stylesheet">
    <link rel="stylesheet" href="<?= $view->getThemePath() ?>/main.css">
    <link rel="stylesheet" href="<?= $view->getStyleSheet('typography.css'); ?>">
</head>
<body>
<div class="<?= $c->getPageWrapperClass() ?>">
<div id="main_container">
    
    <nav id="nav_wrapper">
        <ul>
            <li><a href="#"> Home </a></li>
            <li><a href="#"> About </a></li>
            <li><a href="#"> Contact </a></li>
            
        </ul>
       <!-- <button onclick="myFunction();" type="button" class="nav_collapse">
            <span class="nav_icon_bar"></span>
            <span class="nav_icon_bar"></span>
            <span class="nav_icon_bar"></span>
        </button> -->
    </nav>
    
<header id="header_bg">
    <span class="header_content">
        <h1 class="header_title"> <? $a = new Area('Main Title');
          $a->display($c); ?> </h1>
        <p class="header_kicker"> <? $a = new Area('Main Kicker');
          $a->display($c); ?> </p>
    </span>
</header>

<section class="column_container">
    <h1 class="column_h"> <? $a = new Area('Left Column');
          $a->display($c); ?> </h1>
    <p class="column_p"> <? $a = new Area('Left Content');
          $a->display($c); ?> </p>
</section>
    
<section class="column_container">
    <h1 class="column_h"> <? $a = new Area('Middle Column');
          $a->display($c); ?> </h1>
    <p class="column_p"> <? $a = new Area('Middle Content');
          $a->display($c); ?> </p>
</section>
    
<section class="column_container">
    <h1 class="column_h"> <? $a = new Area('Third Column');
          $a->display($c); ?> </h1>
    <p class="column_p"> <? $a = new Area('Right Content');
          $a->display($c); ?> </p>
</section>
    
<section class="short_section">
            <p class="bottom_p"> <? $a = new Area('Summary Content');
          $a->display($c); ?> </p>
</section>
    
<footer class="main_footer">
    <h1 class="footer_email"> <? $a = new Area('Extra Text');
          $a->display($c); ?> </h1>
    <p class="footer_copyright"> <? $a = new Area('Copyright Text');
          $a->display($c); ?> </p>
</footer> 
</div>
</div>
<?php Loader::element('footer_required'); ?>
</body>
</html>