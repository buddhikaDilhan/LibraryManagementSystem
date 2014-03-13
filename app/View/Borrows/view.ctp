<div class="borrows view">
<h2><?php echo __('Borrow'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($borrow['Borrow']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Member Index'); ?></dt>
		<dd>
			<?php echo h($borrow['Borrow']['member_index']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Item Id'); ?></dt>
		<dd>
			<?php echo h($borrow['Borrow']['item_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Borrowed Date'); ?></dt>
		<dd>
			<?php echo h($borrow['Borrow']['borrowed_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fine'); ?></dt>
		<dd>
			<?php echo h($borrow['Borrow']['fine']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Remarks'); ?></dt>
		<dd>
			<?php echo h($borrow['Borrow']['remarks']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Borrow'), array('action' => 'edit', $borrow['Borrow']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Borrow'), array('action' => 'delete', $borrow['Borrow']['id']), null, __('Are you sure you want to delete # %s?', $borrow['Borrow']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Borrows'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Borrow'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Items'), array('controller' => 'items', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item'), array('controller' => 'items', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Members'), array('controller' => 'members', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Member'), array('controller' => 'members', 'action' => 'add')); ?> </li>
	</ul>
</div>
	<div class="related">
		<h3><?php echo __('Related Items'); ?></h3>
	<?php if (!empty($borrow['Item'])): ?>
		<dl>
			<dt><?php echo __('Id'); ?></dt>
		<dd>
	<?php echo $borrow['Item']['id']; ?>
&nbsp;</dd>
		<dt><?php echo __('Borrowed'); ?></dt>
		<dd>
	<?php echo $borrow['Item']['borrowed']; ?>
&nbsp;</dd>
		<dt><?php echo __('Received As'); ?></dt>
		<dd>
	<?php echo $borrow['Item']['received_as']; ?>
&nbsp;</dd>
		</dl>
	<?php endif; ?>
		<div class="actions">
			<ul>
				<li><?php echo $this->Html->link(__('Edit Item'), array('controller' => 'items', 'action' => 'edit', $borrow['Item']['id'])); ?></li>
			</ul>
		</div>
	</div>
		<div class="related">
		<h3><?php echo __('Related Members'); ?></h3>
	<?php if (!empty($borrow['Member'])): ?>
		<dl>
			<dt><?php echo __('Member Index'); ?></dt>
		<dd>
	<?php echo $borrow['Member']['member_index']; ?>
&nbsp;</dd>
		<dt><?php echo __('First Name'); ?></dt>
		<dd>
	<?php echo $borrow['Member']['first_name']; ?>
&nbsp;</dd>
		<dt><?php echo __('Last Name'); ?></dt>
		<dd>
	<?php echo $borrow['Member']['last_name']; ?>
&nbsp;</dd>
		<dt><?php echo __('Department'); ?></dt>
		<dd>
	<?php echo $borrow['Member']['department']; ?>
&nbsp;</dd>
		<dt><?php echo __('Password'); ?></dt>
		<dd>
	<?php echo $borrow['Member']['password']; ?>
&nbsp;</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
	<?php echo $borrow['Member']['email']; ?>
&nbsp;</dd>
		<dt><?php echo __('Number Of Books Allowed'); ?></dt>
		<dd>
	<?php echo $borrow['Member']['number_of_books_allowed']; ?>
&nbsp;</dd>
		</dl>
	<?php endif; ?>
		<div class="actions">
			<ul>
				<li><?php echo $this->Html->link(__('Edit Member'), array('controller' => 'members', 'action' => 'edit', $borrow['Member']['member_index'])); ?></li>
			</ul>
		</div>
	</div>
	