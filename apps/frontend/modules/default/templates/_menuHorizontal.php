<?php $routeName = $sf_context->getRouting()->getCurrentRouteName(); ?> 

<div class="container_12">
    <span class="fright langs">
        <a href="<?= url_for("@language?lang=pl"); ?>">pl</a> |
        <a href="<?= url_for("@language?lang=en"); ?>">en</a> |
        <a href="<?= url_for("@language?lang=de"); ?>">de</a>
    </span>
    <article class="grid_12">
        <div class="inner-block">
            <header>
                <div class="header-block">
                    <span class="fleft"><!-- address --></span>
                    <span class="fright">
                        +48 00 000 000 000
                    </span>
                </div>          

                <a class='txtlogo' href="<?= url_for("@homepage"); ?>">Lukas <span>Autohandel</span></a>

                <nav>
                    <ul class="sf-menu responsive-menu">
                        <li<?php
                        echo $routeName == "homepage" ? ' class="current"' : '';
                        ?>>
                            <a href="<?= url_for("@homepage"); ?>"><strong><?= __("navigation.home"); ?></strong></a>
                        </li>
                        <li<?php
                        echo $routeName == "search" ? ' class="current"' : '';
                        ?>><a href="<?= url_for("@search"); ?>"><strong><?= __("navigation.search"); ?></strong></a></li>
                        <li<?php
                        echo $routeName == "contact" ? ' class="current"' : '';
                        ?>><a href="<?= url_for("@contact"); ?>"><strong><?= __("navigation.contacts"); ?></strong></a></li>
                    </ul>
                    <div class="clear"></div>  
                </nav>
                <div class="clear"></div> 
            </header>
        </div>
    </article>
    <div class="clear"></div>
</div>