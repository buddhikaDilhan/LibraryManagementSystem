<div class="cds view">
<h2><?php echo __('Cd'); ?></h2>
	<dl>
            <dt><?php 
                //echo (json_encode($cd));
                  echo __('Item Id'); ?></dt>
		<dd>
			<?php echo h($cd['Cd']['item_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cd Details'); ?></dt>
		<dd>
			<?php 
                        echo $this->Html->link($cd['CdDetail']['title'], array('controller' => 'cd_details', 'action' => 'view', $cd['CdDetail']['ISSN']));
                        echo h($cd['Cd']['ISSN']);
                        ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Cd'), array('action' => 'edit', $cd['Cd']['item_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Cd'), array('action' => 'delete', $cd['Cd']['item_id']), null, __('Are you sure you want to delete # %s?', $cd['Cd']['item_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Cds'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cd'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cd Details'), array('controller' => 'cd_details', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ce Details'), array('controller' => 'cd_details', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Items'), array('controller' => 'items', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item'), array('controller' => 'items', 'action' => 'add')); ?> </li>
	</ul>
</div>
	<div class="related">
		<h3><?php echo __('Related Items'); ?></h3>
	<?php if (!empty($cd['Item'])): ?>
		<dl>
			<dt><?php echo __('Id'); ?></dt>
		<dd>
	<?php echo $cd['Item']['id']; ?>
&nbsp;</dd>
		<dt><?php echo __('Borrowed'); ?></dt>
		<dd>
	<?php echo $cd['Item']['borrowed']; ?>
&nbsp;</dd>
		<dt><?php echo __('Received As'); ?></dt>
		<dd>
	<?php echo $cd['Item']['received_as']; ?>
&nbsp;</dd>
		</dl>
	<?php endif; ?>
		<div class="actions">
			<ul>
				<li><?php echo $this->Html->link(__('Edit Item'), array('controller' => 'items', 'action' => 'edit', $cd['Item']['id'])); ?></li>
			</ul>
		</div>
	</div>
	