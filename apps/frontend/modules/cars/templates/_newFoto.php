<li class="well" style="position: relative;"<?= isset($deleteUrl) ? ' data-delete-url="'. $deleteUrl .'"': ''; ?>>

    <?php echo $form['filename']->renderRow() ?>

    <?php echo $form['primary']->renderRow() ?>

    <div style="position: absolute; top: 20px; right: 20px;">
        <? if ($isNew): ?>
            <a class="removenew" href="#">Remove</a>
        <? else: ?>
            <a class="removeold" href="#">Remove</a>
        <? endif; ?>
    </div>

</li>