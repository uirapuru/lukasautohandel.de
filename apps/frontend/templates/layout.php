<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]--> 
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <?php include_http_metas() ?>
        <?php include_metas() ?>
        <?php include_title() ?>
        <link rel="shortcut icon" href="/favicon.ico" />
        <?php include_stylesheets() ?>
        <?php include_javascripts() ?>        
        <meta name="viewport" content="width=device-width">
    </head>
    <body>
      <!--[if lt IE 7]><p class=chromeframe>Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p><![endif]-->
        <header>
            <div id="top-banner" style="height: 100px; width: 100%;">
                <div class="container_16">
                    <div id="top-banner-logo-bg"><!-- tło pod logiem --></div>
                    <div id="top-banner-logo"><!-- tekst loga --></div>
                    <nav>
                        <ul>
                            <?php $routeName = $sf_context->getRouting()->getCurrentRouteName(); ?>
                            <li<?php echo $routeName == "news" ? ' class="active"' : ''; ?>><a href="<?php echo url_for("@news"); ?>"><?= __('News'); ?></a></li>
                            <li<?php echo $routeName == "bio" ? ' class="active"' : ''; ?>><a href="<?php echo url_for("@bio"); ?>"><?= __('Biografia'); ?></a></li>
                            <li<?php echo $routeName == "music" ? ' class="active"' : ''; ?>><a href="<?php echo url_for("@music"); ?>"><?= __('Muzyka'); ?></a></li>
                            <li<?php echo $routeName == "radio" ? ' class="active"' : ''; ?>><a href="<?php echo url_for("@radio"); ?>"><?= __('Radio'); ?></a></li>
                            <li<?php echo $routeName == "schedule" ? ' class="active"' : ''; ?>><a href="<?php echo url_for("@schedule"); ?>"><?= __('Kalendarz'); ?></a></li>
                            <li<?php echo $routeName == "video" ? ' class="active"' : ''; ?>><a href="<?php echo url_for("@video"); ?>"><?= __('Wideo'); ?></a></li>
                            <li<?php echo $routeName == "press" ? ' class="active"' : ''; ?>><a href="<?php echo url_for("@press"); ?>"><?= __('Press'); ?></a></li>
                            <li<?php echo $routeName == "contact" ? ' class="active"' : ''; ?>><a href="<?php echo url_for("@contact"); ?>"><?= __('Kontakt'); ?></a></li>
                        </ul>
                    </nav>
                    <div id="lang-switcher">
                        <a href="<?php echo url_for("@pl"); ?>"><img src="/images/flags/polska.jpg" alt="Polski"/></a>
                        <a href="<?php echo url_for("@en"); ?>"><img src="/images/flags/wlk-bryt.jpg" alt="English"/></a>
                    </div>
                </div>
            </div>
            <div id="middle-banner" style="height: 289px; width: 100%; background: #0c0c0c">
                <div class="container_16">
                    <div id="carousel-wrapper">
                        <div id="inner-carousel-wrapper"><img src="/images/<?= $sf_user->getCulture(); ?>/middle-banner-logo.png" /><img src="/images/middle-banner-logo-2.png" /><img src="/images/middle-banner-logo-3.png" /></div>
                    </div>
                    <nav id="carousel-nav">
                        <a href="#" id="prev-image" value="-1"></a>
                        <a href="#" id="next-image" value="1"></a>
                    </nav>
                </div>
            </div>
        </header>

        <div role="main" class="container_16">
            <div class="grid_16">
                <div class="grid_11 alpha">
                    <?php echo $sf_content ?>
                </div>
                <div class="grid_5 omega" id="sidebar">
<!--                    <img src="/images/mockup-1.png" />-->
                    <?php echo get_slot('fb') ?>
                    <?php echo get_slot('events') ?>
                    <?php echo get_slot('cloud') ?>
                </div>     
                <div class="clear"></div>
            </div>
        </div>
        <footer>
            <div class="container_16">
                <ul>
                    <li><div id="thomas-cloud-online-caption"></div></li>
                    <li><a href="<?php echo sfConfig::get("app_fb_fanpage"); ?>"><img src="/images/fb-icon.png" /></a></li>
                    <li><a href="<?php echo sfConfig::get("app_cloud_page"); ?>"><img src="/images/cloud-icon.png" /></a></li>
                    <li><a href="<?php echo sfConfig::get("app_yt_channel"); ?>"><img src="/images/yt-icon.png" /></a></li>
                    <li><a href="<?php echo sfConfig::get("app_twitter"); ?>"><img src="/images/tw-icon.png" /></a></li>
                </ul>
                <div class="clear"></div>
                <div id="under-the-foot">
                    2012 THOMAS CLOUD. All Right Reserved. Designed by: <a href="http://www.nightworks.pl">Nightworks.pl</a>
                    <img src="/images/footer-logo.png" style="margin-left: 215px"/>
                </div>
            </div>
        </footer>


<!--        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/libs/jquery-1.7.1.min.js"><\/script>')</script>-->


        <script>
            var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
                g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
                s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>
    </body>
</html>