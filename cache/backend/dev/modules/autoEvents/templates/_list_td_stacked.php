<td colspan="4">
  <?php echo __('%%event%% - %%location%% - %%place%% - %%date%%', array('%%event%%' => link_to($event->getEvent(), 'event_edit', $event), '%%location%%' => link_to($event->getLocation(), 'event_edit', $event), '%%place%%' => link_to($event->getPlace(), 'event_edit', $event), '%%date%%' => get_partial('events/date', array('type' => 'list', 'event' => $event))), 'messages') ?>
</td>
