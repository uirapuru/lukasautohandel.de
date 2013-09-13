<? if ($form->hasErrors() || $form->hasGlobalErrors()): ?>
    <div class="alert alert-danger">
        <ul>
            <? foreach ($form->getGlobalErrors() as $error): ?>
                <li><strong><?= $error; ?></strong></li>
            <? endforeach; ?>
            <? foreach ($form->getErrorSchema()->getNamedErrors() as $widget => $error): ?>
                <li><strong><?= $widget; ?></strong> 
                    <ul>
                        <? if ($error instanceof sfValidatorErrorSchema): ?>
                            <? foreach ($error->getErrors() as $subWidget => $subError): ?>
                                <li><strong><?= $subWidget; ?>:</strong> <?= $subError ?></li>
                            <? endforeach; ?>
                        <? elseif (is_array($error)): ?>
                            <? foreach ($error as $subWidget => $subError): ?>
                                <li><strong><?= $subWidget; ?>:</strong> <?= $subError ?></li>
                            <? endforeach; ?>
                        <? endif; ?>
                    </ul>
                </li>
            <? endforeach; ?>
        </ul>    
    </div>
<? endif; ?>

<form action="<?= url_for('@submitCar?id=' . $form->getObject()->getId()) ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
    <?= $form->renderHiddenFields() ?>

    <div class="container-fluid">
        <div class="row-fluid">
            <div class="span6">
                <ul class="nav nav-tabs" id="myTab">
                    <li class="active"><a href="#langPl">polski</a></li>
                    <li><a href="#langEn">angielski</a></li>
                    <li><a href="#langDe">niemiecki</a></li>
                </ul>

                <div class="tab-content">
                    <div class="tab-pane active" id="langPl">
                        <?= $form["pl"]["title"]->renderRow(); ?>
                        <?= $form["pl"]["description"]->renderRow(); ?>
                        <?= $form["pl"]["fuel"]->renderRow(); ?>
                        <?= $form["pl"]["engine"]->renderRow(); ?>
                        <?= $form["pl"]["color"]->renderRow(); ?>
                        <?= $form["pl"]["country"]->renderRow(); ?>
                        <?= $form["pl"]["price"]->renderRow(); ?>
                    </div>
                    <div class="tab-pane" id="langEn">
                        <?= $form["en"]["title"]->renderRow(); ?>
                        <?= $form["en"]["description"]->renderRow(); ?>
                        <?= $form["en"]["fuel"]->renderRow(); ?>
                        <?= $form["en"]["engine"]->renderRow(); ?>
                        <?= $form["en"]["color"]->renderRow(); ?>
                        <?= $form["en"]["country"]->renderRow(); ?>
                        <?= $form["en"]["price"]->renderRow(); ?>
                    </div>
                    <div class="tab-pane" id="langDe">
                        <?= $form["de"]["title"]->renderRow(); ?>
                        <?= $form["de"]["description"]->renderRow(); ?>
                        <?= $form["de"]["fuel"]->renderRow(); ?>
                        <?= $form["de"]["engine"]->renderRow(); ?>
                        <?= $form["de"]["color"]->renderRow(); ?>
                        <?= $form["de"]["country"]->renderRow(); ?>
                        <?= $form["de"]["price"]->renderRow(); ?>
                    </div>
                </div>
            </div>
            <div class="span6" style="padding-top: 60px;">

                <?= $form['variant']->renderRow() ?>

                <?= $form['model']->renderRow() ?>
                <?= $form['brand']->renderRow() ?>

                <?= $form['year']->renderRow() ?>
                <?= $form['distance']->renderRow() ?>


            </div>
        </div>
    </div>
    <ul id="fotosList">
        <?php if ($form->getObject()->isNew()): ?>
            <script type="text/javascript">
                newfieldscount = 1;
            </script>
            <?= include_partial("cars/newFoto", array("form" => $form['new'][0], "isNew" => true)); ?>
        <?php endif; ?>

        <?php foreach ($form['Fotos'] as $key => $foto): ?>
            <? $deleteUrl = url_for("@deleteFotoObject?id=".$foto["id"]->getValue()); ?>
            <?= include_partial("cars/newFoto", array("form" => $foto, "isNew" => false, "deleteUrl" => $deleteUrl)); ?>
        <?php endforeach; ?>
    </ul>
    <div class="form-actions">
        <a href="#" class="btn btn-warning" id="addFotoLink">Add foto</a>
        <button type="submit" class="btn btn-primary">Save changes</button>
        <button type="button" class="btn">Cancel</button>
    </div>
</form>
<script>
    $(function() {
        $('#myTab a').click(function(e) {
            e.preventDefault();
            $(this).tab('show');
        });

        $("#myTab a:first").tab('show');
    });
</script>