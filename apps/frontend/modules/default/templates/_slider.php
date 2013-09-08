<div id="slide" class="camera_wrap camera_azure_skin"> 
    <? foreach ($cars as $car): ?>
        <div data-src="<?= $car->getPrimaryFoto(); ?>">
            <div class="banner camera_caption fadeFromBottom">
                <p><strong><?= $car->getModel()->getBrand() . " " . $car->getModel()->getName(); ?></strong>
                    <a href="<?= url_for("@show?id=".$car->getId()."&slug=".$car->getSlug()); ?>"><?= $car->getTitle(); ?></a>
                </p>
            </div>
        </div>
    <? endforeach; ?>
</div>