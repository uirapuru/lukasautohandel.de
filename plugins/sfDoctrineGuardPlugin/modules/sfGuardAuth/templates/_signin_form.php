<?php use_helper('I18N') ?>

<form class="well" action="<?php echo url_for('@sf_guard_signin') ?>" method="post">
    <?php echo $form->renderGlobalErrors(); ?>
    <?php echo $form->renderHiddenFields(); ?>

    <div class="control-group<?php echo $form["username"]->hasError() ? ' error' : ''; ?>">
        <?php echo $form["username"]->render(array("placeholder" => "username", "class" => "span3")); ?>
        <span class="help-block"><?php echo $form["username"]->renderError(); ?></span>
    </div>
    <div class="control-group<?php echo $form["password"]->hasError() ? ' error' : ''; ?>">
        <?php echo $form["password"]->render(array("placeholder" => "password", "class" => "span3")); ?>
        <span class="help-block"><?php echo $form["password"]->renderError(); ?></span>
    </div>

    <div class="controls">
        <button type="submit" class="btn btn-primary">Zaloguj</button>
    </div>
</form>
