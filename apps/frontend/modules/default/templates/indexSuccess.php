<div class="grid_8">
    <div class="inner-block">
        <h2 class="h2-border"><?= __("index.vehiclesListHeader"); ?> <a href="<?= url_for("@search_reset"); ?>" class="link"><?= __("search.all"); ?></a></h2>
        <div class="box-1">
            <? for ($col = 0; $col < 2; $col++): ?>
                <ul <?= $col == 1 ? ' class="last"' : ''; ?>>
                    <? if (isset($cars[$col]) && count($cars[$col]) > 0): ?>
                        <? foreach ($cars[$col] as $car): ?>
                            <li>
                                <img src="<?= $car->getPrimaryFoto() ?>" alt="">
                                <h3><?= $car->getBrand() . " " . $car->getModel(); ?></h3>
                                <p><?= $car->getTitle() ?></p>
                                <p class="price"><?= $car->getPrice() ?><span>other info</span></p>
                                <a href="<?= url_for("@show?id=" . $car->getId() . "&slug=" . $car->getSlug()); ?>" class="button"><?= __("car.details"); ?></a>
                            </li>
                        <? endforeach; ?>
                    <? endif; ?>
                </ul>
            <? endfor; ?>
        </div>
    </div>
</div>
<div class="grid_4">
    <div class="inner-block">
        <h2 class="h2-border p3">About us</h2>
        <p class="p1">Lorem ipsum dolor sit amet conse ctetur adipi sicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exerci tation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehe nderit in voluptate velit esse cillum dolore.</p>
        <p class="p4">sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt.</p>

        <? /*
          <h2 class="h2-border">latest news <a href="#" class="link">See all</a></h2>
          <ul class="box-2">
          <li>
          <a href="#" class="link-2">25.12.2012</a>
          <p><a href="#" class="link-3">Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud<span></span></a></p>
          </li>
          <li>
          <a href="#" class="link-2">25.12.2012</a>
          <p><a href="#" class="link-3">dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud set magna<span></span></a></p>
          </li>
          <li>
          <a href="#" class="link-2">25.12.2012</a>
          <p><a href="#" class="link-3">sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam<span></span></a></p>
          </li>
          </ul>
         * 
         */ ?>
    </div>
</div>