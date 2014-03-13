<div class="bookDetails form">
<?php echo $this->Form->create('BookDetail'); ?>
	<fieldset>
		<legend><?php echo __('Edit Book Detail'); ?></legend>
	<?php
		echo $this->Form->input('ISBN');
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('BookDetail.ISBN')), null, __('Are you sure you want to delete # %s?', $this->Form->value('BookDetail.ISBN'))); ?></li>
		<li><?php echo $this->Html->link(__('List Book Details'), array('action' => 'index')); ?></li>
	</ul>
</div>
