<? slot("header"); ?>
<script>
    $(document).ready(function() {
        $("a[rel^='prettyPhoto']").prettyPhoto();
    });
</script>
<div class="grid_8">
    <div class="inner-block">
        <h2 class="h2-border"><?= $car->getTitle(); ?> <a href="<?= url_for("@search_reset"); ?>" class="link"><?= __("search.all"); ?></a></h2>

        <div id="slide" class="camera_wrap camera_azure_skin"> 
            <? foreach ($car->getFotos() as $foto): ?>
                <div data-src="/uploads/<?= $foto->getFilename(); ?>">
                    <div class="banner camera_caption fadeFromBottom">
                        <p><strong><?= $car->getModel()->getBrand() . " " . $car->getModel()->getName(); ?></strong>
                            <a href="#"><?= $car->getTitle(); ?></a>
                        </p>
                    </div>
                </div>
            <? endforeach; ?>
        </div>

        <div class="pad-1 container-fluid">
            <ul id="details-thumbnails" class="thumbnails row-fluid">
                <? foreach ($car->getFotos() as $foto): ?>
                    <li class="span3">
                        <a href="/uploads/<?= $foto->getFilename(); ?>" class="thumbnail" rel="prettyPhoto">
                            <img src="/uploads/<?= $foto->getFilename(); ?>" />
                        </a>
                    </li>
                <? endforeach; ?>
            </ul>
        </div>
    </div>
</div>

<div class="grid_4 bg-white">
    <div class="inner-block">
        <div class="pad-1">
            <div class="form-title h2-border"><?= __("car.aboutHeader"); ?><span><?= __("car.aboutSubheader"); ?></span></div>  

            <table class="table" id="details-table">
                <tbody>
                    <tr>
                        <td><?= __("car.brand"); ?></td>
                        <td><?= $car->getModel()->getBrand(); ?></td>
                    </tr>
                    <tr>
                        <td><?= __("car.model"); ?></td>
                        <td><?= $car->getModel()->getName(); ?></td>
                    </tr>
                    <tr>
                        <td><?= __("car.year"); ?></td>
                        <td><?= $car->getYear(); ?></td>
                    </tr>
                    <tr>
                        <td><?= __("car.distance"); ?></td>
                        <td><?= $car->getDistance(); ?> km</td>
                    </tr>
                    <tr>
                        <td><?= __("car.fuel"); ?></td>
                        <td><?= $car->getFuel(); ?></td>
                    </tr>
                    <tr>
                        <td><?= __("car.engine"); ?></td>
                        <td><?= $car->getEngine(); ?></td>
                    </tr>
                    <tr>
                        <td><?= __("car.transmission"); ?></td>
                        <td><?= $car->getTransmission(); ?></td>
                    </tr>
                    <tr>
                        <td><?= __("car.color"); ?></td>
                        <td><?= $car->getColor(); ?></td>
                    </tr>
                    <tr>
                        <td><?= __("car.country"); ?></td>
                        <td><?= $car->getCountry(); ?></td>
                    </tr>
                    <tr>
                        <td><?= __("car.price"); ?></td>
                        <td><?= $car->getPrice(); ?></td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <a class="button" href="<?= url_for("@contact_ask?id=".$car->getId()); ?>"><?= __("contact.askAboutCarButtonLabel"); ?></a>
                        </td> 

                    </tr>
                </tbody>
            </table>

        </div>
    </div>
</div>
<? end_slot(); ?>

<div class="grid_12 bg-white">
    <div class="inner-block">
        <h2 class="h2-border"><?= $car->getTitle(); ?></h2>

        <div class="pad-1">
            <h3><?= __("car.description"); ?></h3>

            <?= $car->getDescription(); ?>
        </div>

    </div>
</div>