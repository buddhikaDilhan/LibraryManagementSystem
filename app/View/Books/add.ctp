<div class="books form">
<?php echo $this->Form->create('Book'); ?>
	<fieldset>
		<legend><?php echo __('Add Book'); ?></legend>
	<?php
                echo $this->Form->input('item_id', array('type' => 'int'));
		echo $this->Form->input('ISBN');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Books'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Book Details'), array('controller' => 'book_details', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Book Details'), array('controller' => 'book_details', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Items'), array('controller' => 'items', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item'), array('controller' => 'items', 'action' => 'add')); ?> </li>
	</ul>
</div>
