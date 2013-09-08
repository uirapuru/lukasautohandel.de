<!DOCTYPE html>
<html lang="<?= $sf_user->getCulture(); ?>">
    <head>
        <title>Home</title>
        <meta charset="utf-8">
        <meta name = "format-detection" content = "telephone=no" />
        <meta name="description" content="Lukas Authohandel">
        <meta name="keywords" content="auto">
        <meta name="author" content="Grzegorz 'Uirapuru' Kaszuba <uirapuruadg@gmail.com> dende.com.pl">

        <?= include_stylesheets(); ?>

        <link rel="icon" href="/images/favicon.ico" type="image/x-icon">
        <link rel="shortcut icon" href="/images/favicon.ico" type="image/x-icon" />

        <?= include_javascripts(); ?>

        <!--[if (gt IE 9)|!(IE)]><!-->
        <script type="text/javascript" src="/js/jquery.mobile.customized.min.js"></script>
        <!--<![endif]-->

        <script>
            jQuery(document).ready(function() {
//                $('.form-style').jqTransform();
            });
            $(window).load(function() {
                $().UItoTop({easingType: 'easeOutQuart'});
            });
            jQuery
            $(window).load(function() {
                jQuery('#slide').camera({
                    pagination: false,
                    navigation: false,
                    transPeriod: 2000,
                    fx: 'simpleFade',
                    time: 7000
                });
            });
        </script>
        <!--[if lt IE 8]>
           <div style=' clear: both; text-align:center; position: relative;'>
             <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
               <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
            </a>
          </div>
        <![endif]-->
        <!--[if lt IE 9]>
                <link href='http://fonts.googleapis.com/css?family=Orbitron:400' rel='stylesheet' type='text/css'>
            <link href='http://fonts.googleapis.com/css?family=Orbitron:700' rel='stylesheet' type='text/css'>
                <script src="/js/html5.js"></script>
                <link rel="stylesheet" href="css/ie.css"> 
            
        <![endif]-->
    </head>
    <body>
        <div class="main">


            
            <!-- Header -->
            <?php include_component("default", "menuHorizontal") ?>

            <!-- Content -->
            <section id="content" class="main-content">
                <div class="container_12">
                    <?php echo get_slot("header"); ?>

                    <?php echo $sf_content; ?>
                    <div class="clear"></div>
                </div>  
            </section> 
            <!-- Footer -->
            <footer>
                <div class="container_12">
                    <article class="grid_12">
                        <div class="inner-block">Lucas Autohandel  &copy; <?= date("Y"); ?></div>
                    </article>
                    <div class="clear"></div>
                </div>
            </footer>
            <!-- Footer -->
        </div>    
    </body>
</html>