
<div class="grid_8">
    <div class="inner-block">
        <h2 class="h2-border p3"><?= __("contact.contactHeader"); ?></h2>
        <div class="wrap">
            <figure class="img-border map">
                <iframe src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Brooklyn,+New+York,+NY,+United+States&amp;aq=0&amp;sll=37.0625,-95.677068&amp;sspn=61.282355,146.513672&amp;ie=UTF8&amp;hq=&amp;hnear=Brooklyn,+Kings,+New+York&amp;ll=40.649974,-73.950005&amp;spn=0.01628,0.025663&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe>
            </figure>
            <dl class="adrss">
                <dt><strong>8901 Marmora Road,<br>Glasgow, D04 89GR.</strong></dt>
                <dd><span>Freephone:</span>+1 800 559 6580</dd>
                <dd><span>Telephone:</span>+1 800 603 6035</dd>
                <dd><span>FAX:</span>+1 800 889 9898</dd>
                <dd class="p8"><a href="#" class="link-4">lukas@lukasautohandel.de</a></dd>
            </dl>
            <div class="clear"></div>
        </div>
    </div>
</div>
<div class="grid_4">
    <div class="inner-block">
        <div class="bg-white pad-1 top">
            <div class="form-title"><?= __("contact.contactFormLabel"); ?></div>
            <form id="form" method="POST">
                <? if($sf_user->hasFlash("notice")): ?>
                <div class="success"><div class="success_txt"><?= __("contact.contactForm.noticeThankYou"); ?></div></div>
                <? endif; ?>
                <fieldset>
                    <? if ($car != null): ?>
                        <label class="name">
                            <input type="text" readonly="READONLY" value="<?= $car->getTitle(); ?>" name="<?= $form->getName() ?>[car]"/>
                        </label>
                    <? endif; ?>
                    <label class="name">
                        <?= $form["name"]->render(array("placeholder" => __("contact.name.placeholder"))); ?>

                        <? if ($form["name"]->hasError()): ?>
                            <span class="error error-empty">
                                <?= $form["name"]->getError(); ?>
                            </span>
                        <? endif; ?>

                    </label>
                    <label class="email">
                        <?= $form["email"]->render(array("placeholder" => __("contact.email.placeholder"))); ?>
                        <? if ($form["email"]->hasError()): ?>
                            <span class="error error-empty">
                                <?= $form["email"]->getError(); ?>
                            </span>
                        <? endif; ?>
                    </label>
                    <label class="phone">
                        <?= $form["phone"]->render(array("placeholder" => __("contact.phone.placeholder"))); ?>
                    </label>
                    <label class="message">
                        <?= $form["body"]->render(array("placeholder" => __("contact.body.placeholder"))); ?>
                        <? if ($form["body"]->hasError()): ?>
                            <span class="error error-empty">
                                <?= $form["body"]->getError(); ?>
                            </span>
                        <? endif; ?>    

                    </label>
                    <div class="btns">
                        <button class="button" type="reset"><?= __("contact.contactForm.resetButtonLabel"); ?></button>
                        <button class="button" type="submit"><?= __("contact.contactForm.submitButtonLabel"); ?></button>
                    </div>
                </fieldset>

                <?= $form->renderHiddenFields(); ?>
            </form> 
        </div> 
    </div>
</div>
<div class="clear"></div>
