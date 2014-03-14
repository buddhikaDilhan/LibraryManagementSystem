<div class="books view">
<h2><?php echo __('Book'); ?></h2>
	<dl>
		<dt><?php 
                echo (json_encode($book));
                echo __('Item Id'); ?></dt>
		<dd>
			<?php echo h($book['Book']['item_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Book Details'); ?></dt>
		<dd>
			<?php 
                        echo $this->Html->link($book['BookDetail']['title'], array('controller' => 'book_details', 'action' => 'view', $book['BookDetail']['ISBN']));
                    
                        ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Book'), array('action' => 'edit', $book['Book']['item_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Book'), array('action' => 'delete', $book['Book']['item_id']), null, __('Are you sure you want to delete # %s?', $book['Book']['item_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Books'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Book'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Book Details'), array('controller' => 'book_details', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Book Details'), array('controller' => 'book_details', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Items'), array('controller' => 'items', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item'), array('controller' => 'items', 'action' => 'add')); ?> </li>
	</ul>
</div>
	<div class="related">
		<h3><?php echo __('Related Items'); ?></h3>
	<?php if (!empty($book['Item'])): ?>
		<dl>
			<dt><?php echo __('Id'); ?></dt>
		<dd>
	<?php echo $book['Item']['id']; ?>
&nbsp;</dd>
		<dt><?php echo __('Borrowed'); ?></dt>
		<dd>
	<?php echo $book['Item']['borrowed']; ?>
&nbsp;</dd>
		<dt><?php echo __('Received As'); ?></dt>
		<dd>
	<?php echo $book['Item']['received_as']; ?>
&nbsp;</dd>
		</dl>
	<?php endif; ?>
		<div class="actions">
			<ul>
				<li><?php echo $this->Html->link(__('Edit Item'), array('controller' => 'items', 'action' => 'edit', $book['Item']['id'])); ?></li>
			</ul>
		</div>
	</div>
	