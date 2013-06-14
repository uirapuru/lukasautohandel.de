<?php if ($events): ?>
    <div id="schedule">
        <?php foreach ($events as $event): ?>
            <div class="r">
                <div class="schedule-date"><?php echo date("d.m.Y", strtotime($event->getDateStart())); ?></div>
                <div class="schedule-where">
                    <div class="schedule-place"><?php echo $event->getPlace() ?></div>
                    <div class="schedule-location"><?php echo $event->getLocation() ?></div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
<?php endif; ?>
