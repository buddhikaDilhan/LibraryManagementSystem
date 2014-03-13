<div class="authors index">
	<h2><?php echo __('Authors'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('ISBN'); ?></th>
			<th><?php echo $this->Paginator->sort('author_name_1'); ?></th>
			<th><?php echo $this->Paginator->sort('author_name_2'); ?></th>
			<th><?php echo $this->Paginator->sort('author_name_3'); ?></th>
			<th><?php echo $this->Paginator->sort('author_name_4'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($authors as $author): ?>
	<tr>
		<td><?php echo h($author['Author']['ISBN']); ?>&nbsp;</td>
		<td><?php echo h($author['Author']['author_name_1']); ?>&nbsp;</td>
		<td><?php echo h($author['Author']['author_name_2']); ?>&nbsp;</td>
		<td><?php echo h($author['Author']['author_name_3']); ?>&nbsp;</td>
		<td><?php echo h($author['Author']['author_name_4']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $author['Author']['ISBN'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $author['Author']['ISBN'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $author['Author']['ISBN']), null, __('Are you sure you want to delete # %s?', $author['Author']['ISBN'])); ?>
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
		<li><?php echo $this->Html->link(__('New Author'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Book Details'), array('controller' => 'book_details', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Book Detail'), array('controller' => 'book_details', 'action' => 'add')); ?> </li>
	</ul>
</div>
