<div class="borrows form">
<?php echo $this->Form->create('Borrow'); ?>
	<fieldset>
		<legend><?php echo __('Edit Borrow'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('member_index');
		echo $this->Form->input('item_id');
		echo $this->Form->input('borrowed_date');
		echo $this->Form->input('fine');
		echo $this->Form->input('remarks');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Borrow.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Borrow.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Borrows'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Items'), array('controller' => 'items', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item'), array('controller' => 'items', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Members'), array('controller' => 'members', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Member'), array('controller' => 'members', 'action' => 'add')); ?> </li>
	</ul>
</div>
