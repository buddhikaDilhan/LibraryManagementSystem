<div class="staffs index">
	<h2><?php echo __('Staffs'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('staff_index'); ?></th>
			<th><?php echo $this->Paginator->sort('year_of_appoinment'); ?></th>
			<th><?php echo $this->Paginator->sort('position'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($staffs as $staff): ?>
	<tr>
		<td><?php echo h($staff['Staff']['staff_index']); ?>&nbsp;</td>
		<td><?php echo h($staff['Staff']['year_of_appoinment']); ?>&nbsp;</td>
		<td><?php echo h($staff['Staff']['position']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $staff['Staff']['staff_index'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $staff['Staff']['staff_index'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $staff['Staff']['staff_index']), null, __('Are you sure you want to delete # %s?', $staff['Staff']['staff_index'])); ?>
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
		<li><?php echo $this->Html->link(__('New Staff'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Members'), array('controller' => 'members', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Member'), array('controller' => 'members', 'action' => 'add')); ?> </li>
	</ul>
</div>
