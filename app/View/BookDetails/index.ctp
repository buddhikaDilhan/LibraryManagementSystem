<div class="bookDetails index">
	<h2><?php echo __('Book Details'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('ISBN'); ?></th>
			<th><?php echo $this->Paginator->sort('title'); ?></th>
			<th><?php echo $this->Paginator->sort('edition'); ?></th>
			<th><?php echo $this->Paginator->sort('publisher'); ?></th>
			<th><?php echo $this->Paginator->sort('category'); ?></th>
			<th><?php echo $this->Paginator->sort('price'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($bookDetails as $bookDetail): ?>
	<tr>
		<td><?php echo h($bookDetail['BookDetail']['ISBN']); ?>&nbsp;</td>
		<td><?php echo h($bookDetail['BookDetail']['title']); ?>&nbsp;</td>
		<td><?php echo h($bookDetail['BookDetail']['edition']); ?>&nbsp;</td>
		<td><?php echo h($bookDetail['BookDetail']['publisher']); ?>&nbsp;</td>
		<td><?php echo h($bookDetail['BookDetail']['category']); ?>&nbsp;</td>
		<td><?php echo h($bookDetail['BookDetail']['price']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $bookDetail['BookDetail']['ISBN'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $bookDetail['BookDetail']['ISBN'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $bookDetail['BookDetail']['ISBN']), null, __('Are you sure you want to delete # %s?', $bookDetail['BookDetail']['ISBN'])); ?>
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
		<li><?php echo $this->Html->link(__('New Book Detail'), array('action' => 'add')); ?></li>
	</ul>
</div>
