<div class="cdDetails form">
<?php echo $this->Form->create('CdDetail'); ?>
	<fieldset>
		<legend><?php echo __('Add Cd Detail'); ?></legend>
	<?php
		echo $this->Form->input('title');
		echo $this->Form->input('edition');
		echo $this->Form->input('publisher');
		echo $this->Form->input('category');
		echo $this->Form->input('price');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Cd Details'), array('action' => 'index')); ?></li>
	</ul>
</div>
