<div class="cds form">
<?php echo $this->Form->create('Cd'); ?>
	<fieldset>
		<legend><?php echo __('Edit Cd'); ?></legend>
	<?php
		echo $this->Form->input('item_id');
		echo $this->Form->input('ISSN');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Cd.item_id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Cd.item_id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Cds'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Cd Details'), array('controller' => 'cd_details', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ce Details'), array('controller' => 'cd_details', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Items'), array('controller' => 'items', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item'), array('controller' => 'items', 'action' => 'add')); ?> </li>
	</ul>
</div>
