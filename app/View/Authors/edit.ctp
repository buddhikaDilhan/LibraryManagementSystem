<div class="authors form">
<?php echo $this->Form->create('Author'); ?>
	<fieldset>
		<legend><?php echo __('Edit Author'); ?></legend>
	<?php
		echo $this->Form->input('ISBN');
		echo $this->Form->input('author_name_1');
		echo $this->Form->input('author_name_2');
		echo $this->Form->input('author_name_3');
		echo $this->Form->input('author_name_4');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Author.ISBN')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Author.ISBN'))); ?></li>
		<li><?php echo $this->Html->link(__('List Authors'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Book Details'), array('controller' => 'book_details', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Book Detail'), array('controller' => 'book_details', 'action' => 'add')); ?> </li>
	</ul>
</div>
