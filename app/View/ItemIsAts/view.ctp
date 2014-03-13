<div class="itemIsAts view">
<h2><?php echo __('Item Is At'); ?></h2>
	<dl>
		<dt><?php echo __('Item Id'); ?></dt>
		<dd>
			<?php echo h($itemIsAt['ItemIsAt']['item_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Location Id'); ?></dt>
		<dd>
			<?php echo h($itemIsAt['ItemIsAt']['location_id']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Item Is At'), array('action' => 'edit', $itemIsAt['ItemIsAt']['item_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Item Is At'), array('action' => 'delete', $itemIsAt['ItemIsAt']['item_id']), null, __('Are you sure you want to delete # %s?', $itemIsAt['ItemIsAt']['item_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Item Is Ats'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item Is At'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Items'), array('controller' => 'items', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item'), array('controller' => 'items', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Locations'), array('controller' => 'locations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Location'), array('controller' => 'locations', 'action' => 'add')); ?> </li>
	</ul>
</div>
	<div class="related">
		<h3><?php echo __('Related Items'); ?></h3>
	<?php if (!empty($itemIsAt['Item'])): ?>
		<dl>
			<dt><?php echo __('Id'); ?></dt>
		<dd>
	<?php echo $itemIsAt['Item']['id']; ?>
&nbsp;</dd>
		<dt><?php echo __('Borrowed'); ?></dt>
		<dd>
	<?php echo $itemIsAt['Item']['borrowed']; ?>
&nbsp;</dd>
		<dt><?php echo __('Received As'); ?></dt>
		<dd>
	<?php echo $itemIsAt['Item']['received_as']; ?>
&nbsp;</dd>
		</dl>
	<?php endif; ?>
		<div class="actions">
			<ul>
				<li><?php echo $this->Html->link(__('Edit Item'), array('controller' => 'items', 'action' => 'edit', $itemIsAt['Item']['id'])); ?></li>
			</ul>
		</div>
	</div>
		<div class="related">
		<h3><?php echo __('Related Locations'); ?></h3>
	<?php if (!empty($itemIsAt['Location'])): ?>
		<dl>
			<dt><?php echo __('Id'); ?></dt>
		<dd>
	<?php echo $itemIsAt['Location']['id']; ?>
&nbsp;</dd>
		<dt><?php echo __('Shelve ID'); ?></dt>
		<dd>
	<?php echo $itemIsAt['Location']['shelve_ID']; ?>
&nbsp;</dd>
		<dt><?php echo __('Row Number'); ?></dt>
		<dd>
	<?php echo $itemIsAt['Location']['row_number']; ?>
&nbsp;</dd>
		<dt><?php echo __('Section'); ?></dt>
		<dd>
	<?php echo $itemIsAt['Location']['section']; ?>
&nbsp;</dd>
		</dl>
	<?php endif; ?>
		<div class="actions">
			<ul>
				<li><?php echo $this->Html->link(__('Edit Location'), array('controller' => 'locations', 'action' => 'edit', $itemIsAt['Location']['id'])); ?></li>
			</ul>
		</div>
	</div>
	