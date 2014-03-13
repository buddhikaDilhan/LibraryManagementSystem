<div class="cdDetails index">
	<h2><?php echo __('Cd Details'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('ISSN'); ?></th>
			<th><?php echo $this->Paginator->sort('title'); ?></th>
			<th><?php echo $this->Paginator->sort('edition'); ?></th>
			<th><?php echo $this->Paginator->sort('publisher'); ?></th>
			<th><?php echo $this->Paginator->sort('category'); ?></th>
			<th><?php echo $this->Paginator->sort('price'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($cdDetails as $cdDetail): ?>
	<tr>
		<td><?php echo h($cdDetail['CdDetail']['ISSN']); ?>&nbsp;</td>
		<td><?php echo h($cdDetail['CdDetail']['title']); ?>&nbsp;</td>
		<td><?php echo h($cdDetail['CdDetail']['edition']); ?>&nbsp;</td>
		<td><?php echo h($cdDetail['CdDetail']['publisher']); ?>&nbsp;</td>
		<td><?php echo h($cdDetail['CdDetail']['category']); ?>&nbsp;</td>
		<td><?php echo h($cdDetail['CdDetail']['price']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $cdDetail['CdDetail']['ISSN'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $cdDetail['CdDetail']['ISSN'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $cdDetail['CdDetail']['ISSN']), null, __('Are you sure you want to delete # %s?', $cdDetail['CdDetail']['ISSN'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Cd Detail'), array('action' => 'add')); ?></li>
	</ul>
</div>
