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
    <body style="margin: 0; padding: 0;">
        <div class="navbar">
            <div class="navbar-inner">
                <div class="container">
                    <a class="brand" href="<?php echo url_for("@homepage"); ?>">
                        ThomasCloud Admin Panel
                    </a>
                    <?php if ($sf_user->isAuthenticated()): ?>
                        <ul class="nav">
                            <li><a href="<?php echo url_for("@news"); ?>">Newsy</a></li>
                            <li><a href="<?php echo url_for("@schedule"); ?>">Kalendarz</a></li>
                            <li><a href="<?php echo url_for("@video"); ?>">Wideo</a></li>
                        </ul>
                        <ul class="nav pull-right">
                            <li><a href="<?php echo url_for("@sf_guard_signout"); ?>">wyloguj</a></li>
                        </ul>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="container">
            <?php echo $sf_content ?>
        </div>
    </body>
</html>