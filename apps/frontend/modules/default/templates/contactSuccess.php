<img src="/images/<?= $sf_user->getCulture(); ?>/caption-kontakt.png" class="caption"/>

<style>
    
    form#contact-form{
        position: relative;
        left: -10px;
    }
    form#contact-form legend{
        position: relative;
        left: 10px;
    }
    form#contact-form label {
        background-image: url("/images/contact-bg-v.jpg");
        background-color: #b8005a;
        color: #ffffff;
        width: 219px !important;
        height: 29px;
        line-height: 29px !important;
        padding:0;
        margin: 0;
        padding-right: 16px;
        position: relative;
    }
    
    form#contact-form fieldset div.control-group label:after {
        position: absolute;
        width: 42px;
        height: 18px;
        background-color:transparent;
        background-image: url("/images/contact-gadget.png");
        background-position: top left;
        background-repeat: no-repeat;
        content: "";
        bottom: -18px;
        left: 0;
    }

    form#contact-form fieldset div.control-group input,
    form#contact-form fieldset div.control-group textarea {
        height: 29px;
        background-color: #000000;
        background-image: url('/images/contact-pattern.jpg');
        border: 0;
        border-radius: 0;
        padding: 0;
        margin: 0;
        color: #ffffff;
        width: 285px;
        padding-left: 10px;
    }
    form#contact-form fieldset div.control-group textarea {
        background-image: none;
        background-color: white;
        color: black;
    }
    form#contact-form fieldset div.control-group textarea {
        height: 105px;
    }
    form#contact-form fieldset div.control-group input:hover,
    form#contact-form fieldset div.control-group textarea:hover
    {
        border: 0;
        box-shadow: none
    }
    form#contact-form fieldset div.form-actions
    {
        padding-left: 235px
    }
    form#contact-form fieldset div.form-actions input
    {
        width: 65px;
        height: 29px;
        border: 0;
        padding: 0;
        margin: 0;
        box-shadow: none;
        background-color: #b8005a;
        color: #ffffff;
        background-image: none;
        border-radius: 0;
    }
    
    div#contactNotice.alert.alert-success {
        color: #000000;
        background-color: #e2e2e2;
        border-color: #c6c6c6;
        margin-bottom: 0;
    }
    
</style>

<?php if($sf_user->hasFlash("notice")): ?>
<div id="contactNotice" class="alert alert-success"><?= $sf_user->getFlash("notice"); ?></div>
<?php endif; ?>

<h1 style="float: right; font-size: 21px; margin-top: 40px;"><?= __("Formularz Kontaktowy"); ?></h1>

<div style="margin: 5px 0 25px 0; clear:both; width: 100%; height: 18px; background-image: url('/images/cienkie-paski-nad-i-pod.png'); background-position: top left; background-repeat: repeat-x"></div>

<form id="contact-form" class="form form-horizontal" action="<?php echo url_for("@contact"); ?>" method="POST">
    <?php echo $form->renderHiddenFields(); ?>
    <?php echo $form->renderGlobalErrors(); ?>

    <fieldset>
        <!--<legend>Wyślij nam wiadomość</legend>-->
        <div class="control-group<?php echo $form["name"]->hasError() ? ' error' : ''; ?>">
            <?php echo $form["name"]->renderLabel(null, array("class" => "control-label")); ?>
            <div class="controls">
                <?php echo $form["name"]->render(array("class" => "input-xlarge")); ?>
                <p class="help-block"><?php echo $form["name"]->renderError(); ?></p>      
            </div>
        </div>
        <div class="control-group<?php echo $form["email"]->hasError() ? ' error' : ''; ?>">
            <?php echo $form["email"]->renderLabel(null, array("class" => "control-label")); ?>
            <div class="controls">
                <?php echo $form["email"]->render(array("class" => "input-xlarge")); ?>
                <p class="help-block"><?php echo $form["email"]->renderError(); ?></p>
            </div>
        </div>
        <div class="control-group<?php echo $form["subject"]->hasError() ? ' error' : ''; ?>">
            <?php echo $form["subject"]->renderLabel(null, array("class" => "control-label")); ?>
            <div class="controls">
                <?php echo $form["subject"]->render(array("class" => "input-xlarge")); ?>
                <p class="help-block"><?php echo $form["subject"]->renderError(); ?></p>
            </div>
        </div>
        <div class="control-group<?php echo $form["body"]->hasError() ? ' error' : ''; ?>">
            <?php echo $form["body"]->renderLabel(null, array("class" => "control-label")); ?>
            <div class="controls">
                <?php echo $form["body"]->render(array("class" => "input-xlarge")); ?>
                <p class="help-block"><?php echo $form["body"]->renderError(); ?></p>
            </div>
        </div>
        <div>
            <!--<input type="submit" value="Wyślij" class="btn btn-primary"  />-->
            <input style="border-left: 495px solid transparent; width: 116px; height:29px "type="image" src="/images/<?= $sf_user->getCulture(); ?>/contact-button.png" />
        </div>
    </fieldset>
</form>


<div style="margin: 5px 0 25px 0; clear:both; width: 100%; height: 18px; background-image: url('/images/cienkie-paski-nad-i-pod.png'); background-position: top left; background-repeat: repeat-x"></div>

<h1 style="float: center; font-size: 12px; margin-top: 0px;"><center><?= __("Email kontaktowy"); ?> - info@thomascloudofficial.com<br><?= __("Booking"); ?> - booking@thomascloudofficial.com<br><?= __("Remixy"); ?> - remixes@thomascloudofficial.com</center></h1>



