<?php slot('title', __('Diary List')) ?>

<?php slot('submenu') ?>
<?php include_component('monitoring', 'submenu') ?>
<?php end_slot() ?>

<?php include_partial('searchForm') ?>

<?php
if (!isset($keyword))
{
  $pagerLink = 'diary/list?page=%d';
}
else
{
  $pagerLink = 'diary/search?keyword='.$keyword.'&page=%d';
}
?>
<?php if ($pager->getNbResults()): ?>
<div id="diaryMonitoringList">
<p><?php echo op_include_pager_navigation($pager, $pagerLink) ?></p>
<?php foreach ($pager->getResults() as $diary): ?>
<table>
<?php include_partial('diary', array('diary' => $diary)) ?>
<tr><td colspan="2"><form action="<?php echo url_for('diary/deleteConfirm?id='.$diary->id) ?>" method="get"><input type="submit" value="<?php echo __('Delete') ?>" /></form></td></tr>
</table>
<?php endforeach; ?>
<p><?php echo op_include_pager_navigation($pager, $pagerLink) ?></p>
</div>
<?php else: ?>
<p><?php echo !isset($keyword) ? __('There are no diaries.') : __('Your search "%1%" did not match any diaries.', array('%1%' => $keyword)) ?></p>
<?php endif; ?>
