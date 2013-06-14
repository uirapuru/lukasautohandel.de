<td colspan="4">
  <?php echo __('%%id%% - %%created_at%% - %%updated_at%% - %%slug%%', array('%%id%%' => link_to($news->getId(), 'news_edit', $news), '%%created_at%%' => false !== strtotime($news->getCreatedAt()) ? format_date($news->getCreatedAt(), "f") : '&nbsp;', '%%updated_at%%' => false !== strtotime($news->getUpdatedAt()) ? format_date($news->getUpdatedAt(), "f") : '&nbsp;', '%%slug%%' => $news->getSlug()), 'messages') ?>
</td>
