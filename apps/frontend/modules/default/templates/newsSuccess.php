<img src="/images/news-caption.png" class="caption"/>


<?php foreach ($pager->getResults() as $news): ?>
    <?php include_partial("news", array("news" => $news)); ?>
<?php endforeach; ?>

<?php if ($pager->haveToPaginate()): ?>
    <div class="pagination pagination-centered">
        <ul>
            <li><a href="<?php echo url_for('@news') ?>?page=1">Pierwsza</a></li>
            <li><a href="<?php echo url_for('@news') ?>?page=<?php echo $pager->getPreviousPage() ?>">Poprzednia</a></li>
            
            <?php foreach ($pager->getLinks() as $page): ?>
                <?php if ($page == $pager->getPage()): ?>
                    <?php //echo $page ?>
                    <li class="disabled"><a href="<?php echo url_for('@news') ?>?page=<?php echo $page ?>"><?php echo $page ?></a>
                <?php else: ?>
                    <li><a href="<?php echo url_for('@news') ?>?page=<?php echo $page ?>"><?php echo $page ?></a>
                <?php endif; ?>
            <?php endforeach; ?>
            </li>
            <li><a href="<?php echo url_for('@news') ?>?page=<?php echo $pager->getNextPage() ?>">Następna</a></li>
            <li><a href="<?php echo url_for('news') ?>?page=<?php echo $pager->getLastPage() ?>">Ostatnia</a></li>
        </ul>
    </div>
<?php endif; ?>