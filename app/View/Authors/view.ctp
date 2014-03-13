<div class="authors view">
<h2><?php echo __('Author'); ?></h2>
	<dl>
		<dt><?php echo __('ISBN'); ?></dt>
		<dd>
			<?php echo h($author['Author']['ISBN']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Author Name 1'); ?></dt>
		<dd>
			<?php echo h($author['Author']['author_name_1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Author Name 2'); ?></dt>
		<dd>
			<?php echo h($author['Author']['author_name_2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Author Name 3'); ?></dt>
		<dd>
			<?php echo h($author['Author']['author_name_3']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Author Name 4'); ?></dt>
		<dd>
			<?php echo h($author['Author']['author_name_4']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Author'), array('action' => 'edit', $author['Author']['ISBN'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Author'), array('action' => 'delete', $author['Author']['ISBN']), null, __('Are you sure you want to delete # %s?', $author['Author']['ISBN'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Authors'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Author'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Book Details'), array('controller' => 'book_details', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Book Detail'), array('controller' => 'book_details', 'action' => 'add')); ?> </li>
	</ul>
</div>
	<div class="related">
		<h3><?php echo __('Related Book Details'); ?></h3>
	<?php if (!empty($author['BookDetail'])): ?>
		<dl>
			<dt><?php echo __('ISBN'); ?></dt>
		<dd>
	<?php echo $author['BookDetail']['ISBN']; ?>
&nbsp;</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
	<?php echo $author['BookDetail']['title']; ?>
&nbsp;</dd>
		<dt><?php echo __('Edition'); ?></dt>
		<dd>
	<?php echo $author['BookDetail']['edition']; ?>
&nbsp;</dd>
		<dt><?php echo __('Publisher'); ?></dt>
		<dd>
	<?php echo $author['BookDetail']['publisher']; ?>
&nbsp;</dd>
		<dt><?php echo __('Category'); ?></dt>
		<dd>
	<?php echo $author['BookDetail']['category']; ?>
&nbsp;</dd>
		<dt><?php echo __('Price'); ?></dt>
		<dd>
	<?php echo $author['BookDetail']['price']; ?>
&nbsp;</dd>
		</dl>
	<?php endif; ?>
		<div class="actions">
			<ul>
				<li><?php echo $this->Html->link(__('Edit Book Detail'), array('controller' => 'book_details', 'action' => 'edit', $author['BookDetail']['ISBN'])); ?></li>
			</ul>
		</div>
	</div>
	