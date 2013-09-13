<td>
    <?= $car->getTitle(); ?>
</td>
<td>
    <?= $car->getPrice(); ?>
</td>
<td>
    <form action="<?= url_for("@updateCar?checkbox=promoted&id=".$car->getId()); ?>" class="toggleCheckbox">
        <input type="checkbox" name="promoted" value="true" <?= $car->getPromoted() ? 'checked="CHECKED"' : "" ?>/>
    </form>
</td>
<td>
    <form action="<?= url_for("@updateCar?checkbox=slider&id=".$car->getId()); ?>" class="toggleCheckbox">
        <input type="checkbox" name="slider" value="true" <?= $car->getSlider() ? 'checked="CHECKED"' : "" ?>/>
    </form>
</td>
<td>
    <?= $car->getCreatedAt(); ?>
</td>
