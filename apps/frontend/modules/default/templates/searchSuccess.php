<div class="grid_8">
    <div class="inner-block">
        <h2 class="h2-border top-1"><?= __("search.vehiclesListHeader"); ?> <a href="<?= url_for("@search_reset"); ?>" class="link"><?= __("search.all"); ?></a></h2>
        <div class="box-3">
            <ul class="search-results">
                <? if ($pager->count() > 0): ?>
                    <? foreach ($pager->getResults() as $car): ?>
                        <li>
                            <img src="<?= $car->getPrimaryFoto(); ?>" alt="" style="width: 290px">
                            <div class="extra-wrap">
                                <h3><?= $car->getTitle(); ?></h3>
                                <p><?= substr($car->getDescription(),0,50); ?>...</p>
                                <p class="price"><?= $car->getPrice(); ?><span>other info</span></p>
                                <a href="<?= url_for("@show?id=".$car->getId()."&slug=".$car->getSlug());?>" class="button"><?= __("car.details"); ?></a>
                            </div>
                        </li>
                    <? endforeach; ?>
                <? endif; ?>
            </ul>

            <?php $route = $sf_context->getRouting()->getCurrentRouteName(); ?>

            <?php if ($pager->haveToPaginate()): ?>
                <div class="pagination">        
                    <ul>
                        <li>
                            <a href="<?php echo url_for($route) ?>?page=1">
                                <?= __("paging.first"); ?>
                            </a>
                        </li>

                        <li>
                            <a href="<?php echo url_for($route) ?>?page=<?php echo $pager->getPreviousPage() ?>">
                                <?= __("paging.previous"); ?>
                            </a>
                        </li>


                        <?php foreach ($pager->getLinks() as $page): ?>
                            <?php if ($page == $pager->getPage()): ?>
                                <li class="disabled">
                                    <a href="#"><?php echo $page ?></a>
                                </li>
                            <?php else: ?>
                                <li>
                                    <a href="<?php echo url_for($route) ?>?page=<?php echo $page ?>"><?php echo $page ?></a>
                                </li>
                            <?php endif; ?>
                        <?php endforeach; ?>

                        <li>
                            <a href="<?php echo url_for($route) ?>?page=<?php echo $pager->getNextPage() ?>">
                                <?= __("paging.next"); ?>
                            </a>
                        </li>

                        <li>
                            <a href="<?php echo url_for($route) ?>?page=<?php echo $pager->getLastPage() ?>">
                                <?= __("paging.last"); ?>
                            </a>
                        </li>

                    </ul>
                </div>
            <?php endif; ?>

        </div>
    </div>
</div>

<?= include_component("default", "searchBox"); ?>
<div class="clear"></div>
