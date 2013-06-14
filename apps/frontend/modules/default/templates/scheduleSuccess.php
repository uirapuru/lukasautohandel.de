<img src="/images/<?= $sf_user->getCulture(); ?>/caption-kalendarz.png" class="caption"/>
<style>
    table.events-table {
        font-family: "Myriad", sans-serif;
        font-size: 11px
    }
    </style>


<?php if ($events->count() > 0): ?>
    <table class="table events-table">
        <thead>
            <tr>
                <th><?= __("Data"); ?></th>
                <th><?= __("Godzina"); ?></th>
                <th></th>
                <th><?= __("Miejsce"); ?></th>
                <th><?= __("Event"); ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($events as $event): ?>
                <tr>
                    <td><?php echo date("d.m.Y",strtotime($event->getDateStart())); ?></td>
                    <td><?php echo date("H:i",strtotime($event->getDateStart())) ." - ". date("H:i",strtotime($event->getDateEnd())); ?></td>
                    <td><img src="/images/flags/<?php echo $event->getCountry(); ?>.jpg" /></td>
                    <td><?php echo $event->getPlace(); ?> / <?php echo $event->getLocation(); ?></td>
                    <td><?php echo $event->getEvent(); ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
<?php endif; ?>
