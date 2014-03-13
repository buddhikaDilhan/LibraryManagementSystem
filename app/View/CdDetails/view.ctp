<div class="cdDetails view">
<h2><?php echo __('Cd Detail'); ?></h2>
	<dl>
		<dt><?php echo __('ISSN'); ?></dt>
		<dd>
			<?php echo h($cdDetail['CdDetail']['ISSN']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($cdDetail['CdDetail']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Edition'); ?></dt>
		<dd>
			<?php echo h($cdDetail['CdDetail']['edition']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Publisher'); ?></dt>
		<dd>
			<?php echo h($cdDetail['CdDetail']['publisher']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Category'); ?></dt>
		<dd>
			<?php echo h($cdDetail['CdDetail']['category']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Price'); ?></dt>
		<dd>
			<?php echo h($cdDetail['CdDetail']['price']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Cd Detail'), array('action' => 'edit', $cdDetail['CdDetail']['ISSN'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Cd Detail'), array('action' => 'delete', $cdDetail['CdDetail']['ISSN']), null, __('Are you sure you want to delete # %s?', $cdDetail['CdDetail']['ISSN'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Cd Details'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cd Detail'), array('action' => 'add')); ?> </li>
	</ul>
</div>
