<div class="bookDetails view">
<h2><?php echo __('Book Detail'); ?></h2>
	<dl>
		<dt><?php echo __('ISBN'); ?></dt>
		<dd>
			<?php echo h($bookDetail['BookDetail']['ISBN']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($bookDetail['BookDetail']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Edition'); ?></dt>
		<dd>
			<?php echo h($bookDetail['BookDetail']['edition']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Publisher'); ?></dt>
		<dd>
			<?php echo h($bookDetail['BookDetail']['publisher']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Category'); ?></dt>
		<dd>
			<?php echo h($bookDetail['BookDetail']['category']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Price'); ?></dt>
		<dd>
			<?php echo h($bookDetail['BookDetail']['price']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Book Detail'), array('action' => 'edit', $bookDetail['BookDetail']['ISBN'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Book Detail'), array('action' => 'delete', $bookDetail['BookDetail']['ISBN']), null, __('Are you sure you want to delete # %s?', $bookDetail['BookDetail']['ISBN'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Book Details'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Book Detail'), array('action' => 'add')); ?> </li>
	</ul>
</div>
