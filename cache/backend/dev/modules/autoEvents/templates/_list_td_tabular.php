<td class="sf_admin_text sf_admin_list_td_event">
  <?php echo link_to($event->getEvent(), 'event_edit', $event) ?>
</td>
<td class="sf_admin_text sf_admin_list_td_location">
  <?php echo link_to($event->getLocation(), 'event_edit', $event) ?>
</td>
<td class="sf_admin_text sf_admin_list_td_place">
  <?php echo link_to($event->getPlace(), 'event_edit', $event) ?>
</td>
<td class="sf_admin_text sf_admin_list_td_date">
  <?php echo get_partial('events/date', array('type' => 'list', 'event' => $event)) ?>
</td>
